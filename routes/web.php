<?php

use App\Http\Controllers\PastaController;
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


// se abbiamo creato un controller come RESOURCE
// in automatico le sue funzioni sono STANDARDIZZATE
// ciò significa che possiamo richiamare delle rotte anch'esse standardizzate, risparmiandoci tempo e eventuali errori per stilarle una ad una
Route::resource('pastas', PastaController::class);
