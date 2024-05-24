<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
{
    return [
        'all' => Tab::make("xd")->icon('heroicon-m-user-group'),
        // 'active' => Tab::make()
        //     ->modifyQueryUsing(fn (Builder $query) => $query->where('active', true)),
        // 'inactive' => Tab::make()
        //     ->modifyQueryUsing(fn (Builder $query) => $query->where('active', false)),
    ];
}
}
