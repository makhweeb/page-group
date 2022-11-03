<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public ?string $site_name;
    public ?string $site_description;
    public ?string $site_logo;
    public ?string $phone;
    public ?string $email;
    public ?string $address;

    public static function group(): string
    {
        return 'general';
    }
}