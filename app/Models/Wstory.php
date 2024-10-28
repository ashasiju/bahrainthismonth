<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wstory extends Model
{
    use HasFactory;
    protected $fillable = [
        'venue_id', 'code', 'instid', 'type', 'status',
    ];
}
