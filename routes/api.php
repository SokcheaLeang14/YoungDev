<?php

use App\Http\Controllers\api\BooksController;
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
Route::post('/students/login', [StudentsController::class, 'login']);
Route::middleware(['auth:sanctum'])->group(function () {
    
    /**
     * @ Students
     */
    Route::post('/students/{id}', [StudentsController::class, 'getStudentInfo']);
    Route::post('/students/update/{id}', [StudentsController::class, 'update']);
    Route::post('/students/delete/{id}', [StudentsController::class, 'delete']);
    
    /**
     * @ Book 
     */
    Route::post('/books', [BooksController::class, 'getAllBooks']);
    Route::post('/books/detail/{id}', [BooksController::class, 'viewBookDetail']);
    Route::post('/books/search', [BooksController::class, 'searchBook']);
});
