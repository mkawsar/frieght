<?php

namespace App\Services;

use App\Interfaces\SourceInterface;

class FedexFreightRateService implements SourceInterface
{
    public function getAuthUrl(): string
    {
        return env('FEDEX_FREIGHT_API') . '/oauth/token';
    }
}
