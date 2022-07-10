<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnCompanyEditController;
use App\Http\Controllers\ClientListController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/own_company_edit', [OwnCompanyEditController::class, 'index']);
Route::post('/own_company_edit', [OwnCompanyEditController::class, 'save'])->name('own_company_edit_save');

Route::get('/client_list', [ClientListController::class, 'index']);