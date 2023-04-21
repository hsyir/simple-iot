<?php

use App\Http\Controllers\LightsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::put("/lights/{status}", [LightsController::class,"toggle"]);
Route::get("/lights/status", [LightsController::class,"getStatus"]);
