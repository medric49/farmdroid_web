<?php

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

/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

// ================ ESPACE INVITE =========================
Route::group(['middleware' => ['guest']],function () {
    Route::get('/', function () {
        return view('guest.welcome');
    })->name('welcome');

    Route::get('/connexion','LoginController@index')->name('guest.login');
    Route::post('/connect','LoginController@connect')->name('guest.connect');

    Route::get('/inscription','RegisterController@index')->name('guest.register');
    Route::post('/inscription/enregistrement','RegisterController@store')->name('guest.register.store');
});

// ========================== ESPACE API =========================
Route::get('/temp-max','ApiController@tempMax');
Route::get('/hum-max','ApiController@humMax');
Route::get('/aci-max','ApiController@aciMax');
Route::get('/light-max','ApiController@lightMax');
Route::get('/dist-max','ApiController@distMax');

Route::get('/arrosage-auto','ApiController@arrosageAuto');
Route::get('/flag-arrosage','ApiController@flagArrosage');
Route::get('/eclairage-auto','ApiController@eclairageAuto');
Route::get('/flag-eclairage','ApiController@flagEclairage');
Route::get('/security-auto','ApiController@securityAuto');
Route::get('/flag-security','ApiController@flagSecurity');

Route::get('/temp','ApiController@temp');
Route::get('/hum','ApiController@hum');
Route::get('/aci','ApiController@aci');

// ================ ESPACE MEMBRE =========================
Route::group(['middleware' => ['auth']],function () {

    // ========================== ESPACE MEMBRE =========================
    Route::group(['prefix' => 'membre','namespace' =>'Member'],function () {
        Route::get('/accueil','HomeController@index')->name('member.home');
        Route::post('/deconnexion','HomeController@disconnect')->name('member.disconnection');

        Route::get('/configuration','HomeController@settings')->name('member.settings');
        Route::get('/securité','HomeController@security')->name('member.security');
    });

});