<?php

namespace App\Http\Controllers;

use App\Models\CarPartner;
use Illuminate\Http\Request;

class AdminCarPartnerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = CarPartner::query();

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('car_type', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $partners = $query->latest()->paginate(10)->appends($request->query());

        return view('admin.car-partners.index', compact('partners', 'search'));
    }

    public function create()
    {
        return view('admin.car-partners.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'car_type' => ['required', 'string', 'max:255'],
            'capacity' => ['required', 'integer', 'min:1'],
            'price' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:50'],
            'image_url' => ['required', 'url'],
            'description' => ['nullable', 'string'],
            'rating' => ['required', 'numeric', 'between:1.0,5.0'],
            'is_available' => ['nullable', 'boolean'],
        ]);

        CarPartner::create([
            'name' => $validated['name'],
            'car_type' => $validated['car_type'],
            'capacity' => $validated['capacity'],
            'price' => $validated['price'],
            'phone_number' => $validated['phone_number'],
            'image_url' => $validated['image_url'],
            'description' => $validated['description'],
            'rating' => $validated['rating'],
            'is_available' => $request->has('is_available'),
        ]);

        return redirect()->route('admin.car-partners.index')->with('success', 'Car partner created successfully.');
    }

    public function edit(CarPartner $carPartner)
    {
        return view('admin.car-partners.edit', compact('carPartner'));
    }

    public function update(Request $request, CarPartner $carPartner)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'car_type' => ['required', 'string', 'max:255'],
            'capacity' => ['required', 'integer', 'min:1'],
            'price' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:50'],
            'image_url' => ['required', 'url'],
            'description' => ['nullable', 'string'],
            'rating' => ['required', 'numeric', 'between:1.0,5.0'],
            'is_available' => ['nullable', 'boolean'],
        ]);

        $carPartner->update([
            'name' => $validated['name'],
            'car_type' => $validated['car_type'],
            'capacity' => $validated['capacity'],
            'price' => $validated['price'],
            'phone_number' => $validated['phone_number'],
            'image_url' => $validated['image_url'],
            'description' => $validated['description'],
            'rating' => $validated['rating'],
            'is_available' => $request->has('is_available'),
        ]);

        return redirect()->route('admin.car-partners.index')->with('success', 'Car partner updated successfully.');
    }

    public function destroy(CarPartner $carPartner)
    {
        $carPartner->delete();
        return redirect()->route('admin.car-partners.index')->with('success', 'Car partner deleted successfully.');
    }
}
