<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PriceList extends Model
{
    use HasTranslations;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'content',
    ];

    public $translatable = ['name', 'content'];
}