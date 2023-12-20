<?php

use App\Events\TestEvent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/receive', function () {
    return view('pusher-test.receiver');
});

Route::get('/broadcast', function () {
    broadcast(new TestEvent("Hello World!"))->toOthers();
});
