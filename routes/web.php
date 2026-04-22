<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Models\Page;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Page Management Routes
    Route::resource('admin/pages', PageController::class)->except(['show']);
    
    // Contact Submissions Admin
    Route::get('admin/contacts', [\App\Http\Controllers\ContactSubmissionController::class, 'index'])->name('admin.contacts.index');
    Route::delete('admin/contacts/{contact}', [\App\Http\Controllers\ContactSubmissionController::class, 'destroy'])->name('admin.contacts.destroy');

    // Landing About Admin
    Route::get('admin/about', [\App\Http\Controllers\AboutSectionController::class, 'edit'])->name('admin.about.edit');
    Route::put('admin/about', [\App\Http\Controllers\AboutSectionController::class, 'update'])->name('admin.about.update');

    // Site Settings Admin
    Route::get('admin/settings', [\App\Http\Controllers\SiteSettingController::class, 'edit'])->name('admin.settings.edit');
    Route::put('admin/settings', [\App\Http\Controllers\SiteSettingController::class, 'update'])->name('admin.settings.update');
});

require __DIR__.'/auth.php';

// Contact Form Routes
Route::get('/contact', [\App\Http\Controllers\ContactSubmissionController::class, 'create'])->name('contact');
Route::post('/contact', [\App\Http\Controllers\ContactSubmissionController::class, 'store'])->name('contact.submit');

// Static Website Structural Pages
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/areas-of-expertise', function () {
    return view('areas-of-expertise');
});
Route::get('/our-commitment', function () {
    return view('our-commitment');
});
Route::get('/investor-relations', function () {
    return view('investor-relations');
});
Route::get('/careers', function () {
    return view('careers');
});

// Public generic page route (CMS Pages - fallback)
Route::get('/{slug}', function (string $slug) {
    $page = Page::where('slug', $slug)->firstOrFail();
    return view('page', compact('page'));
})->name('page.show');
