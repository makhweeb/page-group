<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PostResource extends Resource
{
    use Translatable;

    protected static ?string $model = Post::class;

    protected static ?string $pluralLabel = 'Статьи';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label("Заголовок")
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label("Изображение")
                    ->required(),
                Forms\Components\Textarea::make('excerpt')
                    ->label("Краткое описание")
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\RichEditor::make('content')
                    ->label("Содержание")
                    ->columnSpan(2)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label("ID"),
                Tables\Columns\TextColumn::make('title')
                    ->label("Заголовок")
                    ->searchable()
                    ->sortable()
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}