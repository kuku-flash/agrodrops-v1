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
Route :: get ('featured',  [PagesController::class, 'featured'])->name('featured');
Route :: get ('ourClients',  [PagesController::class, 'ourClients'])->name('ourClients');
Route :: get ('ourServices',  [PagesController::class, 'ourServices'])->name('ourServices');
Route :: get ('contactus',  [PagesController::class, 'contactus'])->name('contactus');
Route :: get ('FAQ',  [PagesController::class, 'FAQ'])->name('FAQ');



