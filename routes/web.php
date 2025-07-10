<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceGeneratorForm;


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

//Client Invoice Form
Route::get('/', function () {
    return view('welcome');
});

//Client Invoice Form Save Route
Route::post('/client-form', [InvoiceGeneratorForm::class, 'store'])->name('client.store');
