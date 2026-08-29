<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/industries', [FrontendController::class, 'industries'])->name('industries');
Route::get('/global-sourcing', [FrontendController::class, 'globalSourcing'])->name('global-sourcing');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');
Route::get('/partners-vendors', [FrontendController::class, 'partnersVendors'])->name('partners-vendors');
Route::get('/careers', [FrontendController::class, 'careers'])->name('careers');
Route::get('/careers/details/{slug}', [FrontendController::class, 'careerDetails'])->name('careers.details');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/reviews', [FrontendController::class, 'reviews'])->name('reviews');
Route::get('/request-quote', [FrontendController::class, 'quote'])->name('quote');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/quote/store', [QuoteController::class, 'store'])->name('quote.store');
Route::group(['prefix' => '/services'], function () {
    Route::get('/all', [FrontendController::class, 'services'])->name('services');
    Route::get('/details/{id}', [FrontendController::class, 'servicesDetails'])->name('services.details');
});
Route::get('/products/details/{id}', [FrontendController::class, 'productsDetails'])->name('products.details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/', [ProductController::class, 'store'])->name('store');
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('/{product}', [ProductController::class, 'update'])->name('update');
        Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
        Route::delete('/gallery/{gallery}', [ProductController::class, 'deleteGalleryImage'])->name('gallery.delete');
    });

    Route::group(['prefix' => '/services'], function () {
        Route::get('/index', [ServicesController::class, 'index'])->name('services.index');
        Route::get('/create', [ServicesController::class, 'create'])->name('services.create');
        Route::post('/store', [ServicesController::class, 'store'])->name('services.store');
        Route::get('/edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
        Route::post('/update/{id}', [ServicesController::class, 'update'])->name('services.update');
        Route::delete('/destroy/{id}', [ServicesController::class, 'destroy'])->name('services.destroy');
        Route::delete('/gallery/delete/{id}', [ServicesController::class, 'deleteGalleryImage'])->name('services.gallery.delete');
        Route::delete('/faq/delete/{id}', [ServicesController::class, 'deleteFaq'])->name('services.faq.delete');
    });

    Route::group(['prefix' => '/categories'], function () {
        Route::get('/index', [CategoryController::class, 'index'])->name('categories.index');
        Route::post('/reorder', [CategoryController::class, 'reorder'])->name('categories.reorder');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });

    Route::group(['prefix' => '/careers'], function () {
        Route::get('/index', [CareerController::class, 'index'])->name('careers.index');
        Route::get('/create', [CareerController::class, 'create'])->name('careers.create');
        Route::post('/store', [CareerController::class, 'store'])->name('careers.store');
        Route::get('/edit/{id}', [CareerController::class, 'edit'])->name('careers.edit');
        Route::post('/update/{id}', [CareerController::class, 'update'])->name('careers.update');
        Route::delete('/destroy/{id}', [CareerController::class, 'destroy'])->name('careers.destroy');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => '/contacts'], function () {
        Route::get('/index', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::get('/show/{id}', [AdminContactController::class, 'show'])->name('contacts.show');
        Route::get('/{id}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
    });

    Route::group(['prefix' => '/quotes'], function () {
        Route::get('/index', [QuoteController::class, 'index'])->name('admin.quotes.index');
        Route::get('/show/{id}', [QuoteController::class, 'show'])->name('admin.quotes.show');
        Route::delete('/destroy/{id}', [QuoteController::class, 'destroy'])->name('admin.quotes.destroy');
    });
});

require __DIR__.'/auth.php';
