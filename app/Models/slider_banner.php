<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class slider_banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'url', 'status', 'instid', 'position'
    ];
}
