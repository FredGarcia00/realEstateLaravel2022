<?php

use Illuminate\Support\Facades\Route;

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
// admin dashboard
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function() {
    // admin dashboard
    Route::get('/', function () {
        return view('admin/dashboard');
    })->name('dashboard');

    // Listings page
    Route::group([
        'prefix' => 'listings',
        'as' => 'listings.'
    ], function() {
        Route::get('/', [\App\Http\Controllers\Admin\ListingController::class, 'index'])->name('index');

        Route::get('/create', [\App\Http\Controllers\Admin\ListingController::class, 'create'])->name('create');

        Route::post('/', [\App\Http\Controllers\Admin\ListingController::class, 'store'])->name('store');

        Route::get('/{id}/edit', [\App\Http\Controllers\Admin\ListingController::class, 'edit'])->name('edit');
    });
      
});

Route::get('/', function () {
    return view('pages/home');
});


// Single listing
Route::get('/listing/{slug}/{id}', function () {
    return view('pages/single-listing');
});

// Show all listings
Route::get('/{property_type}/{listing_type}/{city}', function () {
    return view('pages/listings');
})->name('listings');

// User saved listings
Route::get('/account', function () {
    return view('pages/saved-listings');
})->name('account');

// User showing status
Route::get('/account/show-status', function () {
    return view('pages/show-status');
})->name('show-status');






// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
