<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class updates extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'body', 'desc1', 'desc2', 'tag', 'category', 'is_draft', 'position', 'bdate', 'author', 'meta_title', 'meta_desc', 'meta_keywords', 'instid',  'url', 'regtime', 'status',
    ];
}
