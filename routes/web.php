<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmailListController as AdminEmailListController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmailListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::prefix('services')->group(function () {
    Route::get('/', [PagesController::class, 'services'])->name('services');
    Route::get('/technical-writing', [PagesController::class, 'technicalWriting'])->name('technical-writing');
    Route::get('/developer-education', [PagesController::class, 'developerEducation'])->name('developer-education');
});

Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/{author:slug}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemaps.index');
Route::get('/sitemaps/pages.xml', [SitemapController::class, 'pages'])->name('sitemaps.pages');
Route::get('/sitemaps/blog.xml', [SitemapController::class, 'blog'])->name('sitemaps.blog');
Route::post('/email-list', [EmailListController::class, 'store'])->name('email-list.store');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/posts', AdminPostController::class)->except('show');
    Route::resource('/categories', AdminCategoryController::class)->except('show');
    Route::resource('/email-list', AdminEmailListController::class)->only(['index', 'destroy']);
});

Route::middleware(['auth'])->get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
