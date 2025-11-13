<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use App\Models\Blog;
use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Products', Product::count())
                ->description('Number of products')
                ->descriptionIcon('heroicon-o-cube')
                ->color('success'),

            Stat::make('Total Blogs', Blog::count())
                ->description('Number of blog posts')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('info'),

            Stat::make('Total Contacts', Contact::count())
                ->description('Number of contact messages')
                ->descriptionIcon('heroicon-o-envelope')
                ->color('warning'),
        ];
    }
}