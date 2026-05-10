<?php

class CryptoConverter
{
    // properties
    public $currencyCode;

    function __construct(string $currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    // methods
    public function convert(float $value): float
    {
        return 1;
    }
}

$c = new CryptoConverter(currencyCode: "BTC");
