<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->disk('public')
                    ->directory('images')
                    ->getUploadedFileNameForStorageUsing(
                        fn($file) => Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension()
                    )
                    ->image()
                    ->imageCropAspectRatio('16/9')
                    ->maxSize(2048)
                    ->required(),
                TextInput::make('github_link')
                    ->default(null),
                TextInput::make('tech_stack')
                    ->default(null),
                TextInput::make('status')
                    ->default(null),
            ]);
    }
}
