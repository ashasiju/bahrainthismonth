<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'category', 'title', 'start_date', 'end_date', 'start_time', 'end_time', 'location', 'venue', 'admission', 'description', 'website', 'facebook', 'photographer', 'comments', 'organizer', 'contact_name', 'contact_phone', 'contact_email', 'bpriority', 'bdate', 'btime', 'blocation', 'bcategory', 'bphotographer', 'bpublication', 'breason', 'badvertiser', 'brhm', 'bcomments', 'is_featured', 'is_sponsored', 'is_approved', 'is_show', 'is_showbanner', 'is_showcountdown', 'meta_title', 'meta_desc', 'meta_keywords', 'url', 'status', 'regtime', 'instid',
    ];
    public static function related_events($catid,$eventid) 
    {
      $par = 0;

      $agents1 = DB::table('events')
      ->join('event_subcategories','event_subcategories.id','=','events.category')->where('events.category','=', $catid)->where('events.id','!=',$eventid)->get(); 

     
      return $agents1;
    }
    
    public static function upcoming_events($eventid) 
    {
      $par = 0;

      $agents1 = DB::table('events')
      ->join('event_subcategories','event_subcategories.id','=','events.category')
      ->where('events.start_date','>=', NOW())->where('events.id','!=',$eventid)->get(); 

     
      return $agents1;
    }
    public static function home_events1() 
    {
      $par = 0;

      $agents1 = DB::table('events')
        ->join('event_subcategories', 'event_subcategories.id', '=', 'events.category')
        ->whereRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') >= NOW()")
        ->orderByRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') desc")
        //->skip(1) // Skip the first two records
        ->take(1) // Take the third record
        ->get(); // Use get() to retrieve the result

     
      return $agents1;
    }
    public static function home_events2() 
    {
      $par = 0;

      $agents1 = DB::table('events')
        ->join('event_subcategories', 'event_subcategories.id', '=', 'events.category')
        ->whereRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') >= NOW()")
        ->orderByRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') desc")
        ->skip(1) // Skip the latest record
        ->take(1) // Take the second latest record
        ->get(); // Retrieve the result

    // Output the query log
     // Output the query log
     //dd(DB::getQueryLog(), $agents1);
      return $agents1;
    }
    public static function home_events3() 
    {
      $par = 0;

      $agents1 = DB::table('events')
        ->join('event_subcategories', 'event_subcategories.id', '=', 'events.category')
        ->whereRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') >= NOW()")
        ->orderByRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') desc")
        ->skip(2) // Skip the first two records
        ->take(1) // Take the third record
        ->get(); // Use get() to retrieve the result

     
      return $agents1;
    }
    public static function todays_events() 
{
    $agents1 = DB::table('events')
        ->join('event_subcategories', 'event_subcategories.id', '=', 'events.category')
        ->whereRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') = CURDATE()")
        ->orderByRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') DESC")
        ->get();

    return $agents1;
}

    public static function home_events4() 
    {
      $par = 0;

      $agents1 = DB::table('events')
        ->join('event_subcategories', 'event_subcategories.id', '=', 'events.category')
        ->whereRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') >= NOW()")
        ->orderByRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') desc")
        ->skip(3) // Skip the first two records
        ->take(1) // Take the third record
        ->get(); // Use get() to retrieve the result

     
      return $agents1;
    }
    public static function events_by_category($id) 
    {
      $par = 0;

      $agents1 = DB::table('events')
        ->join('event_subcategories', 'event_subcategories.id', '=', 'events.category')
        ->whereRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') >= NOW()")
        ->where('category','=',$id)
        ->orderByRaw("STR_TO_DATE(events.start_date, '%d/%m/%Y') desc")
        ->get(); // Use get() to retrieve the result

     
      return $agents1;
    }
}
