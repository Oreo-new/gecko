<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Checkbox;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    public static ?string $modelLabel = 'Pages';
    public static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Tabs::make('Label')
                ->tabs([
                    Tabs\Tab::make('Page')
                    ->schema([
                        Grid::make()->schema([
                            TextInput::make('title')->autofocus()->required(),
                            TextInput::make('slug')
                                ->helperText('Auto generates slug after saving. You may put a unique slug or leave it blank.'),
                            RichEditor::make('intro_text')->nullable(),
                            FileUpload::make('image')->nullable(),
                            RichEditor::make('full_text')->nullable(),
                            Checkbox::make('status')
                                ->default(true)
                                ->autofocus()
                                ->label('Enable / Disable'),
                        ])->columns(1)
                    ]),

                    Tabs\Tab::make('Seo Page Settings')
                    ->schema([
                        Grid::make()->schema([
                            TextInput::make('meta_title')->autofocus()->nullable(),
                            RichEditor::make('meta_description')->nullable(),
                        ])->columns(1)
                        ]),
            ])->columns(1)->columnSpan('full')
         ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\TextColumn::make('title'),
                Columns\TextColumn::make('slug'),
            ])
            ->filters([
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }    
}
