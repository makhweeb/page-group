<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Faq extends Model
{
    use HasTranslations;

    public $timestamps = false;

    protected $fillable = [
        'question',
        'answer',
    ];

    public $translatable = ['question', 'answer'];
}