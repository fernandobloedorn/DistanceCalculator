<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;
use App\Http\Controllers\LatitudeLongitudeController;

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

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/folderexample', function () {
//     return view('folderexample/folderexample');
// });
Route::view('/folderexample', 'folderexample/folderexample');


Route::match(['put', 'post'], '/match', function () {
    return 'Allowing PUT and POST';
});

Route::get('/parameters/{id}/{description?}', function ($id, $description = 'blank') {
    return "Parameters test: id = $id and description = $description";
});

Route::get('/about', function () {
    return redirect('/contact');
});

Route::redirect('/redirect', '/about');

Route::prefix('admin')->group(function() {
    Route::get('/about', function () {
        return 'admin -> about';
    });
    Route::get('/test', function () {
        return 'admin -> test';
    });
});

Route::get('/index-controller', [CepController::class, 'index']);

Route::get('/showid/{id}', [CepController::class, 'show'])->name('cep.show');

Route::resource('ll', LatitudeLongitudeController::class);

// Route::get('/api', function () {
//     return response()->json([
//         'success' => true
//     ]);
// });