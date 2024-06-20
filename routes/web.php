<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ProductController;


Route::get('/', [ProductController::class, 'index']);

