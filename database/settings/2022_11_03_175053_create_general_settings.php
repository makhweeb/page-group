<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Page group');
        $this->migrator->add('general.site_description', 'Page group description');
        $this->migrator->add('general.site_logo');
        $this->migrator->add('general.phone');
        $this->migrator->add('general.email');
        $this->migrator->add('general.address');
    }
}
