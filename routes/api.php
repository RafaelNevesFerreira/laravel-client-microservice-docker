<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::controller(ClientController::class)->group(function () {
    // Route::middleware("api")->group(function () {
        Route::get("/", "index");
        Route::get("/get/{id}", "get");
        Route::post("/create", "store");
    // });
});
