<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Commande;
use App\Http\Controllers\Profil;

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

Route::get('/commande_user', [Commande::class, 'display']);

Route::get('/profil', [Profil::class, 'profil'])-> name('profil.show');
// Route::post('/profil',[Profil::class, 'update'])-> name('profil.update');  
Route::post('/profil',[Profil::class, 'update'])-> name('profil.updateShow');



//Route::get('/User/{id}', [Usercontroller::class, 'show']);



//Route::get('/greeting', function () {
 //   return 'post';
// });

// Route::post('/demonstration', function() {
//     return 'OUI';
// })->name('demo');

// Route::get('user/{id}/{post}/{page}', function($id, $post, $page) {
//     return"$id - $post - $page";
// });