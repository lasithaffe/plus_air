<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/booking', 'BookingController@booking')->name('booking');
Route::get('/inquiry', 'BookingController@inquiry')->name('inquiry');
Route::get('/car', 'BookingController@car')->name('car');
Route::get('/hotels', 'BookingController@hotels')->name('hotels');
Route::get('/about', 'ContentController@about')->name('about');
Route::get('/contact', 'ContentController@contact')->name('contact');
Route::get('/blog', 'ContentController@blog')->name('blog');
Route::get('/cruises', 'BookingController@cruises')->name('cruises');
Route::get('/insurance', 'BookingController@insurance')->name('insurance');
Route::get('/onewaybooking', 'BookingController@onewaybooking')->name('onewaybooking');

