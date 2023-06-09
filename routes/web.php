<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect('/employees');
});
Route::resource('/employees', 'App\Http\Controllers\EmployeeController');
Route::get('/export/', [EmployeeController::class, 'export']);
Route::post('/import/', [EmployeeController::class, 'import']);
Route::get('/import-form/', [EmployeeController::class, 'importForm']);