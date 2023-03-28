<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BaseController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::controller(RegisterController::class)->group(function(){
    route::post('register', 'register');
    route::post('login','login');
});

Route::middleware('auth:sanctum')->group(function () {
Route::get('articles', [ArticleController::class, 'index']);
Route::get('articles/{article}', [ArticleController::class, 'show']);
Route::post('articles', [ArticleController::class, 'store']);
Route::put('articles/{article}', [ArticleController::class, 'update']);
Route::delete('articles/{arcticle}', [ArticleController::class, 'delete']);
});