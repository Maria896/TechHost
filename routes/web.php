<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;


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

/*Route::get('/', function () {
    return view('welcome');
    //return 'checking';
})*/;
/*Route::get('register-domain', function () {
    return view('domain.register_domain');
});*/
/*Route::get('transfer-domain', function () {
    return view('domain.transfer_domain');
});*/
/*Route::get('pk-domain', function () {
    return view('domain.pk_domain');
});*/
/*Route::get('domain-checker', function () {
    return view('domain.domain_checker');
});*/



// Route::view('maria','hosting.wordpress_hosting')->name('maria');

Route::get('/','HomeController@index');

/*Routes for domain sub pages*/

Route::get('register-domain','HomeController@registerDomain');

Route::get('transfer-domain','HomeController@transferDomain');

Route::get('pk-domain','HomeController@pkDomain');

Route::get('domain-checker','HomeController@domainChecker');

Route::get('website-development','HomeController@websitedevelopment')->name('website-development');

Route::get('ssl','HomeController@ssl')->name('ssl');

Route::get('seo','HomeController@seo')->name('seo');

Route::get('smo','HomeController@smo')->name('smo');;

/*Routes for hosting sub pages*/

Route::get('business-hosting','HomeController@businessHosting');

Route::get('reseller-hosting','HomeController@resellerHosting');

Route::get('shared-hosting','HomeController@sharedHosting');

Route::get('wordpress-hosting','HomeController@wordpressHosting');

/*Routes for Server sub pages*/

Route::get('dedicated-servers','HomeController@dedicatedServers');

Route::get('pak-based-servers','HomeController@pakBasedServers');

Route::get('ssd-servers','HomeController@ssdServers');

Route::get('vps-servers','HomeController@vpsServers');










