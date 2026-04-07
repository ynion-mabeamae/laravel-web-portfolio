<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('company')
                    ->required(),
                TextInput::make('date_from')
                    ->default(null),
                TextInput::make('date_to')
                    ->default(null),
            ]);
    }
}
