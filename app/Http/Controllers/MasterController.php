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
use App\Models\tags;
use App\Models\organizer;

use App\Models\links;
use App\Models\tickets;
use App\Models\magazine_category;
use App\Models\event_category;
use App\Models\event_facility;
use App\Models\event_subcategory;
use App\Models\venue_category;
use App\Models\update_category;
use App\Models\social_media;
use App\Models\address;
use App\Models\dedition;
use App\Models\cms_menu;
use App\Models\cms_page;
use App\Models\Wstory;

class MasterController extends Controller
{
    public function wstory()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['wstorys'] = DB::table('wstories')
                ->join('venues','venues.id','=','wstories.venue_id')
                ->select('*','wstories.status as substatus','wstories.id as subid')

                ->where(['wstories.instid' => $instid])->orderBy('wstories.id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.wstory', $data);
                }
                else
                {
                    return view('admin.wstory');
                }
            } else { return redirect('/'); }
        }
    }
    public function organizers()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['organizers'] = DB::table('organizers')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.organizers', $data);
                }
                else
                {
                    return view('admin.organizers');
                }
            } else { return redirect('/'); }
        }
    }
    public function neworganizer()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.neworganizer');
               
            } else { return redirect('/'); }
        }
    }
    public function postorganizer(Request $req)
    {
        $entry = DB::table('organizers')->where(['name' => $req->name])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['organizer Already Present !!']);
        }
        organizer::create($req->all());
        
        return redirect()->back()->withErrors(['organizer Added Successfully!!']);
        
    }
    public function postwstory(Request $req)
    {
        $entry = DB::table('wstories')->where(['code' => $req->code])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Web Story Already Present !!']);
        }
        Wstory::create($req->all());
        
        return redirect()->back()->withErrors(['Web Story Added Successfully!!']);
        
    }
    public function vieworganizer($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['organizers'] = DB::table('organizers')->where('id', '=', $id)->get();
                //print_r($data['organizers']);

                //exit();

                if(count($data) > 0)
                {
                    return view('admin.vieworganizer', $data);
                }
                else
                {
                    return view('admin.vieworganizer');
                }
            } else { return redirect('/'); }
        }
    }
    public function viewwstory($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['venue'] = DB::table('venues')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                $data['wstorys'] = DB::table('wstories')->where('id', '=', $id)->get();
                //print_r($data['organizers']);

                //exit();

                if(count($data) > 0)
                {
                    return view('admin.viewwstory', $data);
                }
                else
                {
                    return view('admin.viewwstory');
                }
            } else { return redirect('/'); }
        }
    }
    public function updateorganizer(Request $req)
    {
        

        $id = $req->input('id');
        $entry = DB::table('organizers')->where('name','=',$req->name)->where('id','!=',$id)->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['organizer Already Present !!']);
        }

        $userUpdate  = organizer::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function updatewstory(Request $req)
    {
        

        $id = $req->input('id');
        $entry = DB::table('wstories')->where('code','=',$req->code)->where('id','!=',$id)->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Web Story Already Present !!']);
        }

        $userUpdate  = wstory::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deleteorganizer($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('organizers')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/organizers')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }
    public function tags()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['tags'] = DB::table('tags')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.tags', $data);
                }
                else
                {
                    return view('admin.tags');
                }
            } else { return redirect('/'); }
        }
    }
    public function newtag()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.newtag');
               
            } else { return redirect('/'); }
        }
    }
    public function posttag(Request $req)
    {
        $entry = DB::table('tags')->where(['tag_name' => $req->tag_name])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Tag Already Present !!']);
        }
        tags::create($req->all());
        
        return redirect()->back()->withErrors(['Tag Added Successfully!!']);
        
    }
    public function viewtag($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['tags'] = DB::table('tags')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewtag', $data);
                }
                else
                {
                    return view('admin.viewtag');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatetag(Request $req)
    {
        

        $id = $req->input('id');
        $entry = DB::table('tags')->where('tag_name','=',$req->tag_name)->where('id','!=',$id)->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Tag Already Present !!']);
        }

        $userUpdate  = tags::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deletetag($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('tags')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/tags')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }
    public function mcategory()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['mcategory'] = DB::table('magazine_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.mcategory', $data);
                }
                else
                {
                    return view('admin.mcategory');
                }
            } else { return redirect('/'); }
        }
    }
    public function newmcategory()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.newmcategory');
               
            } else { return redirect('/'); }
        }
    }
    public function postmcategory(Request $req)
    {
        $entry = DB::table('magazine_categories')->where(['category_name' => $req->category_name])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Magazine Category Already Present !!']);
        }
        magazine_category::create($req->all());
        
        return redirect()->back()->withErrors(['Magazine Category Added Successfully!!']);
        
    }
    public function viewmcategory($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['mcategory'] = DB::table('magazine_categories')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewmcategory', $data);
                }
                else
                {
                    return view('admin.viewmcategory');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatemcategory(Request $req)
    {
        

        $id = $req->input('id');
        $entry = DB::table('magazine_categories')->where('category_name','=',$req->category_name)->where('id','!=',$id)->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Magazine Category Already Present !!']);
        }

        $userUpdate  = magazine_category::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deletemcategory($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('magazine_categories')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/mcategory')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }

    public function vcategory()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['vcategory'] = DB::table('venue_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.vcategory', $data);
                }
                else
                {
                    return view('admin.vcategory');
                }
            } else { return redirect('/'); }
        }
    }
    public function newvcategory()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.newvcategory');
               
            } else { return redirect('/'); }
        }
    }
    public function postvcategory(Request $req)
    {
        $entry = DB::table('venue_categories')->where(['category_name' => $req->category_name])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Venue Category Already Present !!']);
        }
        venue_category::create($req->all());
        
        return redirect()->back()->withErrors(['Venue Category Added Successfully!!']);
        
    }
    public function viewvcategory($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['vcategory'] = DB::table('venue_categories')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewvcategory', $data);
                }
                else
                {
                    return view('admin.viewvcategory');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatevcategory(Request $req)
    {
        

        $id = $req->input('id');
        $entry = DB::table('venue_categories')->where('category_name','=',$req->category_name)->where('id','!=',$id)->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Venue Category Already Present !!']);
        }

        $userUpdate  = venue_category::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deletevcategory($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('venue_categories')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/vcategory')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }


    public function ucategory()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['ucategory'] = DB::table('update_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.ucategory', $data);
                }
                else
                {
                    return view('admin.ucategory');
                }
            } else { return redirect('/'); }
        }
    }
    public function newucategory()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.newucategory');
               
            } else { return redirect('/'); }
        }
    }
    public function postucategory(Request $req)
    {
        $entry = DB::table('update_categories')->where(['category_name' => $req->category_name])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Updates Category Already Present !!']);
        }
        update_category::create($req->all());
        
        return redirect()->back()->withErrors(['Updates Category Added Successfully!!']);
        
    }
    public function viewucategory($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['ucategory'] = DB::table('update_categories')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewucategory', $data);
                }
                else
                {
                    return view('admin.viewucategory');
                }
            } else { return redirect('/'); }
        }
    }
    public function updateucategory(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = update_category::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deleteucategory($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('update_categories')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/ucategory')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }

    public function links()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['links'] = DB::table('links')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.links', $data);
                }
                else
                {
                    return view('admin.links');
                }
            } else { return redirect('/'); }
        }
    }
    public function newlink()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.newlink');
               
            } else { return redirect('/'); }
        }
    }
    public function postlink(Request $req)
    {
        $entry = DB::table('links')->where(['title' => $req->title])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['link Already Present !!']);
        }
        links::create($req->all());
        
        return redirect()->back()->withErrors(['link Added Successfully!!']);
        
    }
    public function viewlink($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['links'] = DB::table('links')->where('regtime', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewlink', $data);
                }
                else
                {
                    return view('admin.viewlink');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatelink(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = links::where('regtime',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deletelink($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('links')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/links')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }

    public function dedition()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['deditions'] = DB::table('deditions')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.dedition', $data);
                }
                else
                {
                    return view('admin.dedition');
                }
            } else { return redirect('/'); }
        }
    }
    public function viewdedition($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['dedition'] = DB::table('deditions')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewdedition', $data);
                }
                else
                {
                    return view('admin.viewdedition');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatededition(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = dedition::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 

    public function tickets()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['tickets'] = DB::table('tickets')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.tickets', $data);
                }
                else
                {
                    return view('admin.tickets');
                }
            } else { return redirect('/'); }
        }
    }
    public function newticket()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.newticket');
               
            } else { return redirect('/'); }
        }
    }
    public function postticket(Request $req)
    {
        $entry = DB::table('tickets')->where(['title' => $req->title])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Ticket Already Present !!']);
        }
        tickets::create($req->all());
        
        return redirect()->back()->withErrors(['Ticket Added Successfully!!']);
        
    }
    public function viewticket($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['tickets'] = DB::table('tickets')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewticket', $data);
                }
                else
                {
                    return view('admin.viewticket');
                }
            } else { return redirect('/'); }
        }
    }
    public function updateticket(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = tickets::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deleteticket($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('tickets')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/tickets')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }

    public function eventcategory()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['eventcategory'] = DB::table('event_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.eventcategory', $data);
                }
                else
                {
                    return view('admin.eventcategory');
                }
            } else { return redirect('/'); }
        }
    }
    public function neweventcategory()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.neweventcategory');
               
            } else { return redirect('/'); }
        }
    }
    public function posteventcategory(Request $req)
    {
        $entry = DB::table('event_categories')->where(['category_name' => $req->category_name])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Event Category Already Present !!']);
        }
        event_category::create($req->all());
        
        return redirect()->back()->withErrors(['Event Category Added Successfully!!']);
        
    }
    public function vieweventcategory($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['eventcategory'] = DB::table('event_categories')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.vieweventcategory', $data);
                }
                else
                {
                    return view('admin.vieweventcategory');
                }
            } else { return redirect('/'); }
        }
    }
    public function updateeventcategory(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = event_category::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deleteeventcategory($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('event_categories')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/eventcategory')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }
    public function eventsubcategory()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['eventsubcategory'] = DB::table('event_subcategories')
                ->select('*','event_subcategories.id as subid','event_subcategories.status as substatus')
                ->join('event_categories','event_subcategories.category_name','=','event_categories.id')
                ->where('event_subcategories.instid','=', $instid)
                ->orderBy('event_subcategories.id', 'desc')->get();
                if(count($data) > 0)
                {
                    return view('admin.eventsubcategory', $data);
                }
                else
                {
                    return view('admin.eventsubcategory');
                }
            } else { return redirect('/'); }
        }
    }
    public function neweventsubcategory()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['eventcategory'] = DB::table('event_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                   return view('admin.neweventsubcategory',$data);
               
            } else { return redirect('/'); }
        }
    }
    public function newwstory()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['venue'] = DB::table('venues')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                   return view('admin.newwstory',$data);
               
            } else { return redirect('/'); }
        }
    }
    public function posteventsubcategory(Request $req)
    {
        $entry = DB::table('event_subcategories')->where(['subcategory_name' => $req->subcategory_name])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Event Sub Category Already Present !!']);
        }
        event_subcategory::create($req->all());
        
        return redirect()->back()->withErrors(['Event Sub Category Added Successfully!!']);
        
    }
    public function vieweventsubcategory($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['eventcategory'] = DB::table('event_categories')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                $data['eventsubcategory'] = DB::table('event_subcategories')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.vieweventsubcategory', $data);
                }
                else
                {
                    return view('admin.vieweventsubcategory');
                }
            } else { return redirect('/'); }
        }
    }
    public function updateeventsubcategory(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = event_subcategory::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deleteeventsubcategory($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('event_subcategories')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/eventsubcategory')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }
    public function socialmedia()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['socialmedia'] = DB::table('social_media')->where('id', '=', '1')->get();
                

                if(count($data) > 0)
                {
                    return view('admin.socialmedia', $data);
                }
                else
                {
                    return view('admin.socialmedia');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatesocialmedia(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = social_media::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 

    public function address()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['address'] = DB::table('addresses')->where('id', '=', '1')->get();
                

                if(count($data) > 0)
                {
                    return view('admin.address', $data);
                }
                else
                {
                    return view('admin.address');
                }
            } else { return redirect('/'); }
        }
    }
    public function addressvalidation($request)
    {
    	return $this->Validate($request, [
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'faxno' => 'required',
            'website' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    }
    public function updateaddress(Request $req)
    {
        
        $this->addressvalidation($req);
        $id = $req->input('id');
        

        $userUpdate  = address::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
        $image = $req->file('image');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['image']['size'] > 1048576) {
                       //return redirect('/video-management')->withErrors(['Video Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="web/".$time.$_FILES['image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('addresses')->where('id', $id)->update(['image' => $add]);
       
                       }
                       
                   }
                   
       
               }
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 

    public function cmsmenu()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['cmsmenu'] = DB::table('cms_menus')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.cmsmenu', $data);
                }
                else
                {
                    return view('admin.cmsmenu');
                }
            } else { return redirect('/'); }
        }
    }
    public function newcmsmenu()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.newcmsmenu');
               
            } else { return redirect('/'); }
        }
    }
    public function postcmsmenu(Request $req)
    {
        $entry = DB::table('cms_menus')->where(['title' => $req->title])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Menu Already Present !!']);
        }
        cms_menu::create($req->all());
        
        return redirect()->back()->withErrors(['Menu Added Successfully!!']);
        
    }
    public function viewcmsmenu($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['cmsmenu'] = DB::table('cms_menus')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewcmsmenu', $data);
                }
                else
                {
                    return view('admin.viewcmsmenu');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatecmsmenu(Request $req)
    {
        

        $id = $req->input('id');
        $entry = DB::table('cms_menus')->where('title' ,'=', $req->title)->where('id' ,'!=', $id)->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Menu Already Present !!']);
        }

        $userUpdate  = cms_menu::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deletecmsmenu($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('cms_menus')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/cmsmenu')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }
    public function cmspage()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['cmspage'] = DB::table('cms_pages')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.cmspage', $data);
                }
                else
                {
                    return view('admin.cmspage');
                }
            } else { return redirect('/'); }
        }
    }
    public function newcmspage()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['cmsmenu'] = DB::table('cms_menus')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                
                
                   return view('admin.newcmspage',$data);
               
            } else { return redirect('/'); }
        }
    }
    public function postcmspage(Request $req)
    {
        $entry = DB::table('cms_pages')->where(['menu' => $req->menu])->get(); 
        
        if(count($entry) > 0)
        {
            $userUpdate  = cms_page::where('menu',$req->menu)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
        }
        else
        {
        cms_page::create($req->all());
        }
        return redirect()->back()->withErrors(['CMS page Updated Successfully!!']);
        
    }
    public function viewcmspage($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['cmsmenu'] = DB::table('cms_menus')->get();

                $data['cmspages'] = DB::table('cms_pages')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewcmspage', $data);
                }
                else
                {
                    return view('admin.viewcmspage');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatecmspage(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = cms_page::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deletecmspage($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('cms_pages')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/cmspage')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }

    public function facility()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['facility'] = DB::table('event_facilities')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.facility', $data);
                }
                else
                {
                    return view('admin.facility');
                }
            } else { return redirect('/'); }
        }
    }
    public function newfacility()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.newfacility');
               
            } else { return redirect('/'); }
        }
    }
    public function postfacility(Request $req)
    {
        $entry = DB::table('event_facilities')->where(['title' => $req->title])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Event Facility Already Present !!']);
        }
        event_facility::create($req->all());
        $fid = DB::getPdo()->lastInsertId();
        $image = $req->file('image');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['image']['size'] > 1048576) {
                       //return redirect('/video-management')->withErrors(['Video Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="event_facility/".$time.$_FILES['image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('event_facilities')->where('id', $fid)->update(['icon' => $add]);
       
                       }
                       
                   }
                   
       
               }
        return redirect()->back()->withErrors(['Event Facility Added Successfully!!']);
        
    }
    public function viewfacility($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['facility'] = DB::table('event_facilities')->where('id', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewfacility', $data);
                }
                else
                {
                    return view('admin.viewfacility');
                }
            } else { return redirect('/'); }
        }
    }
    public function updatefacility(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = event_facility::where('id',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
        $image = $req->file('image');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['image']['size'] > 1048576) {
                       //return redirect('/video-management')->withErrors(['Video Details Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="event_facility/".$time.$_FILES['image']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['image']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('event_facilities')->where('id', $fid)->update(['icon' => $add]);
       
                       }
                       
                   }
                   
       
               }
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deletefacility($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('event_facilities')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/facility')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }

}
