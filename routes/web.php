<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group([''],function(){
    //Accounting Route
    Route::resource('/accounting','AccountingController');
    Route::resource('/account','AccountController');
    Route::resource('/category','CategoryController');
    Route::resource('/payment_type','PaymentTypeController');
    Route::resource('/vendor','VendorController');
    Route::resource('/tenant_com','TenantCommercialController'); //commercial
    Route::resource('/tenant','TenantController'); //residential

    Route::resource('/building','BuildingController');
    Route::resource('/building_unit','UnitController');
    Route::resource('/single_building','SingleBuildingController'); //single building REST
    Route::resource('/multi_unit_building','MultiBuildingController'); //single building REST

    Route::resource('/country','CountryController');
    Route::resource('/city','CityController');
    Route::resource('/district','DistrictController');
    Route::resource('/region_state','RegionStateController');

});

Route::group(['prefix'=>'su'],function(){ //
    Route::resource('tenant_res','SingelUnitResidentialTenantController');
});

Route::group(['prefix'=>'sr'],function(){ //
    Route::resource('tenant_comm','SingleUnitCommercialTenantController');
});