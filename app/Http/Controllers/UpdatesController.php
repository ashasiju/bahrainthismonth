<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Redirect;
use DB;
use View;
use Session;
use Auth;
use File;
use App\Models\Updates;


class UpdatesController extends Controller
{
    public function updates()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['updates'] = DB::table('updates')
                ->select('*')
                ->join('update_categories','updates.category','=','update_categories.id')
                ->join('tags','updates.tag','=','tags.id')
                ->where(['updates.instid' => $instid])
                ->where(['updates.is_draft' => 0])
                ->orderBy('updates.id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.updates', $data);
                }
                else
                {
                    return view('admin.updates');
                }
            } else { return redirect('/'); }
        }
    }
    public function draftupdates()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['updates'] = DB::table('updates')
                ->select('*')
                ->join('update_categories','updates.category','=','update_categories.id')
                ->join('tags','updates.tag','=','tags.id')
                ->where(['updates.instid' => $instid])
                ->where(['updates.is_draft' => 1])->orderBy('updates.id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.updates', $data);
                }
                else
                {
                    return view('admin.updates');
                }
            } else { return redirect('/'); }
        }
    }
    public function newupdate()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['tags'] = DB::table('tags')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['ucategory'] = DB::table('update_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                $instid = Auth::user()->instid;
                
                   return view('admin.newupdate',$data);
               
            } else { return redirect('/'); }
        }
    }
    public function postupdate(Request $req)
    {
        $entry = DB::table('updates')->where(['title' => $req->title])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['update Already Present !!']);
        }
        updates::create($req->all());
        $id = DB::getPdo()->lastInsertId();
        $tot = $req->input('tot');
        for($i=1; $i<=$tot; $i++)
        {
            $fimagealt = $req->input('fimagealt'.$i);
            $image = $req->file('fimage'.$i);
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['fimage'.$i]['size'] > 1048576) {
                       //return redirect('/video-management')->withErrors(['Video Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="blog/updates/featured/".$time.$_FILES['fimage'.$i]['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['fimage'.$i]['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('updates_images')->insert(['updates_image' => $add, 'update_id' => $id]);
       
                       }
                       
                   }
                   
       
               }
        }
        return redirect()->back()->withErrors(['update Added Successfully!!']);
        
    }
    public function removeupdateimage($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $data = DB::table('updates_images')->where('id', '=', $id)->get();
                $uploads = '';
                foreach($data as $object)
                {
                    $uploads = $object->updates_image;
                }

                if($uploads != '')
                {
                    File::delete($uploads);
                }
                
                DB::table('updates_images')->where('id', $id)->delete();

                return redirect()->back()->withErrors(['Image Removed Successfully!!']);
            } else { return redirect('/'); }
        }

    }
    public function viewupdate($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['updates'] = DB::table('updates')->where('regtime', '=', $id)->get();
                $update_id=$data['updates'][0]->id;
                
                $data['tags'] = DB::table('tags')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['ucategory'] = DB::table('update_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['updates_images'] = DB::table('updates_images')->where('update_id', '=', $update_id)->get();


                if(count($data) > 0)
                {
                    return view('admin.viewupdate', $data);
                }
                else
                {
                    return view('admin.viewupdate');
                }
            } else { return redirect('/'); }
        }
    }
    public function updateupdates(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = updates::where('regtime',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
        $tot = $req->input('tot');
        for($i=1; $i<=$tot; $i++)
        {
            $fimagealt = $req->input('fimagealt'.$i);
            $image = $req->file('fimage'.$i);
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['fimage'.$i]['size'] > 1048576) {
                       //return redirect('/video-management')->withErrors(['Video Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="blog/featured/".$time.$_FILES['fimage'.$i]['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['fimage'.$i]['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('updates_images')->insert(['updates_image' => $add, 'update_id' => $id]);
       
                       }
                       
                   }
                   
       
               }
        }
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deleteupdate($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('updates')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/updates')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }
}
