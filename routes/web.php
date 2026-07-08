<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminTourController;
use App\Http\Controllers\AdminCarPartnerController;
use App\Http\Controllers\AdminAirportTransferController;

Route::get('/', function () {
    $tours = \App\Models\Tour::take(4)->get();
    return view('welcome', compact('tours'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tours', function (\Illuminate\Http\Request $request) {
    $query = \App\Models\Tour::query();

    if ($request->has('category') && $request->category !== 'all') {
        $query->where('category', $request->category);
    }

    $tours = $query->paginate(12)->appends($request->query());
    return view('tours', compact('tours'));
});

Route::get('/tours/{id}', function ($id) {
    $tour = \App\Models\Tour::findOrFail($id);
    return view('tour-detail', compact('tour'));
})->name('tours.show');

Route::get('/private-car', function () {
    $partners = \App\Models\CarPartner::where('is_available', true)->get();
    return view('private-car', compact('partners'));
});

// Admin Panel Routes
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.login.post');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    Route::resource('/admin/tours', AdminTourController::class)->names('admin.tours');
    Route::resource('/admin/car-partners', AdminCarPartnerController::class)->names('admin.car-partners');
    Route::resource('/admin/airport-transfers', AdminAirportTransferController::class)->names('admin.airport-transfers');
});

Route::get('/airport-transfer', function () {
    $transfers = \App\Models\Tour::where('category', 'AIRPORT TRANSFER')->get();
    return view('airport-transfer', compact('transfers'));
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['id', 'en', 'ja'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
});
