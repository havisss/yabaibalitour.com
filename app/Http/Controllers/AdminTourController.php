<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class AdminTourController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');

        $query = Tour::query()->where('category', '!=', 'AIRPORT TRANSFER');

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('location', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($category && $category !== 'all') {
            $query->where('category', $category);
        }

        $tours = $query->latest()->paginate(10)->appends($request->query());
        $categories = ['BALI FULL DAY TOUR', 'BALI ACTIVITIES', 'NUSA PENIDA TOUR', 'PRIVATE CAR CHARTER'];

        return view('admin.tours.index', compact('tours', 'categories', 'search', 'category'));
    }

    public function create()
    {
        $categories = ['BALI FULL DAY TOUR', 'BALI ACTIVITIES', 'NUSA PENIDA TOUR', 'PRIVATE CAR CHARTER'];
        return view('admin.tours.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => ['required', 'string'],
            'title' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'duration' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'url'],
            'tags_input' => ['nullable', 'string'],
            'is_popular' => ['nullable', 'boolean'],
        ]);

        // Process tags: split by comma
        $tags = [];
        if (!empty($validated['tags_input'])) {
            $tags = array_map('trim', explode(',', $validated['tags_input']));
        }

        Tour::create([
            'category' => $validated['category'],
            'title' => $validated['title'],
            'location' => $validated['location'],
            'description' => $validated['description'],
            'duration' => $validated['duration'],
            'price' => $validated['price'],
            'image_url' => $validated['image_url'],
            'tags' => $tags,
            'is_popular' => $request->has('is_popular'),
        ]);

        return redirect()->route('admin.tours.index')->with('success', 'Tour package created successfully.');
    }

    public function edit(Tour $tour)
    {
        $categories = ['BALI FULL DAY TOUR', 'BALI ACTIVITIES', 'NUSA PENIDA TOUR', 'PRIVATE CAR CHARTER'];
        return view('admin.tours.edit', compact('tour', 'categories'));
    }

    public function update(Request $request, Tour $tour)
    {
        $validated = $request->validate([
            'category' => ['required', 'string'],
            'title' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'duration' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'url'],
            'tags_input' => ['nullable', 'string'],
            'is_popular' => ['nullable', 'boolean'],
        ]);

        // Process tags
        $tags = [];
        if (!empty($validated['tags_input'])) {
            $tags = array_map('trim', explode(',', $validated['tags_input']));
        }

        $tour->update([
            'category' => $validated['category'],
            'title' => $validated['title'],
            'location' => $validated['location'],
            'description' => $validated['description'],
            'duration' => $validated['duration'],
            'price' => $validated['price'],
            'image_url' => $validated['image_url'],
            'tags' => $tags,
            'is_popular' => $request->has('is_popular'),
        ]);

        return redirect()->route('admin.tours.index')->with('success', 'Tour package updated successfully.');
    }

    public function destroy(Tour $tour)
    {
        $tour->delete();
        return redirect()->route('admin.tours.index')->with('success', 'Tour package deleted successfully.');
    }
}
