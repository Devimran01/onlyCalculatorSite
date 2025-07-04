<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\ConverterController;

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


Route::get('/
', function () {
    return view('home');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/calculator', function () {
    return view('calculator');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/blogs', function () {
    return view('blogs');
});



//categories routes links:
Route::view('/category/health', 'categories.health')->name('category.health');
Route::view('/category/fitness', 'categories.fitness')->name('category.fitness');
Route::view('/category/finance', 'categories.finance')->name('category.finance');
Route::view('/category/construction', 'categories.construction')->name('category.construction');
Route::view('/category/everyday', 'categories.everyday')->name('category.everyday');
Route::view('/category/ecology', 'categories.ecology')->name('category.ecology');
Route::view('/category/food', 'categories.food')->name('category.food');
Route::view('/category/math', 'categories.math')->name('category.math');
Route::view('/category/sports', 'categories.sports')->name('category.sports');
Route::view('/category/biology', 'categories.biology')->name('category.biology');
Route::view('/category/physics', 'categories.physics')->name('category.physics');
Route::view('/category/chemistry', 'categories.chemistry')->name('category.chemistry');


//calculators routes links:
Route::get('/calculator/{slug}', [CalculatorController::class, 'show']);
Route::post('/calculator/calculate', [CalculatorController::class, 'calculate']);
Route::post('/calculator/calculate', [CalculatorController::class, 'calculate']);
Route::get('/calculator/age-calculator', [CalculatorController::class, 'showAge'])->name('calculator.age');



Route::get('/calculator/age', function () {
    return view('calculators.age-calculator');
});
Route::view('/acreage-calculator', 'acreage-calculator');

//finance calculators:
Route::view('/finance', 'finance.index')->name('finance.index');
Route::view('/finance/discount-calculator', 'finance.discount-calculator');
Route::view('/finance/profit-margin-calculator', 'calculators.finance.profit-margin-calculator');
Route::view('/finance/annual-income-calculator', 'calculators.finance.annual-income-calculator');
Route::view('/finance/apy-calculator', 'finance.apy-calculator');
Route::view('/finance/expense-ratio-calculator', 'finance.expense-ratio-calculator');
Route::view('/finance/loan-calculator', 'finance.loan-calculator');


// Route::get('/converter/{slug}', [ConverterController::class, 'show']);
// Route::post('/converter/calculate', [ConverterController::class, 'calculate']);

//conversion
Route::view('/conversion','conversion.index')->name('conversion.index');

//health:
Route::view('/health','health.index')->name('health.index');


Route::view('/Food','food.index')->name('Food.index');



//Everyday life Calculators:
Route::view('/Everyday-life','Everyday-life.index')->name('Everyday-life.index');
