<?php

use App\Http\Controllers\UTS_Test;
use Illuminate\Support\Facades\Route;

Route::get('/', [UTS_Test::class, 'layout']);
