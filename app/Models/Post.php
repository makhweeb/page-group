<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
        'image',
        'excerpt',
        'content'
    ];

    public $translatable = [
        'title',
        'image',
        'excerpt',
        'content'
    ];
}