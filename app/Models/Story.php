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
        'story',
        'image',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'trending',
        'status',
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'category');
    }
}
