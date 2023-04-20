<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::put("/lights/{status}", "LightsController@toggle");
Route::get("/lights/status", "LightsController@getStatus");
