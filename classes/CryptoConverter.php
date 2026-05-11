<?php

class CryptoConverter
{
    // properties

    function __construct(public string $currencyCode)
    {
    }

    // methods
    public function convert(float $value = 1): float|bool
    {
        $crypto = $this->currencyCode;
        $api = "https://cex.io/api/ticker/$crypto/USD";
        $json = file_get_contents($api);
        if (!$json) {
            echo "Error! API Request Problem!";
            return false;
        }
        $data = json_decode($json, true);
        if (!$data) {
            echo "Error! API Response Problem!";
            return false;
        }
        $last = $data['last'];
        return $value * $last;
    }
}

