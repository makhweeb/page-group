<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Pages\SettingsPage;

class ManageSite extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = GeneralSettings::class;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('site_name')
                ->label('Наименование сайта')
                ->required(),
            Forms\Components\TextInput::make('site_description_uz')
                ->label('Описание сайта (UZ)')
                ->columnSpan(2)
                ->required(),

            Forms\Components\TextInput::make('site_description_ru')
                ->columnSpan(2)
                ->label('Описание сайта (RU)')
                ->required(),

            Forms\Components\FileUpload::make('site_logo')
                ->label('Логотип сайта')
                ->image()
                ->required(),
            Forms\Components\FileUpload::make('og_image')
                ->label('Изображение для соц. сетей')
                ->image()
                ->required(),
            Forms\Components\TextInput::make('phone')
                ->label('Телефон')
                ->required(),
            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->required(),
            Forms\Components\TextInput::make('address_uz')
                ->label('Адрес (UZ)')
                ->required(),
            Forms\Components\TextInput::make('address_ru')
                ->label('Адрес (RU)')
                ->required()
        ];
    }
}
