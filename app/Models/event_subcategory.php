<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name', 'subcategory_name', 'show_in_event', 'position', 'instid', 'status',
    ];
}
