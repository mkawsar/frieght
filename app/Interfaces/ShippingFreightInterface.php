<?php

namespace App\Interfaces;

interface ShippingFreightInterface
{
    public function getFreightClass(): array;
    public function getCountryCode(): array;
    public function getPackageType(): array;

    public function getCurrencyCode(): array;
}
