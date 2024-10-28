<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Redirect;
use DB;
use View;
use Session;
use Auth;
use File;
use App\Models\user;

class SettingsController extends Controller
{
    public function myprofile()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['details'] = DB::table('users')->where(['id' => '1'])->get();

                if(count($data) > 0)
                {
                    return view('admin.myprofile', $data);
                }
                else
                {
                    return view('admin.myprofile');
                }
            } else { return redirect('/'); }
        }
}
}
