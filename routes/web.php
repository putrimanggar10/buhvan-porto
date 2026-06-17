<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index']);


Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resources([
        'users'      => UserController::class,
        // 'category'     => CategoryController::class,
        // 'gallery'      => GalleryController::class,
        // 'banner'       => BannerController::class,
        // 'document'     => DokumentController::class,
        // 'clients'      => ClientsController::class,
        // 'contact'      => ContactController::class,
        // 'whychoose'    => WhychooseController::class,
        // 'aboutus'      => AboutusController::class,
    ]);
});
