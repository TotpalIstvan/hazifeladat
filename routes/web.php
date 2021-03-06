<?php

use App\Http\Controllers\HazifeladatController;
use App\Models\Hazifeladat;
use Illuminate\Support\Facades\Route;

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
    $feladatok= Hazifeladat::all();
    return view('feladatok.index', ["feladatok" => $feladatok]);
});

Route::resource('feladatok', HazifeladatController::class);
