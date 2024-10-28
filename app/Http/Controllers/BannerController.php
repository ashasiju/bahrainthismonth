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
use App\Models\slider_banner;
use App\Models\event_banner;
use App\Models\top_banner;
use App\Models\center_banner;
use App\Models\bottom_banner;

class BannerController extends Controller
{
    public function slider_banner()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['slider_banner'] = DB::table('slider_banners')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.slider_banner', $data);
                }
                else
                {
                    return view('admin.slider_banner');
                }
            } else { return redirect('/'); }
        }
    }
    public function newslider_banner()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.newslider_banner');
               
            } else { return redirect('/'); }
        }
    }
    public function postslider_banner(Request $req)
    {
        $entry = DB::table('slider_banners')->where(['url' => $req->url])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Slider Category Already Present !!']);
        }
        slider_banner::create($req->all());
        $id = DB::getPdo()->lastInsertId();
        $image = $req->file('banner_image');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['banner_image']['size'] > 1048576) {
                       return redirect('/slider_banner')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="banner/slider/".$time.$_FILES['banner_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['banner_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('slider_banners')->where('id', $id)->update(['banner' => $add]);
       
                       }
                       
                   }
                   
       
               }
               $image1 = $req->file('mbanner_image');
        if($image1 != "")
               {
                   $time = time();
       
                   if ($_FILES['mbanner_image']['size'] > 1048576) {
                       return redirect('/slider-banner')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="banner/slider/".$time.$_FILES['mbanner_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['mbanner_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('slider_banners')->where('id', $id)->update(['mobile_banner' => $add]);
       
                       }
                       
                   }
                   
       
               }
        
        return redirect()->back()->withErrors(['Slider Category Added Successfully!!']);
        
    }
    public function viewslider_banner($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['slider_banner'] = DB::table('slider_banner')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewslider_banner', $data);
                }
                else
                {
                    return view('admin.viewslider_banner');
                }
            } else { return redirect('/'); }
        }
    }
    public function updateslider_banner(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = magazine_category::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deleteslider_banner($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('slider_banner')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/slider_banner')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }
    public function event_banner()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['event_banner'] = DB::table('event_banners')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.event_banner', $data);
                }
                else
                {
                    return view('admin.event_banner');
                }
            } else { return redirect('/'); }
        }
    }

    public function top_banner()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['top_banner'] = DB::table('top_banners')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.top_banner', $data);
                }
                else
                {
                    return view('admin.top_banner');
                }
            } else { return redirect('/'); }
        }
    }
    public function bottom_banner()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['bottom_banner'] = DB::table('bottom_banners')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.bottom_banner', $data);
                }
                else
                {
                    return view('admin.bottom_banner');
                }
            } else { return redirect('/'); }
        }
    }
    public function center_banner()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['center_banner'] = DB::table('center_banners')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.center_banner', $data);
                }
                else
                {
                    return view('admin.center_banner');
                }
            } else { return redirect('/'); }
        }
    }
    public function viewevent_banner($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['event_banner'] = DB::table('event_banners')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewevent_banner', $data);
                }
                else
                {
                    return view('admin.viewevent_banner');
                }
            } else { return redirect('/'); }
        }
    }
    public function updateevent_banner(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = event_banner::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
        $image = $req->file('banner_image');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['banner_image']['size'] > 1048576) {
                       return redirect('/event_banner')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="banner/event/".$time.$_FILES['banner_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['banner_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('event_banners')->where('id', $id)->update(['banner_image' => $add]);
       
                       }
                       
                   }
                   
       
               }
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deleteevent_banner($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('event_banners')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/event_banner')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }
    public function newtop_banner()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.newtop_banner');
               
            } else { return redirect('/'); }
        }
    }
    public function posttop_banner(Request $req)
    {
        $entry = DB::table('top_banners')->where(['url' => $req->url])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Slider Already Present !!']);
        }
        top_banner::create($req->all());
        $id = DB::getPdo()->lastInsertId();
        $image = $req->file('banner_image');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['banner_image']['size'] > 1048576) {
                       return redirect('/top_banner')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="banner/top/".$time.$_FILES['banner_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['banner_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('top_banners')->where('id', $id)->update(['banner_image' => $add]);
       
                       }
                       
                   }
                   
       
               }
               
        
        return redirect()->back()->withErrors(['Slider Category Added Successfully!!']);
        
    }
    public function viewcenter_banner($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['center_banner'] = DB::table('center_banners')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewcenter_banner', $data);
                }
                else
                {
                    return view('admin.viewcenter_banner');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatecenter_banner(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = center_banner::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
        $image = $req->file('banner_image');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['banner_image']['size'] > 1048576) {
                       return redirect('/center_banner')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="banner/center/".$time.$_FILES['banner_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['banner_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('center_banners')->where('id', $id)->update(['banner_image' => $add]);
       
                       }
                       
                   }
                   
       
               }
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function viewbottom_banner($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['bottom_banner'] = DB::table('bottom_banners')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewbottom_banner', $data);
                }
                else
                {
                    return view('admin.viewbottom_banner');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatebottom_banner(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = bottom_banner::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
        $image = $req->file('banner_image');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['banner_image']['size'] > 1048576) {
                       return redirect('/bottom_banner')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="banner/bottom/".$time.$_FILES['banner_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['banner_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('bottom_banners')->where('id', $id)->update(['banner_image' => $add]);
       
                       }
                       
                   }
                   
       
               }
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
}
