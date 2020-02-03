<?php
use App\Science;
use Illuminate\Support\Facades\Input;

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
    return view('welcomeww');
});

Route::get('/', function () {
    return view('homePagee');
});
Route::get('/slide',function(){
    return view('slideshow');
});
Route::get('/dashboard',function(){
    return view('dashboard');
});
Route::get('fixed',function(){
    return view('fixedSidebar');
});
Route::get('/',function(){
    return view('homepage3');
});
Route::get('footer',function(){
    return view('footer');
});
Route::get('mail','EmailController@send');
/* This are used for authentication
It Scauffold the whole system of authentication */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/* End of authentication*/

Route::resource('main','MainController');
Route::get('library','MainController@library');
Route::get('/sports','SportsController@index');


Route::get('addCar','CarController@create');
Route::post('carsave','CarController@store');
Route::get('car','CarController@index');
Route::get('editCar/{id}','CarController@edit');
Route::post('updateCar/{id}','CarController@update');
Route::delete('deleteCar/{id}','CarController@destroy');

Route::get('scienceadd','ScienceController@create')->middleware('auth');
Route::post('add','ScienceController@store');
Route::get('science','ScienceController@index')->middleware('auth');
Route::get('scienceshow','ScienceController@display');
Route::get('editScience/{id}','ScienceController@edit')->middleware('auth');
Route::post('updateScience/{id}','ScienceController@update');
Route::delete('deleteScience/{id}','ScienceController@destroy');

Route::any ( '/search', function () {
    $q = Request::input ( 'q' );
    $user = Science::where ( 'site_title', 'LIKE', '%' . $q . '%' )->orWhere ( 'site_keywords', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'Sciences.welcome2' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'welcome' )->with ( 'No Details found. Try to search again !' );
} );

Route::get('addHistoricals','HistoryController@create');
Route::post('historicalssave','HistoryController@store');
Route::get('historicals','HistoryController@index');
Route::get('historicalsshow','HistoryController@display');
Route::get('editHistoricals/{id}','HistoryController@edit');
Route::post('updateHistoricals/{id}','HistoryController@update');
Route::delete('deleteHistoricals/{id}','HistoryController@destroy');

