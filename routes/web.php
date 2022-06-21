<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
//User
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/quis', [HomeController::class, 'quis'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/edukasi/fisik',[HomeController::class, 'viewFisik'])->name('view.fisik');
    Route::get('/edukasi/nutrisi',[HomeController::class, 'viewNutrisi'])->name('view.nutrisi');
    Route::get('/edukasi/fisik/{id}/view',[HomeController::class, 'viewEdukasiFisik'])->name('view.edukasiFisik');
    Route::get('/edukasi/nutrisi/{id}/view',[HomeController::class, 'viewEdukasiNutrisi'])->name('view.edukasiNutrisi');
    Route::get('/edukasi/{id}/view',[HomeController::class, 'viewEdukasi'])->name('view.edukasi');
    Route::get('/edukasi/{id}/download',[HomeController::class, 'downloadEdukasi'])->name('download.edukasi');
    Route::get('/identifikasi/{id}/view',[HomeController::class, 'identifikasi'])->name('identifikasi');
    Route::post('/identifikasi/tambah', [HomeController::class, 'createIdentifikasi'])->name('create.identifikasi');
    Route::get('/evaluasi', [HomeController::class, 'evaluasi'])->name('evaluasi');
    Route::get('/nutrisi/{id}/view', [HomeController::class, 'Nutrisi'])->name('nutrisi');
    Route::post('/nutrisi/tambah', [HomeController::class, 'createNutrisi'])->name('create.nutrisi');
    Route::get('/fisik/{id}/view', [HomeController::class, 'Fisik'])->name('fisik');
    Route::post('/fisik/tambah', [HomeController::class, 'createFisik'])->name('create.fisik');
    Route::get('/nutrisi/{id}/edit',[HomeController::class, 'editNutrisi'])->name('edit.nutrisi');
    Route::post('/nutrisi/{id}/update',[HomeController::class, 'updateNutrisi'])->name('update.nutrisi');
    Route::get('/fisik/{id}/edit',[HomeController::class, 'editFisik'])->name('edit.fisik');
    Route::post('/fisik/{id}/update',[HomeController::class, 'updateFisik'])->name('update.fisik');
    Route::get('/menuju-nutrisi', [HomeController::class, 'kenutrisi']);
    Route::get('/menuju-fisik', [HomeController::class, 'kefisik']);

