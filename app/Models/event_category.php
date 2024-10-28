<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name', 'instid', 'status',
    ];
    public static function getcategory($x) 
    {
      $par = '';

      $agents1 = DB::table('event_subcategories')->where(['id' => $x])->pluck('category_name'); 

      foreach ($agents1 as $agent1=>$value1) {
          $par = $value1;
    	}
    	return $par;
    }
}
