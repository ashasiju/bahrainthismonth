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
use App\Models\User;

class UserController extends Controller
{
    public function users()
    {
        if (!Auth::check()) { return redirect('/'); } else {
		
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                $data['users'] = DB::table('users')->where(['instid' => $instid])->where('type','!=', 1)->orderBy('id', 'desc')->get();

                if(count($data) > 0)
                {
                    return view('admin.users', $data);
                }
                else
                {
                    return view('admin.users');
                }
            } else { return redirect('/'); }
        }
    }
    public function newuser()
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                
                   return view('admin.newuser');
               
            } else { return redirect('/'); }
        }
    }
    public function postuser(Request $req)
    {
        $entry = DB::table('users')->where(['email' => $req->email])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['User Already Present !!']);
        }
        User::create($req->all());
        
        return redirect()->back()->withErrors(['User Added Successfully!!']);
        
    }
    public function viewuser($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;
                $data['users'] = DB::table('users')->where('regtime', '=', $id)->get();
                

                if(count($data) > 0)
                {
                    return view('admin.viewuser', $data);
                }
                else
                {
                    return view('admin.viewuser');
                }
            } else { return redirect('/'); }
        }
    }
    public function updateuser(Request $req)
    {
        

        $id = $req->input('id');
        

        $userUpdate  = User::where('regtime',$id)->first();
        if ($userUpdate) {
           $speak = $userUpdate->update($req->all());
        }
       
        return redirect()->back()->withErrors(['Updation completed Successfully!!']);
    } 
    public function deleteuser($id)
    {
        if (!Auth::check()) { return redirect('/'); } else {
            if((Auth::user()->type == 1))
            {
                $instid = Auth::user()->instid;

                DB::table('users')->where(['id' => $id, 'instid' => $instid])->delete();

                return redirect('/users')->withErrors(['Deleted Successfully!!']);
            } else { return redirect('/'); }
        }
    }

}
