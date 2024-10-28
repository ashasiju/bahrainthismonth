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
use App\Models\gallery;
use App\Models\video;


class GalleryController extends Controller
{
    public function gallerylist()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['gallery'] = DB::table('galleries')
                ->join('event_categories','event_categories.id','=','galleries.category')
                ->join('event_subcategories','event_subcategories.id','=','galleries.subcategory')

                ->where(['galleries.instid' => $instid])
                ->orderBy('galleries.id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.gallery', $data);
                }
                else
                {
                    return view('admin.gallery');
                }
            } else { return redirect('/'); }
        }
    }
        public function videolist()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['video'] = DB::table('videos')
                ->where(['instid' => $instid])
                ->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.video', $data);
                }
                else
                {
                    return view('admin.video');
                }
            } else { return redirect('/'); }
        }
    }
    public function newgallery()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['tags'] = DB::table('tags')->where(['instid' => $instid])->orderBy('id', 'desc')->get(); 
                $data['event_category'] = DB::table('event_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get(); 
                $data['event_subcategory'] = DB::table('event_subcategories')->where(['instid' => $instid])->orderBy('id', 'desc')->get(); 
                $data['venues'] = DB::table('venues')->where(['instid' => $instid])->orderBy('id', 'desc')->get(); 

                return view('admin.newgallery',$data);
               
            } else { return redirect('/'); }
        }
    }
    public function postgallery(Request $req)
    {
        $entry = DB::table('galleries')->where(['title' => $req->title])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Gallery Already Present !!']);
        }
        gallery::create($req->all());
        $id = DB::getPdo()->lastInsertId();
        
        $image = $req->file('cover_image');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['cover_image']['size'] > 1048576) {
                       return redirect('/gallery')->withErrors(['Gallery Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="gallery/cover/".$time.$_FILES['cover_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['cover_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('galleries')->where('id', $id)->update(['cover_image' => $add]);
       
                       }
                       
                   }
                   
       
               }
              /* if ($req->hasFile('gallery_image')) {
               $tot = $req->file('gallery_image');
               
               for($i=0; $i<count($tot); $i++)
               //foreach($tot as $total)
               {
                 
                   $image = $req->file('gallery_image');
               if($image != "")
                      {
                          $time = time();
              
                          if ($_FILES['gallery_image']['size'][$i] > 1048576) {
                              //return redirect('/video-management')->withErrors(['Video Details Added Successfully!! Unable to add File due to large size!!']);
                          }
                          else
                          {
                              $add="gallery/image/".$time.$_FILES['gallery_image']['name'][$i]; // the path with the file name where the file will be stored, upload is the directory name. 
              
                              if(move_uploaded_file ($_FILES['gallery_image']['tmp_name'][$i],$add)) 
                              {
              
                                  $images[] = $add;
                                  DB::table('gallery_images')->insert(['gallery_image' => $add, 'gallery_id' => $id]);
              
                              }
                              
                          }
                          
                        }
                      }
               }  */         
        
        return redirect()->back()->withErrors(['Gallery Added Successfully!!']);
        
    }
    public function postvideo(Request $req)
    {
        $entry = DB::table('videos')->where(['title' => $req->title])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Video Already Present !!']);
        }
        video::create($req->all());
        $id = DB::getPdo()->lastInsertId();
        
        $image = $req->file('cover_image');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['cover_image']['size'] > 1048576) {
                       return redirect('/video')->withErrors(['Gallery Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="gallery/video/".$time.$_FILES['cover_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['cover_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('videos')->where('id', $id)->update(['cover_image' => $add]);
       
                       }
                       
                   }
                   
       
               }
              
              
                        
        
        return redirect()->back()->withErrors(['Video Added Successfully!!']);
        
    }
    public function updatevideo(Request $req)
    {
        $id = $req->input('id');
        $userUpdate  = video::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        
        $image = $req->file('cover_image');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['cover_image']['size'] > 1048576) {
                       return redirect('/video')->withErrors(['Gallery Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="gallery/video/".$time.$_FILES['cover_image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['cover_image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           //DB::table('videos')->where('id', $id)->update(['cover_image' => $add]);
                           DB::table('videos')->where('id', $id)->update(['cover_image' => $add]);

                       }
                       
                   }
                   
       
               }
              
              
                        
        
        return redirect()->back()->withErrors(['Video Updated Successfully!!']);
        
    }
    public function newvideo()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
               // $data['tags'] = DB::table('tags')->where(['instid' => $instid])->orderBy('id', 'desc')->get(); 
               // $data['event_category'] = DB::table('event_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get(); 
               // $data['event_subcategory'] = DB::table('event_subcategories')->where(['instid' => $instid])->orderBy('id', 'desc')->get(); 
               // $data['venues'] = DB::table('venues')->where(['instid' => $instid])->orderBy('id', 'desc')->get(); 

                return view('admin.newvideo');
               
            } else { return redirect('/'); }
        }
    }
    public function viewgallery($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['gallery'] = DB::table('galleries')->where('regtime', '=', $id)->get();
                $data['tags'] = DB::table('tags')->where(['instid' => $instid])->orderBy('id', 'desc')->get(); 
                $data['event_category'] = DB::table('event_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get(); 
                $data['event_subcategory'] = DB::table('event_subcategories')->where(['instid' => $instid])->orderBy('id', 'desc')->get(); 
                $data['venues'] = DB::table('venues')->where(['instid' => $instid])->orderBy('id', 'desc')->get(); 



                if(count($data) > 0)
                {
                    return view('admin.viewgallery', $data);
                }
                else
                {
                    return view('admin.viewgallery');
                }
            } else { return redirect('/'); }
        }
    }
    public function viewvideo($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['video'] = DB::table('videos')->where('regtime', '=', $id)->get();
                


                if(count($data) > 0)
                {
                    return view('admin.viewvideo', $data);
                }
                else
                {
                    return view('admin.viewvideo');
                }
            } else { return redirect('/'); }
        }
    }
}
