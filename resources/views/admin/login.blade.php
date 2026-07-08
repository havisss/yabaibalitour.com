<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Bali Tour</title>
    @vite(['resources/css/admin.css'])
</head>
<body class="login-body">
    <div class="login-card">
        <div class="login-header">
            <div class="login-logo">
                Bali<span>Tour</span>
            </div>
            <div class="login-subtitle">
                Administrative Dashboard Access
            </div>
        </div>

        <form action="{{ route('admin.login.post') }}" method="POST" class="login-form">
            @csrf
            
            @if ($errors->any())
                <div class="alert alert-danger" style="padding: 0.75rem 1rem; font-size: 0.85rem; margin-bottom: 1rem; border-radius: 8px;">
                    <div style="flex: 1;">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="admin@yabaibalitour.com" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn btn-primary login-btn">
                Log In
            </button>
        </form>
    </div>
</body>
</html>
