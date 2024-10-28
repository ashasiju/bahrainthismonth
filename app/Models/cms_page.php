<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cms_page extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'instid', 'status', 'description', 'menu', 'url', 'meta_title', 'meta_desc', 'meta_keywords'
    ];
}
