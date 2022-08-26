<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\SearchController;
use App\Models\Pizza;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|444451250 001
*/

// Route::get('/pizzas', function () {
//     $pizzas = [
//         'type' => 'Hawaiian', 
//         'base' => 'cheesy crust',
//         'price' => 10
// ];
//     return view('pizzas', $pizzas);
// });
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzaController::class,'index'])->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', [PizzaController::class,'create'])->name('pizzas.create');
Route::post('/pizzas', [PizzaController::class,'store'])->name('pizzas.store');
Route::get('/pizzas/{id}', [PizzaController::class,'show'])->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', [PizzaController::class,'destroy'])->name('pizzas.destroy')->middleware('auth');
Route::get('/find', [PizzaController::class, 'find'])->name('pizzas.find');
Route::get('autocomplete', [PizzaController::class, 'autocomplete'])->name('autocomplete');

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// WORKING SEARCH (rename search1.blade.php to search.blade.php)
Route::get('/search', [SearchController::class, 'search'])->name('web.search'); 


