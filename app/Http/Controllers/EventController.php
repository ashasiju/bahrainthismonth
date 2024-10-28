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
use App\Models\event;

class EventController extends Controller
{
    public function newevent()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['eventcategory'] = DB::table('event_subcategories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['venues'] = DB::table('venues')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['tags'] = DB::table('tags')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['facilities'] = DB::table('event_facilities')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['organizers'] = DB::table('organizers')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                return view('admin.newevent',$data);
               
            } else { return redirect('/'); }
        }
    }
    public function postevent(Request $req)
    {
        $entry = DB::table('events')->where(['title' => $req->title])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Event Already Present !!']);
        }
        
        $req['start_time'] =$req->input('start_hour').':'.$req->input('start_min');
        $req['end_time'] =$req->input('end_hour').':'.$req->input('end_min');
        event::create($req->all());
        $id = DB::getPdo()->lastInsertId();
        $selected_skills=$req->input('tag');
        if (!empty($selected_skills)) {
            foreach ($selected_skills as $skill) {
                //echo "Selected Skill: " . htmlspecialchars($skill) . "<br>";
                DB::table('event_tags')->insert(['event_id' => $id, 'tag_id' => $skill, 'status' => '1']);

            }
        } 
        $selected_fac=$req->input('facility');
        if (!empty($selected_fac)) {
            foreach ($selected_fac as $facility) {
                //echo "Selected Skill: " . htmlspecialchars($skill) . "<br>";
                DB::table('facilities')->insert(['event_id' => $id, 'facility_id' => $facility, 'status' => '1']);

            }
        } 
        $fimage = $req->file('fimage1');
        if($fimage != "")
               {
                   $time = time();
       
                   if ($_FILES['fimage1']['size'] > 1048576) {
                       //return redirect('/slider_banner')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add1="event/main/".$time.$_FILES['fimage1']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['fimage1']['tmp_name'],$add1)) 
                       {
       
                           $images[] = $add1;
                           DB::table('events')->where('id', $id)->update(['fimage1' => $add1]);
       
                       }
                       
                   }
                   
       
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
                       $add="event/".$time.$_FILES['fimage'.$i]['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['fimage'.$i]['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('events_images')->insert(['events_image' => $add, 'event_id' => $id]);
       
                       }
                       
                   }
                   
       
               }
        }
        return redirect()->back()->withErrors(['Event Added Successfully!!']);
        
    }
    public function viewevent($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['eventcategory'] = DB::table('event_subcategories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['venues'] = DB::table('venues')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['tags'] = DB::table('tags')->where(['instid' => $instid])->orderBy('id', 'desc')->get();
                $data['facilities'] = DB::table('event_facilities')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                $data['events'] = DB::table('events')->where('regtime', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewevent', $data);
                }
                else
                {
                    return view('admin.viewevent');
                }
            } else { return redirect('/'); }
        }
    }
    public function events()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['events'] = DB::table('events')
                ->join('event_subcategories','event_subcategories.id','=','events.category')->where(['events.instid' => $instid])->orderBy('events.id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.events', $data);
                }
                else
                {
                    return view('admin.events');
                }
            } else { return redirect('/'); }
        }
    }
    public function deleteevent($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                

                DB::table('events')->where(['regtime' => $id])->delete();

                return redirect('/eventsmanagement')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }

        public function updateevent(Request $req)
    {
        

        $id = $req->input('id');
        $req['start_time'] =$req->input('start_hour').':'.$req->input('start_min');
        $req['end_time'] =$req->input('end_hour').':'.$req->input('end_min');

        $userUpdate  = magazine_category::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
        $selected_skills=$req->input('tag');
        if (!empty($selected_skills)) {
            foreach ($selected_skills as $skill) {
                //echo "Selected Skill: " . htmlspecialchars($skill) . "<br>";
                DB::table('event_tags')->insert(['event_id' => $id, 'tag_id' => $skill, 'status' => '1']);

            }
        } 
        $fimage = $req->file('fimage1');
        if($fimage != "")
               {
                   $time = time();
       
                   if ($_FILES['fimage1']['size'] > 1048576) {
                       //return redirect('/slider_banner')->withErrors(['Banner Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add1="event/main/".$time.$_FILES['fimage1']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['fimage1']['tmp_name'],$add1)) 
                       {
       
                           $images[] = $add1;
                           DB::table('events')->where('id', $id)->update(['fimage1' => $add1]);
       
                       }
                       
                   }
                   
       
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
                       $add="event/".$time.$_FILES['fimage'.$i]['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['fimage'.$i]['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('events_images')->insert(['events_image' => $add, 'event_id' => $id]);
       
                       }
                       
                   }
                   
       
               }
        }
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    
}
