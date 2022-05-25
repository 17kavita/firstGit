<?php

 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\Employee;

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
    return view('employee');
});
//Route::get('/', 'App\Http\Controllers\Employee@index')->name('employee.index');
Route::get('/', [Employee::class,'index'])->name('employee.index');

//Route::get('/add', 'App\Http\Controllers\Employee@add')->name('employee.add');
Route::get('/add', [Employee::class,'add'])->name('employee.add');

// Route::get('/add', function () {
//     return view('add');
// });