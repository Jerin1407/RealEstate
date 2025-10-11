<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/service', function () {
    return view('pages.service');
})->name('service');
Route::get('/home-loan', function () {
    return view('pages.home_loan');
})->name('home-loan');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/properties/editproperty', function () {
    return view('property.edit');
})->name('edit-property');
Route::get('/properties/viewproperty', function () {
    return view('property.view');
})->name('view-property');

Route::get('/luxury-villa-in-kolazhy', function () {
    return view('subpages.luxury_villa_in_kolazhy');
})->name('luxury-villa-in-kolazhy');
Route::get('/flat-punkunnam', function () {
    return view('subpages.flat_punkunnam');
})->name('flat-punkunnam');
Route::get('/moder-villa-in-koorkenchery', function () {
    return view('subpages.moder_villa_in_koorkenchery');
})->name('moder-villa-in-koorkenchery');
Route::get('/koorkenchery-4bhk', function () {
    return view('subpages.koorkenchery_4bhk');
})->name('koorkenchery-4bhk');
Route::get('/peramangalam-villa', function () {
    return view('subpages.peramangalam_villa');
})->name('peramangalam-villa');
Route::get('/luxury-flat-patturaikkal', function () {
    return view('subpages.luxury_flat_patturaikkal');
})->name('luxury-flat-patturaikkal');
Route::get('/kuriachira-flat', function () {
    return view('subpages.kuriachira_flat');
})->name('kuriachira-flat');
Route::get('/luxuriant-near-eastfort', function () {
    return view('subpages.luxuriant_near_eastfort');
})->name('luxuriant-near-eastfort');
Route::get('/plot-in-viyyur', function () {
    return view('subpages.plot_in_viyyur');
})->name('plot-in-viyyur');
Route::get('/residential-plot-in-kolazhy', function () {
    return view('subpages.residential_plot_in_kolazhy');
})->name('residential-plot-in-kolazhy');
Route::get('/residential-land-thiroor', function () {
    return view('subpages.residential_land_thiroor');
})->name('residential-land-thiroor');
Route::get('/villa-plot-in-kottekadu', function () {
    return view('subpages.villa_plot_in_kottekadu');
})->name('villa-plot-in-kottekadu');
Route::get('/amalanagar-2-bhk', function () {
    return view('subpages.amalanagar_2_bhk');
})->name('amalanagar-2-bhk');
Route::get('/westfort-2bhk', function () {
    return view('subpages.westfort_2bhk');
})->name('westfort-2bhk');
Route::get('/westfort-2bhk-1000SqFt', function () {
    return view('subpages.westfort_2bhk_1000SqFt');
})->name('westfort-2bhk-1000SqFt');
Route::get('/railway-station-near-pootole', function () {
    return view('subpages.railway_station_near_pootole');
})->name('railway-station-near-pootole');
Route::get('/attractive-3bhk', function () {
    return view('subpages.attractive_3bhk');
})->name('attractive-3bhk');
Route::get('/modern-flat-in-koramangala', function () {
    return view('subpages.modern_flat_in_koramangala');
})->name('modern-flat-in-koramangala');
Route::get('/premium-plot-in-electronic-city', function () {
    return view('subpages.premium_plot_in_electronic_city');
})->name('premium-plot-in-electronic-city');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login/user', [UserController::class, 'login'])->name('loginUser');
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register/user', [UserController::class, 'register'])->name('registerUser');
Route::get('/admin', [UserController::class, 'showAdmin'])->name('admin');

Route::get('/listproperty', [PropertyController::class, 'listProperty'])->name('listproperty');
Route::get('/addproperty', [PropertyController::class, 'addProperty'])->name('addproperty');
Route::post('/saveproperty', [PropertyController::class, 'saveProperty'])->name('saveproperty');
// Route::get('/editproperty/{id}', [PropertyController::class, 'editProperty'])->name('editproperty');
// Route::post('/updateproperty/{id}', [PropertyController::class, 'updateProperty'])->name('updateproperty');
// Route::get('/deleteproperty/{id}', [PropertyController::class, 'deleteProperty'])->name('deleteproperty');

Route::get('/index', [HomeController::class, 'index'])->name('home');
Route::get('/view-all-villa', [HomeController::class, 'viewAllVilla'])->name('viewAllVilla');
Route::get('/view-villa-property/{id}', [HomeController::class, 'viewVillaProperty'])->name('viewVillaProperty');
Route::get('/view-all-flat', [HomeController::class, 'viewAllFlat'])->name('viewAllFlat');
Route::get('/view-flat-property/{id}', [HomeController::class, 'viewFlatProperty'])->name('viewFlatProperty');
Route::get('/view-all-plot', [HomeController::class, 'viewAllPlot'])->name('viewAllPlot');
Route::get('/view-plot-property/{id}', [HomeController::class, 'viewPlotProperty'])->name('viewPlotProperty');
Route::get('/view-all-commercial', [HomeController::class, 'viewAllCommercial'])->name('viewAllCommercial');
Route::get('/view-commercial-property/{id}', [HomeController::class, 'viewCommercialProperty'])->name('viewcommercialProperty');


