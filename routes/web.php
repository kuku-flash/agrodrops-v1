<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {return view('welcome');});
Route :: get ('/',  [PagesController::class, 'index'])->name('index');
Route :: get ('ourProducts',  [PagesController::class, 'ourProducts'])->name('ourProducts');
Route :: get ('accessories',  [PagesController::class, 'accessories'])->name('accessories');
Route :: get ('aboutus',  [PagesController::class, 'aboutus'])->name('aboutus');
<<<<<<< HEAD
Route :: get ('featured',  [PagesController::class, 'featured'])->name('featured');
=======

>>>>>>> cd8a6579588e26c3bcd0fd5774c94dccf198e6a1


