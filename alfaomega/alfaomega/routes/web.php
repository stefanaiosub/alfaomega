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
/*Route::get('home', function () {
    return view('home');
});
*/
/*
Route::post('campaigns' , ['as' => 'campaigns.create', 'uses' => 'CampaignsController@store']);
*/

Auth::routes();

Route::get('selectdomain/form/store', 'PagesController@storeForm');

Route::get('selectdomain/form', 'PagesController@getForm');

Route::get('selectdomain', 'PagesController@getDomainForForm');

Route::get('products/other', 'SeeCompanyController@index');

Route::get('campaigns/support', 'SupportController@index');

Route::get('campaigns/againsts', 'AgainstController@index');

Route::get('campaigns/search', 'SearchController@index');

Route::get('domains/products', 'PagesController@getProduct');
Route::get('domains/services', 'PagesController@getServices');

Route::get('mainFrame','PagesController@getMain');


Route::get('profile','PagesController@getProfile');

Route::get('edit_profile','PagesController@getEdit');


Route::get('termsCond','PagesController@getTerms');




Route::resource('campaigns', 'CampaignsController');


Route::get('companies', 'PagesController@getcomp');

Route::resource('services','ServicesController');

Route::resource('products', 'ProductsController');

Route::resource('domains', 'DomainsController');

Route::get('about-us','PagesController@getAbout');

Route::get('home', 'PagesController@getHome')->name('home');

Route::get('/', 'PagesController@getIndex');

Route::get('termsCond','PagesController@getTerms');

Route::resource ('contact','ContactController');






Route::get('/register','Auth\RegisterController@create_page');

Route::get('/login-page','SessionsController@create');

Route::post('/edit_details','Auth\EditController@create');



Route::get('logout','SessionsController@destroy');

Route::get('statistics','StatisticsController@create');