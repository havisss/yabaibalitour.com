<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tour;
use App\Models\CarPartner;

class AdminController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function index()
    {
        $totalTours = Tour::where('category', '!=', 'AIRPORT TRANSFER')->count();
        $totalTransfers = Tour::where('category', 'AIRPORT TRANSFER')->count();
        $totalPartners = CarPartner::count();
        
        $recentTours = Tour::where('category', '!=', 'AIRPORT TRANSFER')->latest()->take(5)->get();
        $recentPartners = CarPartner::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalTours', 'totalTransfers', 'totalPartners', 'recentTours', 'recentPartners'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
