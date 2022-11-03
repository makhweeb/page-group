<?php

namespace App\View\Components;

use Illuminate\Support\Facades\File;
use Illuminate\View\Component;

class DataContentTools extends Component
{
    /**
     * @var string
     */
    public string $file;

    /**
     * @var string
     */
    public ?string $content = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $file)
    {
        $this->file = $file;
        $locale = app()->getLocale();

        $contentPath = resource_path('content/content-tools');
        $filePath = $contentPath . DIRECTORY_SEPARATOR . $locale . DIRECTORY_SEPARATOR . $file;

        if(File::exists($filePath)) {
            $this->content = File::get($filePath);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content-tools');
    }
}
