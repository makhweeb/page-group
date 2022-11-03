<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public ?string $site_name;
    public ?string $site_description_uz;
    public ?string $site_description_ru;
    public ?string $site_logo;
    public ?string $phone;
    public ?string $email;
    public ?string $address_uz;
    public ?string $address_ru;
    public ?string $og_image;

    public function getTranslated(string $attribute)
    {
        $locale = app()->getLocale();

        return $this->{$attribute . '_' . $locale};
    }

    public static function group(): string
    {
        return 'general';
    }
}