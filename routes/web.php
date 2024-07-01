<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FibonacciController;

// Define route for both GET and POST requests to the root URL
Route::match(['get', 'post'], '/', [FibonacciController::class, 'showForm']);


