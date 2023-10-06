<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Menampilkan Halaman Landing page & login
Route::get('/info',[SessionController::class,'info']);
Route::get('/',[SessionController::class,'landingPage']);
Route::get('/login',[SessionController::class,'index']);
Route::post('/login',[SessionController::class,'login'])->name('login');
Route::get('/register',[SessionController::class,'register']);
Route::post('/registerUser',[SessionController::class,'registerUser']);
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');

//Menampilkan Halaman Admin
Route::middleware(['admin'])->group(function () {
Route::get('/admin',[AdminController::class,'dashboard']);
Route::get('/progressDonasi',[AdminController::class,'progressDonasi']);
Route::get('/dashboard',[AdminController::class,'dashboard']);
Route::get('/listDonasiUang',[AdminController::class,'listDonasiUang']);
Route::get('/listDonasiBarang',[AdminController::class,'listDonasiBarang']);
Route::get('/listUserTerdaftar',[AdminController::class,'listUserTerdaftar']);

//Admin Profile
Route::get('/profileAdmin',[AdminController::class,'profileAdmin']);
Route::put('/profileAdmin/updateAdmin/{id}',[AdminController::class,'updateAdmin'])->name('profileAdmin.updateAdmin');

//Menambahkan user Admin di Admin panel
Route::get('/formTambahUserAdm',[AdminController::class,'formTambahUserAdm']);
Route::get('/registerAdmin',[AdminController::class,'registerAdmin']);

//Menambahkan Donasi di Admin panel
Route::get('/formTambahDonasi',[AdminController::class,'formTambahDonasi']);
Route::post('/formTambahDonasi/storeTbhDonasi',[AdminController::class,'storeTbhDonasi']);

//Hapus data di Admin Panel
Route::get('/deleteT/{id}',[AdminController::class,'deleteTambahDonasi'])->name('deleteTambahDonasi');
Route::get('/delete/{id}',[AdminController::class,'deleteUserTerdaftar'])->name('deleteUserTerdaftar');
Route::get('/deleteU/{id}',[AdminController::class,'deleteDonasiUang'])->name('deleteDonasiUang');
Route::get('/deleteB/{id}',[AdminController::class,'deleteDonasiBarang'])->name('deleteDonasiBarang');

//Edit data Tambah Donasi
Route::get('/tampilDataEditTambahDonasi/{id}',[AdminController::class,'tampilDataEditTambahDonasi']);
Route::post('/updateDataEditTambahDonasi/{id}',[AdminController::class,'updateDataEditTambahDonasi']);

//Menambahkan Donasi untuk ditampilkan di katalog user
Route::get('/tbhDonasi',[AdminController::class,'tambahDonasi']);
});

Route::middleware(['user'])->group(function () {
//Menampilkan Halaman User
Route::get('/user',[UserController::class,'index']);
Route::get('/formInputUang/{id}',[UserController::class,'tampilDataUang']);
Route::get('/formInputBarang/{id}',[UserController::class,'tampilDataBarang']);

//User Profile
Route::get('/profileUser', [UserController::class, 'profileUser'])->name('profile.user');
Route::put('/profileUser/updateUser/{id}',[UserController::class,'updateUser'])->name('profile.updateUser');

//form menambah donasi uang halaman user
Route::get('/formInputUang',[UserController::class,'formInputUang']);
Route::post('/formInputUang/storeUang',[UserController::class,'storeUang']);

//form menambah donasi barang halaman user
Route::get('/formInputBarang',[UserController::class,'formInputBarang']);
Route::post('/formInputBarang/storeBarang',[UserController::class,'storeBarang']);

Route::get('/tungguValidasi',[UserController::class,'tungguValidasi']);
Route::get('/terimakasih',[UserController::class,'terimakasih']);
});
