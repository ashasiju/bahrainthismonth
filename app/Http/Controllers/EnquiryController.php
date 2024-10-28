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


class EnquiryController extends Controller
{
    //
    public function subscribers()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['subscribers'] = DB::table('subscribers')->where(['instid' => $instid])->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.subscribers', $data);
                }
                else
                {
                    return view('admin.subscribers');
                }
            } else { return redirect('/'); }
        }
    }
}
