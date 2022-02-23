<?php

namespace App\Http\Controllers;

use App\Http\Traits\Stocks;
use Illuminate\Http\Request;
use stdClass;

use function PHPSTORM_META\type;

class ViewsController extends Controller
{
    protected $RealFinance;

    public function __construct(FinanceController $RealFinance)
    {
        $this->RealFinance = $RealFinance;
    }
    public function ar_dashboard()
    {
        return view('dashboard-ar.dashboard-ar');
    }

    public function en_dashboard()
    {

    }






    public function ar_StocksView()
    {
        $stocksInfo = $this->RealFinance->all_Stocks()->quoteResponse;

        if ($stocksInfo->error) {
            return "there is error in the connection with API system";
        } else {
            return view('dashboard-ar.stocks', ["stocksInfo" => $stocksInfo->result, 'x' => 0]);
        }
    }

    public function ar_CurrenciesView()
    {
        $currenciesInfo = $this->RealFinance->all_Currency_USD()->quoteResponse;

        if ($currenciesInfo->error) {
            return "there is error in the connection with API system";
        } else {
            return view('dashboard-ar.currencies', ["stocksInfo" => $currenciesInfo->result, 'x' => 0]);
        }
    }

    public function ar_cryptoCurrencies()
    {
        $cryptoCurrenciesInfo = $this->RealFinance->all_Crypto_Currency_USD()->quoteResponse;
        if ($cryptoCurrenciesInfo->error) {
            return "there is error in the connection with API system";
        } else {
            return view('dashboard-ar.cryptoCurrencies', ["stocksInfo" => $cryptoCurrenciesInfo->result, 'x' => 0]);
        }
    }

    public function getStock(string $stock)
    {
        $stocksInfo = $this->RealFinance->getStock($stock)->quoteResponse;

        if ($stocksInfo->error) {
            return "there is error in the connection with API system";
        } else {
            return view('dashboard-ar.stocks', ["stocksInfo" => $stocksInfo->result, 'x' => 0]);
        }
    }
}
