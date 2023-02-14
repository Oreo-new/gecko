<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageArticleResource\Pages;
use App\Filament\Resources\PageArticleResource\RelationManagers;
use App\Models\PageArticle;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;

class PageArticleResource extends Resource
{
    protected static ?string $model = PageArticle::class;

    public static ?string $navigationIcon = 'heroicon-o-book-open';
    public static ?string $navigationLabel = 'Page Articles';
    public static  ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('title')->autofocus()->required(),
            TextInput::make('mini_title')->nullable(),
            TextInput::make('slug')
                ->helperText('Auto generates slug after saving. You may put a unique slug or leave it blank.'),
            RichEditor::make('description')->nullable(),
            FileUpload::make('main_image')->nullable(),
            FileUpload::make('secondary_image')->nullable(),
            TextInput::make('link')->nullable(),
            Select::make('page_id')
                    ->relationship('page', 'title')
                    ->preload()
                    ->required(),
            TextInput::make('order')->default(0)->nullable(),
            Checkbox::make('status')
                ->default(true)
                ->autofocus()
                ->label('Enable / Disable'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\TextColumn::make('title')
                ->searchable()
                ->sortable(),
                Columns\TextColumn::make('slug'),
                Columns\TextColumn::make('page.title')
                    ->label('Page'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPageArticles::route('/'),
            'create' => Pages\CreatePageArticle::route('/create'),
            'edit' => Pages\EditPageArticle::route('/{record}/edit'),
        ];
    }    
}
