<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class venue extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'category', 'location',  'bg_color', 'telephone', 'description', 'website',  'tag', 'regtime', 'instid', 'meta_title', 'meta_desc', 'meta_keywords', 'url' 
    ];

    public static function venuefinder($x) 
    {
      $par = '';

      $agents1 = DB::table('venues')->where(['id' => $x])->pluck('name'); 

      foreach ($agents1 as $agent1=>$value1) {
          $par = $value1;
      }
      return $par;
    }
}
