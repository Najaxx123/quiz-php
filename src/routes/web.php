<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;

Route::get("/", [HomeController::class, 'index']);
Route::get("/Quiz", [QuizController::class, 'index']);
