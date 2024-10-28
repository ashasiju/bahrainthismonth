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
use App\Models\Blog;

class BlogController extends Controller
{
    public function postuserblog(Request $req)
    {
        $entry = DB::table('blogs')->where(['title' => $req->title])->get(); 
        
        if(count($entry) > 0)
        {
            return redirect()->back()->withErrors(['Blog Already Present !!']);
        }
        Blog::create($req->all());
        $id = DB::getPdo()->lastInsertId();
        $image = $req->file('fimage');
        if($image != "")
               {
                   $time = time();
       
                   if ($_FILES['fimage']['size'] > 1048576) {
                       return redirect('/userblog')->withErrors(['Blog Added Successfully!! Unable to add File due to large size!!']);
                   }
                   else
                   {
                       $add="blog/user/".$time.$_FILES['fimage']['name']; // the path with the file name where the file will be stored, upload is the directory name. 
       
                       if(move_uploaded_file ($_FILES['fimage']['tmp_name'],$add)) 
                       {
       
                           $images[] = $add;
                           DB::table('blogs')->where('id', $id)->update(['fimage' => $add]);
       
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
                              $add="blog/user/".$time.$_FILES['fimage'.$i]['name']; // the path with the file name where the file will be stored, upload is the directory name. 
              
                              if(move_uploaded_file ($_FILES['fimage'.$i]['tmp_name'],$add)) 
                              {
              
                                  $images[] = $add;
                                  DB::table('blog_images')->insert(['blog_image' => $add, 'blog_id' => $id]);
              
                              }
                              
                          }
                          
              
                      }
               }
        
        return redirect()->back()->withErrors(['Slider Category Added Successfully!!']);
        
    }
}
