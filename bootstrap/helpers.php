<?php

use Illuminate\Support\Facades\Storage;

if(!function_exists('storage_url')) {
    function storage_url($path = '')
    {
        $storage = Storage::disk('public');

        return $storage->url($path);
    }
}