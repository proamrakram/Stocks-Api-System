<?php

namespace App\Http\Traits;

trait Currencies
{
    // $stocksInfo = "AAPL,BTC-USD,EURUSD=X";
    private $currencyString = "";
    private $Currency = ["USD=X,"];
    private $currenciesSymbols = ["EUR", "JPY", "GBP", "AUD", "NZD", "CHF", "CAD", "SEK", "CNY", "HUF", "HKD", "SGD", "INR", "MXN", "PHP", "IDR", "THB", "MYR", "AZR", "RUB"];
    private $freeKeys = ["KohFE1v3Md5zXqxa7vnao9ZCzonDqrXP48ZVgT50","04uXWmqDpQ6IRUiQjtC28CDdzrUoQNu4toFkpfah"];

    private function currenciesInfo()
    {
        foreach ($this->currenciesSymbols as $this->currencySymbol) {
            $this->currencyString .= $this->currencySymbol . $this->Currency[0];
        }
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://yfapi.net/v6/finance/quote?symbols=" . $this->currencyString,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-api-key: KohFE1v3Md5zXqxa7vnao9ZCzonDqrXP48ZVgT50"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
}
