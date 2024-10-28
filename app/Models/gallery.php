<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'tag', 'regtime', 'category', 'subcategory', 'album_date', 'venue', 'meta_title', 'meta_desc', 'meta_keywords', 'url', 'instid', 'status',
    ];
}
