<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;


Route::get('/', [App\Http\Controllers\ControladorChirper::class, 'index']);
