<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'regtime', 'meta_title', 'meta_desc', 'meta_keywords', 'url', 'instid', 'status',
    ];
}
