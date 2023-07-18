<?php

namespace App\Services;

use App\Interfaces\SourceInterface;

class FedexFreightRateService implements SourceInterface
{
    public function getUrl(): string
    {
        return env('FEDEX_FREIGHT_API');
    }
}
