<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class AdminAirportTransferController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Tour::where('category', 'AIRPORT TRANSFER');

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('location', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $transfers = $query->latest()->paginate(10)->appends($request->query());

        return view('admin.airport-transfers.index', compact('transfers', 'search'));
    }

    public function create()
    {
        return view('admin.airport-transfers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'duration' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'url'],
            'tags_input' => ['nullable', 'string'],
            'is_popular' => ['nullable', 'boolean'],
        ]);

        $tags = [];
        if (!empty($validated['tags_input'])) {
            $tags = array_map('trim', explode(',', $validated['tags_input']));
        }

        Tour::create([
            'category' => 'AIRPORT TRANSFER',
            'title' => $validated['title'],
            'location' => $validated['location'],
            'description' => $validated['description'],
            'duration' => $validated['duration'],
            'price' => $validated['price'],
            'image_url' => $validated['image_url'],
            'tags' => $tags,
            'is_popular' => $request->has('is_popular'),
        ]);

        return redirect()->route('admin.airport-transfers.index')->with('success', 'Airport transfer package created successfully.');
    }

    public function edit(Tour $airportTransfer)
    {
        return view('admin.airport-transfers.edit', compact('airportTransfer'));
    }

    public function update(Request $request, Tour $airportTransfer)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'duration' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'url'],
            'tags_input' => ['nullable', 'string'],
            'is_popular' => ['nullable', 'boolean'],
        ]);

        $tags = [];
        if (!empty($validated['tags_input'])) {
            $tags = array_map('trim', explode(',', $validated['tags_input']));
        }

        $airportTransfer->update([
            'category' => 'AIRPORT TRANSFER',
            'title' => $validated['title'],
            'location' => $validated['location'],
            'description' => $validated['description'],
            'duration' => $validated['duration'],
            'price' => $validated['price'],
            'image_url' => $validated['image_url'],
            'tags' => $tags,
            'is_popular' => $request->has('is_popular'),
        ]);

        return redirect()->route('admin.airport-transfers.index')->with('success', 'Airport transfer package updated successfully.');
    }

    public function destroy(Tour $airportTransfer)
    {
        $airportTransfer->delete();
        return redirect()->route('admin.airport-transfers.index')->with('success', 'Airport transfer package deleted successfully.');
    }
}
