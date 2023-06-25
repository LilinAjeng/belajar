<?php
use App\Http\Controllers\BukuController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{nomer?}', function ($nomer='tulisan') {
    return view('about', ['nama' => 'STIKI']);
});


//Route::prefix('admin')->get('/buku/{nomer?}', function ($nomer=null) {
//return 'STIKI Perpus' . $nomer;
//});

//Route::prefix('admin')->group(function(){
Route::resource('buku',BukuController::class);
//});

