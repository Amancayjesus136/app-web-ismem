<?php

use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('client.welcome');
// });

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::post('/consultar-dni', [WelcomeController::class, 'consultarDni'])->name('welcome.consultarDni');
Route::post('/consulta/crear', [WelcomeController::class, 'store_consulta'])->name('welcome.store_consulta');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('consultas', function () {
    Mail::to('victor@codersfree.com')->send(new ContactanosMailable);

    return "Mensaje enviado";

})->name('consultas');


Route::get('/consultas/listado', [GeneralController::class, 'consultas_list'])->name('general.consultas_list');

require __DIR__.'/auth.php';
