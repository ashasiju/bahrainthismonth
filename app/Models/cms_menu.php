<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cms_menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'instid', 'status',
    ];
}
