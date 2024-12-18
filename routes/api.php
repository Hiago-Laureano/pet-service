<?php

use App\Http\Controllers\v1\UserController;
use App\Http\Controllers\v1\PetController;
use App\Http\Controllers\v1\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix("v1")->group(function() {
    Route::apiResource("/users", UserController::class);
    Route::apiResource("/pets", PetController::class);
    Route::post("/auth", [AuthController::class, "login"]);
    Route::post("/logout", [AuthController::class, "logout"]);
});