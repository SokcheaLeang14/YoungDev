<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\StudentsController;

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

Route::post('/students/register', [StudentsController::class, 'register']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/students/login', [StudentsController::class, 'login']);
});

Route::get("/hey", function () {
    return response()->json("Hey");
});
