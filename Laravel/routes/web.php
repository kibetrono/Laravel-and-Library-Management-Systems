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
Route::get ( '/welcome', function () {
    return view ( 'welcome' );
} );
Route::any ( '/search', function () {
    $q = Request::input ( 'q' );
    $user = Science::where ( 'site_title', 'LIKE', '%' . $q . '%' )->orWhere ( 'site_keywords', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'welcome' )->with ( 'No Details found. Try to search again !' );
} );
Route::get('/welcome2',function(){
    return view('welcome2');
   });

Route::get('/', function () {
    return view('project.homepage');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/devices', 'DevicesController@index');
Route::get('devices/create','DevicesController@create');
Route::post('/devicesaction','DevicesController@storeDevice');

//Route::get('/sciences','SciencesController@create');

Route::resource('sciences','SciencesController');
//php artisan make:migration create_posts_table --create=posts

Route::get('/about', function(){
return view('about');
});


Route::get('image', 'ImageController@index');
Route::post('save', 'ImageController@save');

Route::resource('/historical','HistoricalController');


//Route::get('file', 'FileController@index');
//Route::get('save', 'FileController@save');


//Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
//Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');


Route::resource('file', 'FileController');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');


Route::get('/photos','RetrieveImagesController@index');


Route::get('tafuta', 'CustomSearchController@index');

Route::get('users-list', 'CustomSearchController@usersList'); 

