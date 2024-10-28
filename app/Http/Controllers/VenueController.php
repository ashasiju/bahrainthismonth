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
use App\Models\venue;

class VenueController extends Controller
{
    public function venues()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['venues'] = DB::table('venues')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.venues', $data);
                }
                else
                {
                    return view('admin.venues');
                }
            } else { return redirect('/'); }
        }
    }
    public function newvenue()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['venuecategory'] = DB::table('venue_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['tags'] = DB::table('tags')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                   return view('admin.newvenue',$data);
               
            } else { return redirect('/'); }
        }
    }
    public function postvenue(Request $req)
    {
        $image = $req->file('top_image');
        $image1 = $req->file('featured_image');
        $image2 = $req->file('background_image');
        $this->venuevalidation($req);
        if($image!='')
        {
          $this->venuetopimagevalidation($req);  
        }
        if($image1!='')
        {
          $this->venuefimagevalidation($req);  
        }
        if($image2!='')
        {
          $this->venuebackimagevalidation($req);  
        }
        
        $entry = DB::table('venues')->where(['name' => $req->name])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['venue Already Present !!']);
        }
        venue::create($req->all());
        $id = DB::getPdo()->lastInsertId();

        
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['top_image']['size'] > 1048576) {
                       return redirect('/venues')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="venue/".$time.$_FILES['top_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['top_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('venues')->where('id', $id)->update(['top_image' => $add]);
       
                       }
                       
                   }
                   
       
               }
               
        if($image1 != "")
               {     
                   $time = time();
       
                   if ($_FILES['featured_image']['size'] > 1048576) {
                       return redirect('/venues')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="venue/".$time.$_FILES['mbanner_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['featured_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('venues')->where('id', $id)->update(['featured_image' => $add]);
       
                       }
                       
                   }
                   
       
               }
               
        if($image2 != "")
               {
                   $time = time();
       
                   if ($_FILES['background_image']['size'] > 1048576) {
                       return redirect('/venues')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="venue/".$time.$_FILES['background_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['background_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('venues')->where('id', $id)->update(['background_image' => $add]);
       
                       }
                       
                   }
                   
       
               }
        return redirect()->back()->withErrors(['venue Added Successfully!!']);
        
    }
    public function venuevalidation($request)
    {
    	return $this->Validate($request, [
            'name' => 'required',
            //'top_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            //'featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            //'background_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    }
    public function venuetopimagevalidation($request)
    {
    	return $this->Validate($request, [
           
            'top_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            //'featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            //'background_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    }
    public function venuefimagevalidation($request)
    {
    	return $this->Validate($request, [
           
            //'top_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            //'background_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    }
    public function venuebackimagevalidation($request)
    {
    	return $this->Validate($request, [
           
            //'top_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            //'featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'background_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    }
    public function viewvenue($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['venues'] = DB::table('venues')->where('regtime', '=', $id)->get();
                $data['venuecategory'] = DB::table('venue_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['tags'] = DB::table('tags')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                 

                if(count($data) > 0)
                {
                    return view('admin.viewvenue', $data);
                }
                else
                {
                    return view('admin.viewvenue');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatevenue(Request $req)
    {
        $this->venuevalidation($req); 

        $id = $req->input('id');
        

        $userUpdate  = venue::where('regtime',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
        $image = $req->file('top_image');
        $image1 = $req->file('featured_image');
        $image2 = $req->file('background_image');

        $primage = $req->file('prtop_image');
$primage1 = $req->file('prfeatured_image');
$primage2 = $req->file('prbackground_image');
if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['top_image']['size'] > 1048576) {
                       return redirect('/venues')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="venue/".$time.$_FILES['top_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['top_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('venues')->where('id', $id)->update(['top_image' => $add]);
                           File::delete($primage);
                       }
                       
                   }
                   
       
               }
        if($image1 != "")
               {     
                   $time = time();
       
                   if ($_FILES['featured_image']['size'] > 1048576) {
                       return redirect('/venues')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="venue/".$time.$_FILES['mbanner_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['featured_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('venues')->where('id', $id)->update(['featured_image' => $add]);
                           File::delete($primage1);
                       }
                       
                   }
                   
       
               }
        if($image2 != "")
               {
                   $time = time();
       
                   if ($_FILES['background_image']['size'] > 1048576) {
                       return redirect('/venues')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="venue/".$time.$_FILES['background_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['background_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('venues')->where('id', $id)->update(['background_image' => $add]);
                           File::delete($primage2);
                       }
                       
                   }
                   
       
               }
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deletevenue($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('venues')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/venues')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }
}
