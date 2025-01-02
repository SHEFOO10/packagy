<?php

use Illuminate\Support\Facades\Route;
use Shefoo10\Packagy\Http\Controllers\TestController;


Route::get("/", [TestController::class, 'index']);