// Identifikasi
    Route::get('/admin/identifikasi', [AdminController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
    Route::post('/admin/identifikasi/tambah', [AdminController::class, 'createIdentifikasi'])->name('create.identifikasi')->middleware('is_admin');
    Route::get('/admin/identifikasi/{id}/edit',[AdminController::class, 'editIdentifikasi'])->name('edit.identifikasi')->middleware('is_admin');
    Route::post('/admin/identifikasi/{id}/update',[AdminController::class, 'updateIdentifikasi'])->name('update.identifikasi')->middleware('is_admin');
    Route::get('/admin/identifikasi/delete/{id}', [AdminController::class, 'deleteIdentifikasi'])->name('delete.identifikasi')->middleware('is_admin');

//Edukasi
    Route::get('/admin/edukasi', [AdminController::class, 'adminEdukasi'])->name('admin.edukasi')->middleware('is_admin');
    Route::post('/admin/edukasi/tambah', [AdminController::class, 'createEdukasi'])->name('create.edukasi')->middleware('is_admin');
    Route::get('/admin/edukasi/{id}/edit',[AdminController::class, 'editEdukasi'])->name('edit.edukasi')->middleware('is_admin');
    Route::post('/admin/edukasi/{id}/update',[AdminController::class, 'updateEdukasi'])->name('update.edukasi')->middleware('is_admin');
    Route::get('/admin/edukasi/delete/{id}', [AdminController::class, 'deleteEdukasi'])->name('delete.edukasi')->middleware('is_admin');

//Nutrisi
    Route::get('/admin/nutrisi', [AdminController::class, 'adminNutrisi'])->name('admin.nutrisi')->middleware('is_admin');
    Route::post('/admin/nutrisi/tambah', [AdminController::class, 'createNutrisi'])->name('create.nutrisi')->middleware('is_admin');
    Route::get('/admin/nutrisi/{id}/edit',[AdminController::class, 'editNutrisi'])->name('edit.nutrisi')->middleware('is_admin');
    Route::post('/admin/nutrisi/{id}/update',[AdminController::class, 'updateNutrisi'])->name('update.nutrisi')->middleware('is_admin');
    Route::get('/admin/nutrisi/delete/{id}', [AdminController::class, 'deleteNutrisi'])->name('delete.nutrisi')->middleware('is_admin');

//Fisik
    Route::get('/admin/fisik', [AdminController::class, 'adminFisik'])->name('admin.fisik')->middleware('is_admin');
    Route::post('/admin/fisik/tambah', [AdminController::class, 'createFisik'])->name('create.fisik')->middleware('is_admin');
    Route::get('/admin/fisik/{id}/edit',[AdminController::class, 'editFisik'])->name('edit.fisik')->middleware('is_admin');
    Route::post('/admin/fisik/{id}/update',[AdminController::class, 'updateFisik'])->name('update.fisik')->middleware('is_admin');
    Route::get('/admin/fisik/delete/{id}', [AdminController::class, 'deleteFisik'])->name('delete.fisik')->middleware('is_admin');

//Chat
    Route::get('/admin/chat', [AdminController::class, 'adminChat'])->name('admin.chat')->middleware('is_admin');
    Route::post('/admin/chat/tambah', [AdminController::class, 'createChat'])->name('create.chat')->middleware('is_admin');
    Route::get('/admin/chat/{id}/edit',[AdminController::class, 'editChat'])->name('edit.chat')->middleware('is_admin');
    Route::post('/admin/chat/{id}/update',[AdminController::class, 'updateChat'])->name('update.chat')->middleware('is_admin');
    Route::get('/admin/chat/delete/{id}', [AdminController::class, 'deleteChat'])->name('delete.chat')->middleware('is_a
    dmin');

//Evaluasi
    Route::get('/admin/evaluasi', [AdminController::class, 'adminEvaluasi'])->name('admin.evaluasi')->middleware('is_admin');
    Route::post('/admin/evaluasi/tambah', [AdminController::class, 'createEvaluasi'])->name('create.evaluasi')->middleware('is_admin');
    Route::get('/admin/evaluasi/{id}/edit',[AdminController::class, 'editEvaluasi'])->name('edit.evaluasi')->middleware('is_admin');
    Route::post('/admin/evaluasi/{id}/update',[AdminController::class, 'updateEvaluasi'])->name('update.evaluasi')->middleware('is_admin');
    Route::get('/admin/evaluasi/delete/{id}', [AdminController::class, 'deleteEvaluasi'])->name('delete.evaluasi')->middleware('is_admin');

//User
    Route::get('/admin/user', [AdminController::class, 'adminUser'])->name('admin.evaluasi')->middleware('is_admin');

//Export
    Route::get('/export/fisik', [AdminController::class, 'exportFisik'])->name('exportFisik');
    Route::get('/export/nutrisi', [AdminController::class, 'exportNutrisi'])->name('exportNutrisi');
    Route::get('/export/user', [AdminController::class, 'exportUser'])->name('exportSiswa');
    Route::get('/export/identifikasi', [AdminController::class, 'exportIdentifikasi'])->name('exportIdentifikasi');

    Route::get('/pdf/fisik', [AdminController::class, 'pdfFisik'])->name('pdfFisik');
    Route::get('/pdf/nutrisi', [AdminController::class, 'pdfNutrisi'])->name('pdfNutrisi');
    Route::get('/pdf/user', [AdminController::class, 'pdfUser'])->name('pdfSiswa');
    Route::get('/pdf/identifikasi', [AdminController::class, 'pdfIdentifikasi'])->name('pdfIdentifikasi');


