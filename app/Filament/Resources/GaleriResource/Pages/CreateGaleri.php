<?php

namespace App\Filament\Resources\GaleriResource\Pages;

use App\Filament\Resources\GaleriResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGaleri extends CreateRecord
{
    protected static string $resource = GaleriResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['galeri_url'] = $data['media_type'] === 'link'
            ? $data['galeri_link']
            : $data['galeri_upload'];

        $data['jenis'] = $data['media_type'] === 'link'
            ? 'link'
            : GaleriResource::getFileType(file: $data['galeri_upload']);

        return $data;
    }
}
