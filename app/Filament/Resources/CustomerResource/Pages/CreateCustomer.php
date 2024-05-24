<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        return static::getModel()::create($data);
    }
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['data'] = 'xd';

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'User registered';
    }

    protected function beforeCreate(): void
    {
        if (! $this->getRecord()) {
            Notification::make()
                ->warning()
                ->title('You don\'t have an active subscription!')
                ->body('Choose a plan to continue.')
                ->persistent()
                // ->actions([
                //     Action::make('patient')
                //         ->button()
                //         ->url(route('patient'), shouldOpenInNewTab: true),
                // ])
                ->send();

            $this->halt();
        }
    }
}
