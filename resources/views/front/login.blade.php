{{-- @extends('front.master')

@section('title', 'Login') --}}

{{-- @section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow rounded">
                <div class="card-header text-center"><strong>Login</strong></div>
                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <form method="POST" action="{{ route('front.login') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" class="form-control" required autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember">
                            <label class="form-check-label">Remember Me</label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>

    <!-- Bootstrap CSS (يمكن تستخدم CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .login-box {
            background: rgba(255, 255, 255, 0.95); /* شفافية خفيفة */
            border-radius: 20px; /* تدوير الزوايا */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2); /* ظل أقوى */
            padding: 30px;
            transition: transform 0.3s ease;
        }
    
        .login-box:hover {
            transform: translateY(-5px); /* حركة خفيفة عند المرور */
        }
    
        .login-box .card-header {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }
    </style>
    
</head>
<body style="background-image: url('{{ asset('assets-front/images/login.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">


<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-5">
        <div class="card shadow rounded login-box">
            <div class="card-header text-center bg-primary text-white">
                <h3>Login to Your Account</h3>
            </div>
            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form method="POST" action="{{ route('front.login') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check mb-4">
                        <input 
                            class="form-check-input" 
                            type="checkbox" 
                            name="remember" 
                            id="remember" 
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fs-5">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (اختياري، لكن مهم لو في تفاعل) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

