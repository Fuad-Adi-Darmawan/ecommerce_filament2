<?php

namespace App\Filament\Resources\Products\Pages;

use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\Products\ProductResource;

class ViewProduct extends ViewRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
                ->label('Back to Products')
                ->url(ProductResource::getUrl('index'))
                ->icon('heroicon-o-arrow-left')
                ->color('secondary')
        ];
    }
}