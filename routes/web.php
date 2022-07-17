<?php

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
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/profile/{id}','ProfileController@index')->name('profile');
// لا ينصح بوضع الـ id ضمن route الـ profile حتى لا يتسلل المخترقين لهذا الموقع ويتم تغيير الـ id الخاص بهذا الـ profile
// بل هناك طريقة يتم من خلال الـ controller بتحديد الـ id للـ user وذلك بمساعدة المكتبة Auth
Route::get('/profile','ProfileController@index')->name('profile');
Route::put('/profile/update','ProfileController@update')->
       name('profile.update');
Route::get('/more/info','ProfileController@show')
->name('show');
