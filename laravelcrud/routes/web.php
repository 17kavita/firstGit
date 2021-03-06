<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentscontroller;

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

// Route::get('/', function () {
//     return view('students');
// });
Route::get('/', [studentscontroller::class,'index'])->name('studentscontroller.index');

Route::get('/add', function () {
    return view('add');
});

// Route::post('/add', 'studentscontroller@update');