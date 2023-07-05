<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Menu\MenuController;



Route::get('menu',[MenuController::class, 'index']);