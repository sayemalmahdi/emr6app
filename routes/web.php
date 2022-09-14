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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('login.login');
});

Route::get('/aboutus', 'AboutUsController@aboutus')->name('aboutus');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Admin Route
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function(){
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');

	
	//Site Setting
	Route::get('site/setting','Settings\SiteSettingController@SiteSetting')->name('site.setting');
	Route::post('update/site/setting','Settings\SiteSettingController@UpdateSiteSetting')->name('update.site.setting');



	//Child Admin Role
	Route::get('create/child/admin','UserRole\AdminController@CreateAdmin')->name('create.admin');
	Route::post('store/child/admin','UserRole\AdminController@StoreAdmin')->name('store.child.admin');
	Route::get('all/child/admin','UserRole\AdminController@AllChildAdmin')->name('all.child.admin');
	Route::get('delete/child/admin/{id}', 'UserRole\AdminController@DeleteChildAdmin');
	Route::get('edit/child/admin/{id}', 'UserRole\AdminController@EditChildAdmin');
	Route::post('update/child/admin', 'UserRole\AdminController@UpdateChildAdmin')->name('update.child.admin');



	//Add Prescription
	Route::get('create/prescriptions','Prescriptions\PrescriptionsController@CreatePrescriptions')->name('create.prescriptions');
	Route::post('store.add.prescription','Prescriptions\PrescriptionsController@StorePrescription')->name('store.add.prescriptions');
	Route::get('all/prescriptions','Prescriptions\PrescriptionsController@AllPrescriptions')->name('all.prescriptions');
	Route::get('inactive/prescription/{id}', 'Prescriptions\PrescriptionsController@Inactive');
	Route::get('active/prescription/{id}', 'Prescriptions\PrescriptionsController@Active');
	Route::get('delete/prescription/{id}','Prescriptions\PrescriptionsController@DeletePrescription');
	Route::get('view/prescription/{id}','Prescriptions\PrescriptionsController@ViewPrescription');
	Route::get('edit/prescription/{id}','Prescriptions\PrescriptionsController@EditPrescription');




});






//Author Route
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']],function(){
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');



});





//User Profile Route
Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'User','middleware'=>['auth','user']],function(){
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	

});