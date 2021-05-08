<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [AuthController::class, 'login'])->name('api.login');

Route::get('response', function () {
    return response('blog', 201)->header('Content-Type', 'application/json')->cookie('my_cookie', '1234', 3600);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('products', [ProductController::class, 'index']);
});
