<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Session;
use Auth;
use File;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
       
       
                $data['event_category'] = DB::table('event_categories')
                ->orderBy('id', 'asc')->get();
                $data['top_ad'] = DB::table('slider_banners')
                ->where('position','=',1)
                ->where('status','=',1)
                ->orderBy('id', 'asc')->get();
                $data['middle_ad'] = DB::table('slider_banners')
                ->where('position','=',2)
                ->where('status','=',1)
                ->orderBy('id', 'asc')->get();
                $data['bottom_ad'] = DB::table('slider_banners')
                ->where('position','=',3)
                ->where('status','=',1)
                ->orderBy('id', 'asc')->get();
                $data['events'] = DB::table('events')
                ->join('event_subcategories','event_subcategories.id','=','events.category')->orderBy('events.id', 'desc')->take(8)->get();
                $data['nightlife'] = DB::table('events')
                ->join('event_subcategories','event_subcategories.id','=','events.category')->orderBy('events.id', 'desc')->get();
                $data['magazines'] = DB::table('magazines')
                ->select('*')
                ->join('magazine_categories','magazines.category','=','magazine_categories.id')
                ->where(['magazines.draft_id' => 0])->orderBy('magazines.id', 'desc')->get();
                $data['photos'] = DB::table('galleries')
                ->orderBy('id', 'desc')->get();
                $data['video'] = DB::table('videos')
                ->orderBy('id', 'desc')->get();
                
                if(count($data) > 0)
                {
                    return view('home', $data);
                }
                else
                {
                    return view('home');
                }
           
    }
    public function gallery()
    {
       
                
                $data['gallery'] = DB::table('gallery')
                //->where(['instid' => $instid])
                ->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('gallery', $data);
                }
                else
                {
                    return view('gallery');
                }
           
    }
    public function addblog()
    {
        $data['ucategory'] = DB::table('update_categories')->where(['status' => 1])->orderBy('id', 'desc')->get();

        if(count($data) > 0)
        {
            return view('addblog', $data);
        }
        else
        {
            return view('addblog');
        }
    }
    public function addgallery()
    {
        $data['category'] = DB::table('event_subcategories')->where(['status' => 1])->orderBy('id', 'desc')->get();

        if(count($data) > 0)
        {
            return view('addgallery', $data);
        }
        else
        {
            return view('addgallery');
        }
    }
    public function addevent()
    {
       
                
               // $data['gallery'] = DB::table('gallery')
                //->where(['instid' => $instid])
                //->orderBy('id', 'desc')->get();

                //if(count($data) > 0)
                //{
                    //return view('gallery', $data);
                //}
                //else
               // {
                    return view('addevent');
                //}
           
    }
    public function magazine()
    {
       
                
                $data['magazines'] = DB::table('magazines')
                ->select('*')
                ->join('magazine_categories','magazines.category','=','magazine_categories.id')
                //->join('tags','magazines.tag','=','tags.id')
                //->where(['instid' => $instid])
                ->orderBy('magazines.id', 'desc')->get();
                $data['latest'] = DB::table('magazines')
                //->where(['instid' => $instid])
                ->orderBy('id', 'desc')->get();
                $data['featured'] = DB::table('magazines')
                ->where(['featured' => 1])
                ->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('magazine', $data);
                }
                else
                {
                    return view('magazine');
                }
           
    }
    public function usersignin(Request $req)
    {
        $this->Validate($req, [
            'email' => 'required',
            'password' => 'required|string|min:6',
        ]);
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password, 'status' => '1'])){
            return redirect('/Dashboard');
        }
        else
        {
            $fail_count = DB::table('users')->where(['email' => $req->email, 'status' => '1'])->count();
 
            if($fail_count > '0')
            {
                return redirect()->back()->withErrors(['Invalid Credentials!! Please try again!!']);
            }

            $count = DB::table('users')->where(['email' => $req->email, 'status' => '0'])->count();
 
            if($count>0)
            {
                return redirect()->back()->withErrors(['You are yet to verify your email ID. Please check your registered mail ID to complete the verification process.']);
            }

            $email_count = DB::table('users')->where(['email' => $req->email])->count();
 
            if($email_count == '0')
            {
                return redirect()->back()->withErrors(['You are not yet registered. Please Sign up to proceed further.']);
            }   
        }
    }
    public function usersignup(Request $req)
    {
        $pass = $req->input('password');
        $email = $req->input('email');
        $name = $req->input('name');
        $mobile = $req->input('mobile');
        $password = bcrypt($pass);
        $uexit = DB::table('users')->where('email', $email)->value('id');
        if($uexit!='')
        {
        $msg='This mail id already exist!! Please Login !!$su';
        return redirect('/')->withErrors($msg); 
        }
        else
        {
       User::create($req->all());
       $lastid = DB::getPdo()->lastInsertId();
       $regtime=time();
        DB::table('users')->where('id', $lastid)->update(['status' => 0,'password'=>$password,'regtime'=>$regtime]);
        DB::table('users')->where('id', $lastid)->update(['type' => 5]);     
    $subject = "Thanks for signing up! This mail contains your login detail";
    $message ='<table width="100%" border="0" cellspacing="0" cellpadding="0">';			
                $message .= '<tr>';
                $message .= '<td colspan="2" align="center" style="vertical-align:top; font-size:18px; padding:5px; font-family: Helvetica,Arial,sans-serif; color: #ffffff; padding-top:15px;padding-bottom:15px; text-align:center;background-color:#000; " class="padding-copy"> Bahrain This Month Account Details are below : </td>';
                $message .= '</tr>';
                $message .= '</table>';                   
                $message .='<table width="100%" border="0" cellspacing="0" cellpadding="0" style="word-break:break-all; padding:20px;">';                
                $message .= '<tr>';
                $message .= '<td colspan="2" style="vertical-align:top; font-size: 13px; padding:15px 5px 10px 5px; font-family: Helvetica,Arial,sans-serif;">Dear ' . $name . '</td>';
                $message .= '</tr>';               
                $message .= '<tr>';
                $message .= '<td colspan="2" style="vertical-align:top; font-size: 13px; padding:5px 5px 10px 5px; font-family: Helvetica,Arial,sans-serif;">You have registered successfully, your login details are given below :</td>';
                $message .= '</tr>';               
                $message .= '<tr>';
                $message .= '<td style="vertical-align:top; font-size: 13px; padding:5px;word-break:break-all;font-family: Helvetica,Arial,sans-serif;" width="120">Login id</td>';
                $message .= '<td style="vertical-align:top; font-size: 13px; padding:5px;word-break:break-all;font-family: Helvetica,Arial,sans-serif;">'.$email.'</td>';
                $message .= '</tr>';               
                $message .= '<tr>';
                $message .= '<td style="vertical-align:top; font-size: 13px; padding:5px;word-break:break-all;font-family: Helvetica,Arial,sans-serif;" width="120">Password</td>';
                $message .= '<td style="vertical-align:top; font-size: 13px; padding:5px;word-break:break-all;font-family: Helvetica,Arial,sans-serif;">'.$password.'</td>';
                $message .= '</tr>';     
                $confirm_login_url=url('/loginactive/'.$lastid.'/'.$regtime);
                $message .= '<tr>';
                $message .= '<td colspan="2" align="center" style="vertical-align:top; font-size:18px; padding:20px 2px; font-family: Helvetica,Arial,sans-serif; color: #ffffff; text-align:center;background-color:#fff;">';
                $message .= '<span> <a href="'.$confirm_login_url.'" style="color: #ffffff;text-decoration: none;background: #000;line-height: 38px;height: 38px;display: inline-block;width: 250px;border-radius: 5px;font-size:14px">Click To Activate Your Account</a></span>';
                $message .= '</td>';
                $message .= '</tr>';
                $message .= '</table>';
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

    // More headers
    $headers .= 'From: Bahrainthismonth <noreply@bahrainthismonth.com>' . "\r\n";

    mail($email,$subject,$message,$headers);

        $msg='You Have Successfully Registered, Check your inbox, including the spam folder and use the link to confirm your address';
		
		//return redirect('/Join-Us')->withErrors($msg);

        return redirect('/')->withErrors($msg);
      }
    }
    public function events()
    {
        $data['top_ad'] = DB::table('slider_banners')
        ->where('position','=',1)
        ->where('status','=',1)
        ->orderBy('id', 'asc')->get();
        $data['middle_ad'] = DB::table('slider_banners')
                ->where('position','=',2)
                ->where('status','=',1)
                ->orderBy('id', 'asc')->get();
                $data['bottom_ad'] = DB::table('slider_banners')
                ->where('position','=',3)
                ->where('status','=',1)
                ->orderBy('id', 'asc')->get();
        $data['event_category'] = DB::table('event_categories')
        ->orderBy('id', 'asc')->get();        
        $data['events'] = DB::table('events')
        ->join('event_subcategories','event_subcategories.id','=','events.category')->orderBy('events.id', 'desc')->get();
        $data['devents'] = DB::table('events')
        ->join('event_subcategories','event_subcategories.id','=','events.category')->where('event_subcategories.id','=',2)->orderBy('events.id', 'desc')->take(8)->get();
        $data['nevents'] = DB::table('events')
        ->join('event_subcategories','event_subcategories.id','=','events.category')->where('event_subcategories.id','=',1)->orderBy('events.id', 'desc')->take(8)->get();
        $data['sevent_title']='';
        $data['sevent_date']='';
        $data['sevent_category']='';
        $data['sevent_venue']='';
        $data['event_subcategory'] = DB::table('event_subcategories')
        ->orderBy('id', 'asc')->get(); 
        $data['venue'] = DB::table('venues')
        ->orderBy('id', 'asc')->get(); 

                if(count($data) > 0)
                {
                    return view('events', $data);
                }
                else
                {
                    return view('events');
                }
           
    }
    public function eventlistfilter(Request $request)
    {   
        $eventlists = null;
        $event_title = $request->input('event_title');
        $event_date = $request->input('event_date');
        $event_category = $request->input('event_category', false);
        $event_venue = $request->input('event_venue', false);

        $data['sevent_title']= $request->input('event_title', false);
        $data['sevent_date']= $request->input('event_date', false);
        $data['sevent_venue'] = $request->input('event_venue', false);
        $data['sevent_category'] = $request->input('event_category', false);
        $data['top_ad'] = DB::table('slider_banners')
        ->where('position','=',1)
        ->where('status','=',1)
        ->orderBy('id', 'asc')->get();
        $data['middle_ad'] = DB::table('slider_banners')
                ->where('position','=',2)
                ->where('status','=',1)
                ->orderBy('id', 'asc')->get();
                $data['bottom_ad'] = DB::table('slider_banners')
                ->where('position','=',3)
                ->where('status','=',1)
                ->orderBy('id', 'asc')->get();
    $events = DB::table('events')
        ->join('event_subcategories','event_subcategories.id','=','events.category')
        
        //->orderBy('events.id', 'desc')

        ->when($event_title, function($query,$event_title) {
            $query->where('events.title', 'LIKE', '%' . $event_title . '%');
        })
        ->when($event_venue, function($query,$event_venue) {
            $query->where('events.venue', $event_venue);
        })
        ->when($event_category, function($query,$event_category) {
            $query->where('events.category', $event_category);
        })
        ->when($event_date, function($query, $event_date) {
            // Convert the input date format from YYYY-MM-DD to DD/MM/YYYY using native PHP functions
            $formattedDate = date('d/m/Y', strtotime($event_date));
            
            $query->where('events.start_date', $formattedDate);
        });
        
         $data['events'] = $events->get();
        
        $data['event_category'] = DB::table('event_categories')
        ->orderBy('id', 'asc')->get(); 
        $data['event_subcategory'] = DB::table('event_subcategories')
        ->orderBy('id', 'asc')->get(); 
        $data['devents'] = DB::table('events')
        ->join('event_subcategories','event_subcategories.id','=','events.category')->where('event_subcategories.id','=',2)->orderBy('events.id', 'desc')->take(8)->get();
        $data['nevents'] = DB::table('events')
        ->join('event_subcategories','event_subcategories.id','=','events.category')->where('event_subcategories.id','=',1)->orderBy('events.id', 'desc')->take(8)->get();
        $data['venue'] = DB::table('venues')
        ->orderBy('id', 'asc')->get(); 

                if(count($data) > 0)
                {
                    return view('events', $data);
                }
                else
                {
                    return view('events');
                }
    }
    public function venue()
    {
       
        $data['top_ad'] = DB::table('slider_banners')
        ->where('position','=',1)
        ->where('status','=',1)
        ->orderBy('id', 'asc')->get();
                $data['venues'] = DB::table('venues')
                //->where(['instid' => $instid])
                ->orderBy('id', 'desc')->get();
                $data['venue_category'] = DB::table('venue_categories')
                //->where(['instid' => $instid])
                ->orderBy('id', 'desc')->get();
                if(count($data) > 0)
                {
                    return view('venue', $data);
                }
                else
                {
                    return view('venue');
                }
           
    }
    public function dashboard()
    {
       
              

              
                    return view('dashboard');
                
           
    }
    public function singleevent($category,$title)
    {
        
      $id = DB::table('events')
      ->where('url','=', $title)->pluck('id'); 
      
      $data['og_url']= url('/').'/'.$title;
       
        $data['top_ad'] = DB::table('slider_banners')
        ->where('position','=',1)
        ->where('status','=',1)
        ->orderBy('id', 'asc')->get();
        $data['middle_ad'] = DB::table('slider_banners')
                ->where('position','=',2)
                ->where('status','=',1)
                ->orderBy('id', 'asc')->get();
                $data['bottom_ad'] = DB::table('slider_banners')
                ->where('position','=',3)
                ->where('status','=',1)
                ->orderBy('id', 'asc')->get();
                
                $data['event'] = DB::table('events')
                ->join('event_subcategories','event_subcategories.id','=','events.category')
                ->where(['events.url' => $title])->orderBy('events.id', 'desc')->get();
                $data['event_tags'] = DB::table('event_tags')
                ->join('tags','tags.id','=','event_tags.tag_id')
                ->where(['event_tags.event_id' => $id])->orderBy('event_tags.id', 'desc')->get();
                

                if(count($data) > 0)
                {
                    return view('singleevent', $data);
                }
                else
                {
                    return view('singleevent');
                }
           
        
    }
    public function singlevenue($id)
    {
        
                
                $data['venues'] = DB::table('venues')
                //->join('event_subcategories','event_subcategories.id','=','events.category')
                ->where(['venues.regtime' => $id])->orderBy('venues.id', 'desc')->get();
                

                if(count($data) > 0)
                {
                    return view('singlevenue', $data);
                }
                else
                {
                    return view('singlevenue');
                }
           
        
    }
    public function postusergallery(Request $req)
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
               $tot = $req->input('tot');
              
               for($i=0; $i<=$tot; $i++)
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
        
        return redirect()->back()->withErrors(['Gallery Added Successfully!!']);
        
    }
    

    public function fetchEventsByDate(Request $request)
{
    $date = $request->date; // This will be in 'Y-m-d' format (e.g., '2024-10-17')

    // Convert the 'Y-m-d' date format to 'd/m/Y' to match the format in your database
    $formattedDate = date('d/m/Y', strtotime($date));

    // Query the events for the specified date
    $events = DB::table('events')
        ->join('event_subcategories', 'event_subcategories.id', '=', 'events.category')
        ->whereRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') = STR_TO_DATE(?, '%d/%m/%Y')", [$formattedDate])
        ->orderByRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') DESC")
        ->get(['events.title', 'events.start_time']); // Select only the necessary fields

    // Return the events as a JSON response
    return response()->json(['events' => $events]);
}
public function fetchEventCalendar(Request $request)
    {
        // Convert the incoming date (you may handle month and year separately)
       /* $date = $request->input('month') . '-' . $request->input('year') . '-01'; 
        $formattedDate = date('Y-m-d', strtotime($date));

        // You would replace this with your own method to fetch events
        $events = $this->getEventOnDate($formattedDate);

        // Return the view with events data
        return view('calendar_event_list', ['date' => $formattedDate, 'events' => $events]);*/
        $data['currentYear']	=	$request->input('year');
			$data['currentMonth']	=	$request->input('month');
			//$views = 'event_calendar/event_calendar';
			//$this->load->view($views,$data);
            return view('event_calendar', $data);

    }
    private function getEventOnDate($date)
    {
        // Replace this with your logic to fetch events from the database
        //return Event::whereDate('event_date', $date)->get();
        // Convert the 'Y-m-d' date format to 'd/m/Y' to match the format in your database
    $formattedDate = date('d/m/Y', strtotime($date));

    // Query the events for the specified date
    return $events = DB::table('events')
        ->join('event_subcategories', 'event_subcategories.id', '=', 'events.category')
        ->whereRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') = STR_TO_DATE(?, '%d/%m/%Y')", [$formattedDate])
        ->orderByRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') DESC")
        ->get(['events.title', 'events.start_time']); // Select only the necessary fields

    }
}
