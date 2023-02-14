<?php

namespace App\Filament\Resources\PageArticleResource\Pages;

use App\Filament\Resources\PageArticleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageArticles extends ListRecords
{
    protected static string $resource = PageArticleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
