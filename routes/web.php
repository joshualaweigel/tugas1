<?php
use App\Http\Controller\Homecontroller;
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
    return view('home0080');
});
Route::get('/artikel0080', function () {
    return view('artikel0080');
});
Route::get('/contactus0080', function () {
    return view('contactus0080');
});
Route::get('/home', 'App\Http\Controller\Homecontroller@index' ) ;
