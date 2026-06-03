<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('lang/{locale}', function ($locale) {
    abort_unless(in_array($locale, ['en', 'id', 'es'], true), 404);

    session(['locale' => $locale]);
    return redirect()->back();
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/tes-translate', function () {
    return view('tes_translate');
});
Route::get('/lebih-lanjut', [HomeController::class, 'lebihLanjut']);

Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');

Route::get('/cookie-policy', function () {
    return view('cookie-policy');
})->name('cookie-policy');

Route::get('/zd-one-platform', function () {
    return view('zd_one_platform');
})->name('zd-one-platform');

Route::get('/zd-remote', function () {
    return view('zd_remote');
})->name('zd-remote');

Route::get('/zd-content-management', function () {
    return view('zd_content_management');
})->name('zd-content-management');

Route::get('/zd-analytics', function () {
    return view('zd_analytics');
})->name('zd-analytics');

//  ========================================= Industries =========================================
Route::get('/industries-retail', function () {
    return view('industries_retail');
})->name('industries-retail');

Route::get('/industries-manufacturing', function () {
    return view('industries_manufacturing');
})->name('industries-manufacturing');

Route::get('/industries-banking-finance', function () {
    return view('industries_banking_finance');
})->name('industries-banking-finance');

Route::get('/industries-mining-oil-gas', function () {
    return view('industries_mining_oil_gas');
})->name('industries-mining-oil-gas');

Route::get('/industries-healthcare', function () {
    return view('industries_healthcare');
})->name('industries-healthcare');

// ========================================= Device Support =========================================
Route::get('/device-monitoring', function () {
    return view('device_monitoring');
})->name('device-monitoring');

Route::get('/device-biometric', function () {
    return view('device_biometric');
})->name('device-biometric');

Route::get('/device-signage', function () {
    return view('device_signage');
})->name('device-signage');

Route::get('/device-hardware', function () {
    return view('device_hardware');
})->name('device-hardware');

Route::get('/device-laptop', function () {
    return view('device_laptop');
})->name('device-laptop');

Route::get('/device-tablet', function () {
    return view('device_tablet');
})->name('device-tablet');

Route::get('/device-pos', function () {
    return view('device_pos');
})->name('device-pos');

// ========================================= Capability =========================================

Route::get('/capability-downtime', function () {
    return view('capability_downtime');
})->name('capability-downtime');

Route::get('/capability-enterprise', function () {
    return view('capability_enterprise');
})->name('capability-enterprise');

Route::get('/capability-performance', function () {
    return view('capability_performance');
})->name('capability-performance');

Route::get('/capability-remote', function () {
    return view('capability_remote');
})->name('capability-remote');

Route::get('/capability-simplify', function () {
    return view('capability_simplify');
})->name('capability-simplify');

Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
