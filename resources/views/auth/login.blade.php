@extends('layouts.app')

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <div class="card px-sm-6 px-0">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{ url('/') }}" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <span class="text-primary">
                                    <!-- Sneat SVG Logo -->
                                    <svg width="25" viewBox="0 0 25 42" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="M13.8,0.4L3.4,7.4C0.6,9.7-0.4,12.5,0.6,15.8c0.1,0.4,0.5,2,2.5,3.4c0.7,0.5,2.2,1.2,4.5,2L2.6,24.5C0.4,26.3,0.1,28.5,1.6,31.2c1.3,1.6,3.6,2.1,5.5,1.4c1.3-0.5,4.4-2.6,9.4-6.2c1.6-1.9,2.3-4,2-6.2c-0.4-2.7-2.2-4.6-5.3-5.8l-2.1-0.9l7.7-5.5L13.8,0.4z"></path>
                                    </svg>
                                </span>
                            </span>
                            <span class="app-brand-text demo text-heading fw-bold">Sneat</span>
                        </a>
                    </div>
                    <!-- /Logo -->

                    <h4 class="mb-1">Welcome Back! 👋</h4>
                    <p class="mb-6">Please sign in to continue</p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="form-label">Email or Username</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                   id="email" name="email" value="{{ old('email') }}" required
                                   placeholder="Enter your email or username" autofocus />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-6 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                                       name="password" required placeholder="••••••••" />
                                <span class="input-group-text cursor-pointer">
                                    <i class="icon-base bx bx-hide"></i>
                                </span>
                            </div>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-8">
                            <div class="d-flex justify-content-between">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" id="remember-me" name="remember"
                                           {{ old('remember') ? 'checked' : '' }} />
                                    <label class="form-check-label" for="remember-me">Remember Me</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        <span>Forgot Password?</span>
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="mb-6">
                            <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                        </div>
                    </form>

                    <p class="text-center">
                        <span>New here?</span>
                        <a href="{{ route('register') }}">
                            <span>Create an account</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
