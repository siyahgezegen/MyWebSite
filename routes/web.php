<?php
//use Controllers 
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\BooksReadController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProjectsController;

use Illuminate\Support\Facades\Route;


//Home Page - Ana sayfa
//?HomePage sayfasında Yapılan Projeler ve okunan kitaplar ikisi birden görüntülenecek
Route::get('/', [HomePageController::class, "index"])->name('homepage');

//About Me Page - Hakkımda Sayfası
Route::get('/about-me', [AboutMeController::class, "index"])->name('about-me');
//admin
//admin login
Route::get('/admin', [AdminLoginController::class, 'index'])->name('admin-login');
//!admin login control and make session
Route::post('/admin-login', [AdminLoginController::class, 'adminLogin'])->name('admin-login-control');

Route::get('/admin/add-content', [AdminLoginController::class, 'addContent'])->name('add.content');
// Route::get('/admin/add-content', [AdminLoginController::class, 'addProject'])->name('addproject');
//burada aynı adrese 2 tane root tanımladığım için hata alıyormuşum 

Route::post('/admin/add-content-book', [AdminLoginController::class, 'addBookPost'])->name('addbookpost');
Route::post('/admin/add-content-project', [AdminLoginController::class, 'addProjectPost'])->name('addprojectpost');

Route::get('/admin/board', [AdminLoginController::class, 'board'])->name('adminboard');