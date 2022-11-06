<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Page group');
        $this->migrator->add('general.site_description_uz', 'Page group description');
        $this->migrator->add('general.site_description_ru', 'Page group description');
        $this->migrator->add('general.site_logo', 'logo.jpg');
        $this->migrator->add('general.phone', '+998 90 0000000');
        $this->migrator->add('general.email', 'email@page-group.uz');
        $this->migrator->add('general.address_uz', 'Toshkent shahri, Yashnabad tumani, 100000');
        $this->migrator->add('general.address_ru', 'г. Ташкент, Яшнабадский район, 100000');
        $this->migrator->add('general.og_image');
    }
}
