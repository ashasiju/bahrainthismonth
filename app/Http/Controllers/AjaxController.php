<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Session;
use Auth;
use File;
class AjaxController extends Controller
{
    //
    public function eventshowapprove(Request $request)
    {
        $states = DB::table('event_subcategories')->where('id', $request->db_id)->update(['eventshow' => '1']);
        return "Success";
    }

    public function eventshowreject(Request $request)
    {
        $states = DB::table('event_subcategories')->where('id', $request->db_id)->update(['eventshow' => '0']);
        
        
        return "Success";
    }
    public function mcategorystatus(Request $request)
    {
        $states = DB::table('magazine_categories')->where('id', $request->cat_id)->update(['status' => $request->status]);
        return "Success";
    }
    public function wstorystatus(Request $request)
    {
        $states = DB::table('wstories')->where('id', $request->cat_id)->update(['status' => $request->status]);
        return "Success";
    }
    public function vcategorystatus(Request $request)
    {
        $states = DB::table('venue_categories')->where('id', $request->cat_id)->update(['status' => $request->status]);
        return "Success";
    }
    public function eventcategorystatus(Request $request)
    {
        $states = DB::table('event_categories')->where('id', $request->cat_id)->update(['status' => $request->status]);
        return "Success";
    }
    public function facilitystatus(Request $request)
    {
        $states = DB::table('event_facilities')->where('id', $request->cat_id)->update(['status' => $request->status]);
        return "Success";
    }
    public function userstatus(Request $request)
    {
        $states = DB::table('users')->where('id', $request->cat_id)->update(['status' => $request->status]);
        return "Success";
    }
    public function eventsubcategorystatus(Request $request)
    {
        $states = DB::table('event_subcategories')->where('id', $request->cat_id)->update(['status' => $request->status]);
        return "Success";
    }
    public function cmsmenustatus(Request $request)
    {
        $states = DB::table('cms_menus')->where('id', $request->cat_id)->update(['status' => $request->status]);
        return "Success";
    }
    public function ucategorystatus(Request $request)
    {
        $states = DB::table('update_categories')->where('id', $request->cat_id)->update(['status' => $request->status]);
        return "Success";
    }
    public function linkstatus(Request $request)
    {
        $states = DB::table('links')->where('id', $request->cat_id)->update(['status' => $request->status]);
        return "Success";
    }
    public function deditionstatus(Request $request)
    {
        $states = DB::table('deditions')->where('id', $request->id)->update(['status' => $request->status]);
        return "Success";
    }
    public function slider_bannerstatus(Request $request)
    {
        $states = DB::table('slider_banner')->where('id', $request->id)->update(['status' => $request->status]);
        return "Success";
    }
    public function venuestatus(Request $request)
    {
        $states = DB::table('venues')->where('cat_id', $request->id)->update(['status' => $request->status]);
        return "Success";
    }
    public function ticketstatus(Request $request)
    {
        $states = DB::table('tickets')->where('id', $request->cat_id)->update(['status' => $request->status]);
        return "Success";
    }
    public function cmspagestatus(Request $request)
    {
        $states = DB::table('cms_pages')->where('id', $request->cat_id)->update(['status' => $request->status]);
        return "Success";
    }
    public function getdata(Request $request)
    {
        $data = DB::table('cms_pages')->where('menu', $request->menu_id)->get();

        return response()->json([
            'data' => $data
        ]);
    }
}
