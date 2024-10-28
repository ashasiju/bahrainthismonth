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
use App\Models\Magazine;

class MagazineController extends Controller
{
    public function magazines()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['magazines'] = DB::table('magazines')
                ->select('*')
                ->join('magazine_categories','magazines.category','=','magazine_categories.id')
                //->join('tags','magazines.tag','=','tags.id')
                ->where(['magazines.instid' => $instid])
                ->where(['magazines.draft_id' => 0])->orderBy('magazines.id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.magazines', $data);
                }
                else
                {
                    return view('admin.magazines');
                }
            } else { return redirect('/'); }
        }
    }
    public function draftmagazines()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['magazines'] = DB::table('magazines')
                ->select('*')
                ->join('update_categories','magazines.category','=','update_categories.id')
                ->join('tags','magazines.tag','=','tags.id')
                ->where(['magazines.instid' => $instid])
                ->where(['magazines.draft_id' => 1])->orderBy('magazines.id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.magazines', $data);
                }
                else
                {
                    return view('admin.magazines');
                }
            } else { return redirect('/'); }
        }
    }
    public function newmagazine()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['tags'] = DB::table('tags')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['ucategory'] = DB::table('magazine_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                $instid = Auth::user()->instid;
                
                   return view('admin.newmagazine',$data);
               
            } else { return redirect('/'); }
        }
    }
    public function postmagazine(Request $req)
    {
        $entry = DB::table('magazines')->where(['title' => $req->title])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['magazine Already Present !!']);
        }
        magazine::create($req->all());
        $id = DB::getPdo()->lastInsertId();
        $fimagealt = $req->input('fimagealt1');
            $image = $req->file('fimage1');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['fimage1']['size'] > 1048576) {
                       //return redirect('/video-management')->withErrors(['Video Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="blog/magazine/".$time.$_FILES['fimage1']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['fimage1']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('magazines')->where('id', $id)->update(['fimage' => $add]);
       
                       }
                       
                   }
                   
       
               }
        $tot = $req->input('tot');
        for($i=2; $i<=$tot; $i++)
        {
            $fimagealt = $req->input('fimagealt'.$i);
            $image = $req->file('fimage');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['fimage'.$i]['size'] > 1048576) {
                       //return redirect('/video-management')->withErrors(['Video Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="blog/magazine/".$time.$_FILES['fimage'.$i]['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['fimage'.$i]['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('magazine_images')->where('id', $id)->update(['image' => $add]);
       
                       }
                       
                   }
                   
       
               }
        }
        return redirect()->back()->withErrors(['Magazine Added Successfully!!']);
        
    }
    public function viewmagazine($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['updates'] = DB::table('magazines')->where('regtime', '=', $id)->get();
                $update_id=$data['updates'][0]->id;
                
                $data['tags'] = DB::table('tags')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['ucategory'] = DB::table('magazine_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['updates_images'] = DB::table('magazine_images')->where('update_id', '=', $update_id)->get();


                if(count($data) > 0)
                {
                    return view('admin.viewmagazine', $data);
                }
                else
                {
                    return view('admin.viewmagazine');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatemagazine(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = magazine::where('regtime',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deletemagazine($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('magazines')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/magazines')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }
}
