<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;

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


Route::get('/', [NewsController::class, 'showPublic']);
Route::get('/admin/period/create', function () {
    return view('admin.setting-period');
});
Route::get('/admin/setting-news', function () {
    return view('admin.setting-news');
});
Route::get('/project-form', function () {
    return view('project-form');
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

// Admin Category
Route::get('/admin/category/list', [CategoryController::class, 'index'])->name('category.list');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit']);
Route::get('/admin/category/create', function () {
    return view('admin.setting-category-create');
});
Route::post('/admin/category/create', [CategoryController::class, 'createPost'])->name('ajaxCategoryCreate.post');
Route::post('/admin/category/edit', [CategoryController::class, 'editPost'])->name('ajaxCategoryEdit.post');

// Admin Team Leader
Route::get('/admin/team/list', [TeamController::class, 'index'])->name('team.list');
Route::get('/admin/team/create', [TeamController::class, 'create']);
Route::post('/admin/team/create', [TeamController::class, 'createPost'])->name('ajaxTeamCreate.post');
Route::get('/admin/team/edit/{id}', [TeamController::class, 'edit']);
Route::post('/admin/team/edit', [TeamController::class, 'editPost'])->name('ajaxTeamEdit.post');

// Admin News
Route::get('/admin/news/list', [NewsController::class, 'index'])->name('news.list');
Route::get('/admin/news/create', [NewsController::class, 'create']);
Route::post('/admin/news/create', [NewsController::class, 'createPost'])->name('ajaxNewsCreate.post');
Route::get('/admin/news/edit/{id}', [NewsController::class, 'edit']);
Route::post('/admin/news/edit', [NewsController::class, 'editPost'])->name('ajaxNewsEdit.post');

// =========================================================================================
// Mahasiswa Profile
Route::get('/student/profile/{id}', [TeamController::class, 'studentTeamProfile']);
Route::post('/student/profile/edit', [TeamController::class, 'studentEditTeamProfile'])->name('ajaxTeamProfileEdit.post');
Route::get('/student/category/list/{id}', [TeamController::class, 'studentCategoryList']);
Route::post('/student/category/add', [TeamController::class, 'studentCategoryAdd'])->name('ajaxAddTeamCategory.post');
Route::post('/student/category/delete', [TeamController::class, 'studentCategoryDelete'])->name('ajaxDeleteTeamCategory.post');
Route::get('/student/documents', [TeamController::class, 'studentDocument']);
Route::post('/student/documents', [TeamController::class, 'studentDocumentUpload'])->name('ajaxUploadDocumentProject.post');





Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

//Public
Route::get('public-home', [NewsController::class, 'showPublic']);
Route::get('/exhibition', [TeamController::class, 'exhibition']);
