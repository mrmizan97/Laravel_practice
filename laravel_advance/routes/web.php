<?php

use App\PaymentService\BkashService;
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

Route::get('/', function (BkashService $bkashService) {
    dump($bkashService->pay());
    dump($bkashService->pay());
    dd(app());
    return view('welcome');
});
