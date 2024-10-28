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
use Mail;

use App\Mail\MyTestMail;

class AdminController extends Controller
{
    public function adminsignin(Request $req)
    {
        
        $this->Validate($req, [
            'username' => 'required|string|max:35',
            'password' => 'required|string|min:6',
        ]);
        
        if(Auth::attempt(['username' => $req->username, 'password' => $req->password])){
            return redirect('/adminhome');
        }
        else
        {
        	return redirect('/authbtm')->withErrors(['Invalid Login Credentials']);
        }
    }
    public function adminhome()
    {
        return view('admin.home');
    }
    public function logout() 
    {
        Auth::logout(); // logout user
        Session::flush();
        Redirect::back();
        return redirect('/authbtm')->withErrors(['Logout Succesfully!!']);
    }
    public function postforgotpassword(Request $req)
    {
        $email = $req->input('username');
        //$count = tblLoginVenue::where(['owneremail' => $email])->count();
        $id = "";
        $regemail = "";
        $username = "";

        $data = DB::table('users')->where(['email' => $email])->get(); 

        foreach ($data as $object) {
            $id = $object->id;
            $regemail = $object->email;
            $name= $object->name;
            $regtime= $object->regtime;
        }
        
        if($id != '')
        {
            $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
            $newpassword = substr(str_shuffle($str_result), 0, 8);
            $systemname = '';
            $systememail = '';

            $password = bcrypt($newpassword);

            //DB::table('users')->where('id', $id)->update(['password' => $password]);
DB::table('users')->where('id', $id)->update(['reset_status' => 1]);
          
            $systemname="Bahrain this Month";
            $systememail="noreply@bahrainthismonth.com";
            $subject = $systemname." - Password Reset Link";
$url=url('');
            

            $message = "<div>" . $name . ",<br><br> <b>Forgot your password? No problem!</b><br>

<p>You can set a new one now! </p><br><p>Click this link to reset your password<br><a href='".$url."/resetpassword/".$regtime."'>Reset Your ".$systemname." Password</a><br><br></p><p>If you didn't request a password reset you can ignore this email. </p><br>Regards,<br> Admin ".$systemname.".</div>";

            $mailData = [
  
                'title' => $subject,
              
                'body' => $message
              
              ];
              
              
              
              Mail::to($regemail)->send(new MyTestMail($mailData));
              Mail::to('support@extrememedia.in')->send(new MyTestMail($mailData));
            return redirect('/admin')->withErrors(['Please check your Registered Email Id for Password Reset Link!!']);
        }
        else{
            return redirect('/forgotpassword')->withErrors(['Your registered mail ID is not matching the email you entered! Please enter your registered mail ID!']);
        }
        
    }
    public function resetadminpassword($id)
    {
    	$datas = DB::table('users')->where(['regtime' => $id])->get(); 
        foreach ($datas as $object) 
        {
            $reset_status=$object->reset_status;
        }
        if($reset_status==0)
        {
            ?>
            <script type="text/Javascript">
                alert("Link is not valid now");
                </script>
            <?php
        }
        else
        {
            $data['data'] = DB::table('users')->where(['regtime' => $id])->get();     
                return view('admin.resetpassword',$data);
        }
    }

    public function updateadminresetpassword(Request $req)
    {
        $this->setiingvalidation1($req);
        //$req['password'] = bcrypt($req->password);
       
        $username = $req->input('username');
        $password = $req->input('password');
        $user = $req->input('user');

        $new = bcrypt($password);

        $agents = DB::table('users')->where([
                ['id', '=', $user],
                ['email', '=', $username],
                ])->pluck( 'id');

        if($agents != '[]')
        {
            DB::table('users')
            ->where('id', $user)
            ->update(['password' => $new, 'reset_status' => 1]);
           
            return redirect('/admin')->withErrors(['Reset Password Succesfully. Login again to continue!!']);

        }
        else
        {
            return redirect('/adminresetpassword')->withErrors(['Unable to Process!!']);
        }
    }
}
