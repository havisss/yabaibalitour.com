<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | {{ $title ?? 'Overview' }}</title>
    @vite(['resources/css/admin.css', 'resources/js/app.js'])
</head>
<body>
    <div class="admin-wrapper">
        <!-- Sidebar -->
        <aside class="admin-sidebar">
            <div class="sidebar-header">
                Bali<span>Tour</span> Admin
            </div>
            <ul class="sidebar-menu">
                <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                        Dashboard
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.tours.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tours.index') }}">
                        <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                        Tour Packages
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.car-partners.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.car-partners.index') }}">
                        <svg viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
                        Car Partners
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.airport-transfers.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.airport-transfers.index') }}">
                        <svg viewBox="0 0 24 24" style="fill:none; stroke:currentColor; stroke-width:2; stroke-linecap:round; stroke-linejoin:round;"><path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/></svg>
                        Airport Transfers
                    </a>
                </li>
                <li>
                    <a href="/" target="_blank">
                        <svg viewBox="0 0 24 24"><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
                        View Live Site
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <svg viewBox="0 0 24 24"><path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C18.43 8.5 19 10.18 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-1.82.57-3.5 1.59-4.42L5.17 5.17C3.8 6.84 3 8.98 3 11.38c0 4.97 4.02 9 9 9s9-4.03 9-9c0-2.4-0.8-4.54-2.17-6.21z"/></svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main -->
        <div class="admin-main">
            <header class="admin-header">
                <div class="header-title">
                    {{ $title ?? 'Dashboard' }}
                </div>
                <div class="admin-user">
                    <span>Welcome, {{ Auth::user()->name }}</span>
                </div>
            </header>

            <main class="admin-content">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
