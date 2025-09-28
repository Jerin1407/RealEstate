<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('pages.index');})->name('home');
Route::get('/about', function () { return view('pages.about');})->name('about');
Route::get('/service', function () { return view('pages.service');})->name('service');
Route::get('/home-loan', function () { return view('pages.home_loan');})->name('home-loan');
Route::get('/contact', function () { return view('pages.contact');})->name('contact');
// Route::get('/admin', function () { return view('pages.admin');})->name('admin');
Route::get('/admin', function () {
    if (!session()->has('user_id')) {
        return redirect()->route('login')->with('error', 'Please login first.');
    }
    return view('pages.admin');
})->name('admin');
Route::get('/properties', function () { return view('pages.properties');})->name('properties');

Route::get('/luxury-villa-in-kolazhy', function () { return view('subpages.luxury_villa_in_kolazhy');})->name('luxury-villa-in-kolazhy');
Route::get('/flat-punkunnam', function () { return view('subpages.flat_punkunnam');})->name('flat-punkunnam');
Route::get('/moder-villa-in-koorkenchery', function () { return view('subpages.moder_villa_in_koorkenchery');})->name('moder-villa-in-koorkenchery');
Route::get('/koorkenchery-4bhk', function () { return view('subpages.koorkenchery_4bhk');})->name('koorkenchery-4bhk');
Route::get('/peramangalam-villa', function () { return view('subpages.peramangalam_villa');})->name('peramangalam-villa');
Route::get('/luxury-flat-patturaikkal', function () { return view('subpages.luxury_flat_patturaikkal');})->name('luxury-flat-patturaikkal');
Route::get('/kuriachira-flat', function () { return view('subpages.kuriachira_flat');})->name('kuriachira-flat');
Route::get('/luxuriant-near-eastfort', function () { return view('subpages.luxuriant_near_eastfort');})->name('luxuriant-near-eastfort');
Route::get('/plot-in-viyyur', function () { return view('subpages.plot_in_viyyur');})->name('plot-in-viyyur');
Route::get('/residential-plot-in-kolazhy', function () { return view('subpages.residential_plot_in_kolazhy');})->name('residential-plot-in-kolazhy');
Route::get('/residential-land-thiroor', function () { return view('subpages.residential_land_thiroor');})->name('residential-land-thiroor');
Route::get('/villa-plot-in-kottekadu', function () { return view('subpages.villa_plot_in_kottekadu');})->name('villa-plot-in-kottekadu');
Route::get('/amalanagar-2-bhk', function () { return view('subpages.amalanagar_2_bhk');})->name('amalanagar-2-bhk');
Route::get('/westfort-2bhk', function () { return view('subpages.westfort_2bhk');})->name('westfort-2bhk');
Route::get('/westfort-2bhk-1000SqFt', function () { return view('subpages.westfort_2bhk_1000SqFt');})->name('westfort-2bhk-1000SqFt');
Route::get('/railway-station-near-pootole', function () { return view('subpages.railway_station_near_pootole');})->name('railway-station-near-pootole');
Route::get('/attractive-3bhk', function () { return view('subpages.attractive_3bhk');})->name('attractive-3bhk');
Route::get('/modern-flat-in-koramangala', function () { return view('subpages.modern_flat_in_koramangala');})->name('modern-flat-in-koramangala');
Route::get('/premium-plot-in-electronic-city', function () { return view('subpages.premium_plot_in_electronic_city');})->name('premium-plot-in-electronic-city');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login/user', [UserController::class, 'login'])->name('loginUser');
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register/user', [UserController::class, 'register'])->name('registerUser');

