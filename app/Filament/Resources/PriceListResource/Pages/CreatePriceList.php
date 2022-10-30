<?php

namespace App\Filament\Resources\PriceListResource\Pages;

use App\Filament\Resources\PriceListResource;
use Filament\Pages\Actions\LocaleSwitcher;
use Filament\Resources\Pages\CreateRecord;

class CreatePriceList extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PriceListResource::class;

    protected function getActions(): array
    {
        return [
            LocaleSwitcher::make()
        ];
    }
}