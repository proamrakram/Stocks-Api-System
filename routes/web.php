<?php

use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ViewsController;
use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

//Arabic Pages
Route::get('/ar/dashboard',[ViewsController::class,'ar_dashboard'])->name('ar_dashboard');
Route::get('/ar/stocks',[ViewsController::class,'ar_StocksView'])->name('ar_StocksView');
Route::get('/ar/currencies',[ViewsController::class,'ar_CurrenciesView'])->name('ar_CurrenciesView');
Route::get('/ar/cryptoCurrencies',[ViewsController::class,'ar_cryptoCurrencies'])->name('ar_cryptoCurrencies');
//English Pages
Route::get('/en/dashboard',[ViewsController::class,'en_dashboard'])->name('en_dashboard');
Route::get('/en/stocks',[ViewsController::class,'en_StocksView'])->name('en_StocksView');
Route::get('/en/currencies',[ViewsController::class,'en_CurrenciesView'])->name('en_CurrenciesView');
Route::get('/en/cryptoCurrencies',[ViewsController::class,'en_cryptoCurrencies'])->name('en_cryptoCurrencies');
//ChoosenStock
Route::get('/ar/stocks/{stock}', [ViewsController::class,'getStock'])->name('getStock');


//Stocks
// Route::get('/ar/all-stocks', [FinanceController::class,'all_Stocks'])->name('stocks');
// //Currencies
// Route::get('/ar/all_Currency_USD', [FinanceController::class,'all_Currency_USD'])->name('all_Currency_USD');
// //CryptoCurrencies
// Route::get('/ar/all_Crypto_Currency_USD', [FinanceController::class,'all_Crypto_Currency_USD'])->name('all_Crypto_Currency_USD');





// Route::get('/ar/products',[ViewsController::class,'products_ar'])->name('products_ar');
// Route::get('/ar/customers',[ViewsController::class,'customers_ar'])->name('customers_ar');
// Route::get('/ar/reports',[ViewsController::class,'reports_ar'])->name('reports_ar');


// Route::get('/en/products',[ViewsController::class,'products_en'])->name('products_en');
// Route::get('/en/customers',[ViewsController::class,'customers_en'])->name('customers_en');
// Route::get('/en/reports',[ViewsController::class,'reports_en'])->name('reports_en');
// //Buttons
// Route::post('/add',[ViewsController::class,'add'])->name('add');
// Route::post('/edit/{id}',[ViewsController::class,'edit'])->name('edit');
// Route::post('/show/{id}',[ViewsController::class,'show'])->name('show');
// Route::post('/delete/{id}',[ViewsController::class,'delete'])->name('delete');
// //Stocks
// Route::get('/stocks',[StockController::class,'index'])->name('stocks');
// Route::get('/stocks/{stock}',[StockController::class,'show'])->name('show');
// Route::get('/stocks/{stock}/edit',[StockController::class,'edit'])->name('edit');

// Route::post('/stocks',[StockController::class,'store'])->name('store');
// Route::put('/stocks/{stock}',[StockController::class,'update'])->name('update');
// Route::delete('/stocks/{stock}',[StockController::class,'delete'])->name('delete');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
