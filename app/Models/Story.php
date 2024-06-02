<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $table = 'stories';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'synopsis',
        'image',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'trending',
        'status',
    ];
}