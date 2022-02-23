<?php

namespace App\Http\Traits;

trait Stocks
{
    // $stocksInfo = "AAPL,BTC-USD,EURUSD=X";
    private  $stocksSymbols = "AAPL,MSFT,GOOGL,GOOG,AMZN,TSLA,TSM,NVDA,FB,V,UNH,JPM,JNJ,BAC,PG,WMT,HD,MA,XOM,BABA,PTE,TM,CVX,KO,NTES";
    private $freeKeys = ["KohFE1v3Md5zXqxa7vnao9ZCzonDqrXP48ZVgT50","04uXWmqDpQ6IRUiQjtC28CDdzrUoQNu4toFkpfah"];
    private function stocksInfo()
    {

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://yfapi.net/v6/finance/quote?symbols=" . $this->stocksSymbols,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-api-key: KohFE1v3Md5zXqxa7vnao9ZCzonDqrXP48ZVgT50",
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

    private function getStockByName_Json(string $stockName)
    {

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://yfapi.net/v6/finance/quote?symbols=" . $stockName,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-api-key: KohFE1v3Md5zXqxa7vnao9ZCzonDqrXP48ZVgT50",
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
