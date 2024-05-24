<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use GrahamCampbell\ResultType\Success;

class CreateEmployee extends CreateRecord
{
    protected static string $resource = EmployeeResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Si se creo a.';
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->Success()
            ->title('Se creoooooooooooooooooooooooooooo')
            ->body('Que siiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii');
    }
}
