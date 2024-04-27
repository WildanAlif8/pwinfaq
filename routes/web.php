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
    return view('Dashboard/admin/DashboardAdmin');
});
Route::get('/DashboardUser', function () {
    return view('Dashboard/User/DashboardUser');
});
Route::get('/DataInfaqAdmin', function () {
    return view('Dashboard/admin/DataInfaqAdmin');
});
Route::get('/RiwayatVerifikasiInfaqAdmin', function () {
    return view('Dashboard/admin/RiwayatVerifikasiInfaqAdmin');
});
Route::get('/RiwayatUser', function () {
    return view('Dashboard/User/RiwayatUser');
});
Route::get('/TagihanSiswaAdmin', function () {
    return view('Dashboard/admin/TagihanSiswaAdmin');
});
Route::get('/TagihanUser', function () {
    return view('Dashboard/user/TagihanUser');
});
Route::get('/UploadUser', function () {
    return view('Dashboard/user/UploadUser');
});
