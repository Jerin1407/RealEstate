<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/attractive-3bhk', function () {
    return view('subpages.attractive_3bhk');
})->name('attractive-3bhk');
Route::get('/modern-flat-in-koramangala', function () {
    return view('subpages.modern_flat_in_koramangala');
})->name('modern-flat-in-koramangala');
Route::get('/premium-plot-in-electronic-city', function () {
    return view('subpages.premium_plot_in_electronic_city');
})->name('premium-plot-in-electronic-city');

Route::get('/reload-captcha', function () {
    return response()->json(['captcha' => captcha_img('flat')]);
})->name('reloadCaptcha');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login/user', [UserController::class, 'login'])->name('loginUser');
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register/user', [UserController::class, 'register'])->name('registerUser');
Route::get('/admin', [UserController::class, 'showAdmin'])->name('admin');

Route::get('/listproperty', [PropertyController::class, 'listProperty'])->name('listproperty');
Route::get('/addproperty', [PropertyController::class, 'addProperty'])->name('addproperty');
Route::post('/saveproperty', [PropertyController::class, 'saveProperty'])->name('saveproperty');
Route::get('/editproperty/{id}', [PropertyController::class, 'editProperty'])->name('editproperty');
Route::get('/viewproperty/{id}', [PropertyController::class, 'viewProperty'])->name('viewproperty');
Route::post('/updateproperty/{id}', [PropertyController::class, 'updateProperty'])->name('updateproperty');
Route::post('/deletepropertyimage/{id}', [PropertyController::class, 'deletePropertyImage'])->name('deletePropertyImage');
Route::delete('/deleteproperty', [PropertyController::class, 'deleteProperty'])->name('deleteproperty');
Route::post('/propertyenquiry', [PropertyController::class, 'propertyEnquiry'])->name('propertyEnquiry');

Route::get('/index', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/home-loan', [HomeController::class, 'homeLoan'])->name('home-loan');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/view-all-villa', [HomeController::class, 'viewAllVilla'])->name('viewAllVilla');
Route::get('/view-villa-property/{id}', [HomeController::class, 'viewVillaProperty'])->name('viewVillaProperty');
Route::get('/view-all-flat', [HomeController::class, 'viewAllFlat'])->name('viewAllFlat');
Route::get('/view-flat-property/{id}', [HomeController::class, 'viewFlatProperty'])->name('viewFlatProperty');
Route::get('/view-all-plot', [HomeController::class, 'viewAllPlot'])->name('viewAllPlot');
Route::get('/view-plot-property/{id}', [HomeController::class, 'viewPlotProperty'])->name('viewPlotProperty');
Route::get('/view-all-commercial', [HomeController::class, 'viewAllCommercial'])->name('viewAllCommercial');
Route::get('/view-commercial-property/{id}', [HomeController::class, 'viewCommercialProperty'])->name('viewcommercialProperty');
Route::get('/search-location', [HomeController::class, 'searchLocation'])->name('searchLocation');
Route::get('/search-property', [HomeController::class, 'searchProperty'])->name('searchProperty');
Route::get('/addHomeproperty', [HomeController::class, 'addProperty'])->name('addProperty');
Route::post('/saveHomeproperty', [HomeController::class, 'saveProperty'])->name('saveProperty');



