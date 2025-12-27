<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route for the homepage
Route::get('/', [HomeController::class, 'home']);
