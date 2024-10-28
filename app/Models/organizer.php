<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class organizer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'company_name',
        'email', 'website',
        'status', 'phoneno', 'mobileno',
        'facebook', 'twitter', 'instid',

    ];
    public static function getorganizer($x) 
    {
            $agents1 = DB::table('organizers')->where(['id' => $x])->get(); 
    	return $agents1;
    }
}
