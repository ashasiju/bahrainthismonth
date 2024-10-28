<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class top_banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'url', 'name', 'position', 'start_date', 'end_date', 'status', 'instid'
    ];
}
