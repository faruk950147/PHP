<?php

    use App\Http\Controllers\SiteController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', [SiteController::class, 'Home']);
    Route::get('/StudentAdd', [SiteController::class, 'StudentAdd']);
    Route::get('/StudentAbout', [SiteController::class, 'StudentAbout']);
    // pass paramiter
    Route::get('/student/{name}', [SiteController::class, 'StudentName']);
?>
