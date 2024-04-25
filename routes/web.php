<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('LandingPage');
});
Route::get('/DashboardAdmin', function () {
    return view('Dashboard/DashboardAdmin');
});
Route::get('/DataInfaqAdmin', function () {
    return view('Dashboard/DataInfaqAdmin');
});
Route::get('/RiwayatVerifikasiInfaqAdmin', function () {
    return view('Dashboard/RiwayatVerifikasiInfaqAdmin');
});
Route::get('/TagihanSiswaAdmin', function () {
    return view('Dashboard/TagihanSiswaAdmin');
});
