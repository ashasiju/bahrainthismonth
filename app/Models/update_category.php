<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class update_category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name', 'instid', 'status',
    ];
}
