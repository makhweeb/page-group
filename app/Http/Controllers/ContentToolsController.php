<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ContentToolsController extends Controller
{
    public function save()
    {
        $contentPath = resource_path('content/content-tools');
        $locale = app()->getLocale();

        $entities = request()->input('entities');

        foreach ($entities as $file => $content) {
            $path = $contentPath . DIRECTORY_SEPARATOR . $locale . DIRECTORY_SEPARATOR . $file;

            $fileName = Arr::last(explode('/', $file));

            File::makeDirectory(
                str_replace($fileName, '', $path),
                0777,
                true,
                true
            );

            File::put($path, $content);
        }
    }

    public function upload()
    {
        $uploadedFile = request()->file('image');

        $storage = Storage::disk('public');
        $path = $uploadedFile->store('images', 'public');

        [$width, $height] = getimagesize($storage->path($path));

        return response()->json([
            'filePath' => $storage->url($path),
            'size' => [$width, $height]
        ]);
    }
}
