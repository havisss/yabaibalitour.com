<?php

use Illuminate\Support\Facades\Route;

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
    return view('private-car');
});

Route::get('/airport-transfer', function () {
    return view('airport-transfer');
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
