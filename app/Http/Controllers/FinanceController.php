<?php

namespace App\Http\Controllers;

use App\Http\Traits\CryptoCurrencies;
use App\Http\Traits\Currencies;
use Illuminate\Http\Request;
use App\Http\Traits\Stocks;


class FinanceController extends Controller
{
    use Stocks;
    use Currencies;
    use CryptoCurrencies;

    public function all_Stocks()
    {
        $stocksJsonFomat = $this->stocksInfo();

        $result  = json_decode($stocksJsonFomat);

        return $result;
    }

    public function getStock(string $stockName)
    {
        $stocksJsonFomat = $this->getStockByName_Json($stockName);

        $result  = json_decode($stocksJsonFomat);

        return $result;
    }

    public function all_Currency_USD()
    {
        $currencyJsonFomat = $this->currenciesInfo();

        $result  = json_decode($currencyJsonFomat);

        return $result;
    }

    public function all_Crypto_Currency_USD()
    {
        $cryptoCurrencyJsonFomat = $this->CryptoCurrencies();

        $result  = json_decode($cryptoCurrencyJsonFomat);

        return $result;
    }
}
