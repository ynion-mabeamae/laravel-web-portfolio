<?php

namespace App\Filament\Widgets;

use App\Models\Experience;
use App\Models\Message;
use App\Models\Organization;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Projects', Project::count())
                ->description('Total projects')
                ->icon('heroicon-o-folder'),
            Stat::make('Skills', Skill::count())
                ->description('Total skills')
                ->icon('heroicon-o-wrench'),
            Stat::make('Messages', Message::count())
                ->description('Total messages')
                ->icon('heroicon-o-envelope'),
            Stat::make('Organizations', Organization::count())
                ->description('Total organizations')
                ->icon('heroicon-o-building-office'),
            Stat::make('Experiences', Experience::count())
                ->description('Total experiences')
                ->icon('heroicon-o-briefcase'),
            Stat::make('Profiles', Profile::count())
                ->description('Total profiles')
                ->icon('heroicon-o-user'),
        ];
    }
}
