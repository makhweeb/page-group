<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Page group');
        $this->migrator->add('general.site_description_uz', 'Page group description');
        $this->migrator->add('general.site_description_ru', 'Page group description');
        $this->migrator->add('general.site_logo');
        $this->migrator->add('general.phone');
        $this->migrator->add('general.email');
        $this->migrator->add('general.address_uz');
        $this->migrator->add('general.address_ru');
        $this->migrator->add('general.og_image');
    }
}
