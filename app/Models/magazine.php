<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class magazine extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'body', 'desc1', 'desc2', 'tag', 'category', 'position', 'bdate', 'author', 'meta_title', 'meta_desc', 'meta_keywords',  'url', 'instid', 'regtime', 'status',
    ];
}
