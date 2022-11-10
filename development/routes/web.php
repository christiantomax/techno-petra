<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PeriodController;

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

Route::get('/', function () {
    return view('base-html');
});
Route::get('/admin/period/create', function () {
    return view('admin.setting-period');
});
Route::get('/admin/setting-news', function () {
    return view('admin.setting-news');
});
Route::get('/admin/setting-category', function () {
    return view('admin.setting-category');
});
Route::get('/admin/setting-team-leader', function () {
    return view('admin.setting-team-leader');
});
Route::get('/project-form', function () {
    return view('project-form');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa.setting-profile');
});
Route::get('/profile', function () {
    return view('mahasiswa.profile');
});
Route::get('/project-list', function () {
    return view('project-list');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/show-project', function () {
    return view('show-project');
});

// Admin Period
Route::get('/admin/period/list', [PeriodController::class, 'index'])->name('period.list');
Route::get('/admin/period/edit/{id}', [PeriodController::class, 'edit']);
Route::get('/admin/period/create', function () {
    return view('admin.setting-period');
});
Route::post('/admin/period/create', [PeriodController::class, 'createPost'])->name('ajaxPeriodCreate.post');
Route::post('/admin/period/edit', [PeriodController::class, 'editPost'])->name('ajaxPeriodEdit.post');

Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
