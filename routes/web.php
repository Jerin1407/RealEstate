<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotPropertyController;
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
Route::get('/dashboard', [UserController::class, 'showAdmin'])->name('dashboard');
Route::get('/requests', [UserController::class, 'showRequest'])->name('requests');
Route::get('/edit-request/{id}', [UserController::class, 'editRequest'])->name('editRequest');
Route::get('/view-request/{id}', [UserController::class, 'viewRequest'])->name('viewRequest');
Route::post('/update-request/{id}', [UserController::class, 'updateRequest'])->name('updateRequest');
Route::post('/delete-request-image/{id}', [UserController::class, 'deleteRequestImage'])->name('deleteRequestImage');
Route::delete('/delete-request/{id}', [UserController::class, 'deleteRequest'])->name('deleteRequest');
Route::get('/approve-request/{id}', [UserController::class, 'approveRequest'])->name('approveRequest');
Route::get('/filter-property', [UserController::class, 'filterRequestProperty'])->name('filterRequestProperty');
Route::get('/listuser', [UserController::class, 'listUser'])->name('listUser');

Route::get('/listproperty', [PropertyController::class, 'listProperty'])->name('listproperty');
Route::get('/addproperty', [PropertyController::class, 'addProperty'])->name('addproperty');
Route::post('/saveproperty', [PropertyController::class, 'saveProperty'])->name('saveproperty');
Route::get('/editproperty/{id}', [PropertyController::class, 'editProperty'])->name('editproperty');
Route::get('/viewproperty/{id}', [PropertyController::class, 'viewProperty'])->name('viewproperty');
Route::post('/updateproperty/{id}', [PropertyController::class, 'updateProperty'])->name('updateproperty');
Route::post('/deletepropertyimage/{id}', [PropertyController::class, 'deletePropertyImage'])->name('deletePropertyImage');
Route::delete('/deleteproperty/{id}', [PropertyController::class, 'deleteProperty'])->name('deleteproperty');
Route::post('/propertyenquiry', [PropertyController::class, 'propertyEnquiry'])->name('propertyEnquiry');
Route::get('/filterproperty', [PropertyController::class, 'filterProperty'])->name('filterProperty');
Route::get('/exportproperty', [PropertyController::class, 'propertyExport'])->name('exportProperty');

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
Route::get('/view-all-rent', [HomeController::class, 'viewAllRent'])->name('viewAllRent');
Route::get('/view-rent-property/{id}', [HomeController::class, 'viewRentProperty'])->name('viewrentProperty');
Route::get('/search-location', [HomeController::class, 'searchLocation'])->name('searchLocation');
Route::get('/search-property', [HomeController::class, 'searchProperty'])->name('searchProperty');
Route::get('/addHomeproperty', [HomeController::class, 'addProperty'])->name('addProperty');
Route::post('/saveHomeproperty', [HomeController::class, 'saveProperty'])->name('saveProperty');

Route::get('/hotproperty', [HotPropertyController::class, 'hotPropertyList'])->name('hotpropertylist');
Route::get('/addhotproperty', [HotPropertyController::class, 'addHotProperty'])->name('addhotproperty');
// Route::post('/savehotproperty', [HotPropertyController::class, 'saveHotProperty'])->name('savehotproperty');
Route::get('/edithotproperty', [HotPropertyController::class, 'editHotProperty'])->name('edithotproperty');
// Route::get('/viewhotproperty/{id}', [HotPropertyController::class, 'viewHotProperty'])->name('viewhotproperty');
// Route::post('/updatehotproperty/{id}', [HotPropertyController::class, 'updateHotProperty'])->name('updatehotproperty');
// Route::post('/deletehotpropertyimage/{id}', [HotPropertyController::class, 'deleteHotPropertyImage'])->name('deleteHotPropertyImage');
// Route::delete('/deletehotproperty/{id}', [HotPropertyController::class, 'deleteHotProperty'])->name('deletehotproperty');
// Route::post('/hotpropertyenquiry', [HotPropertyController::class, 'hotPropertyEnquiry'])->name('hotPropertyEnquiry');
// Route::get('/filterhotproperty', [HotPropertyController::class, 'filterHotProperty'])->name('filterHotProperty');
// Route::get('/exporthotproperty', [HotPropertyController::class, 'hotPropertyExport'])->name('exportHotProperty');
