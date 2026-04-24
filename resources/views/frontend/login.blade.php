@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')

    <!-- Auth Section -->
    <section class="auth-section">
        <div class="container">
            <div class="row align-items-center justify-content-center g-5">

                <!-- Left Brand Panel -->
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="auth-brand-panel">
                        <a href="{{url('/')}}" class="brand-logo"><span>P</span> ProtoCut</a>
                        <h1>Welcome back to<br>India's <span class="highlight">Fastest</span><br>Manufacturing Platform
                        </h1>
                        <p>Sign in to manage your orders, track production in real-time, and get instant quotes for CNC,
                            3D Printing & more.</p>

                        <ul class="auth-benefit-list">
                            <li>
                                <i class="bi bi-lightning-charge-fill"></i>
                                Real-time order tracking & status updates
                            </li>
                            <li>
                                <i class="bi bi-file-earmark-check-fill"></i>
                                Instant quotes & CAD file management
                            </li>
                            <li>
                                <i class="bi bi-shield-check"></i>
                                Secure payments with GST invoicing
                            </li>
                            <li>
                                <i class="bi bi-headset"></i>
                                Priority access to 24/7 engineer support
                            </li>
                        </ul>

                        <div class="auth-stat-row">
                            <div class="stat-item">
                                <h4>12K+</h4>
                                <p>Parts Delivered</p>
                            </div>
                            <div class="stat-item">
                                <h4>256K+</h4>
                                <p>Happy Customers</p>
                            </div>
                            <div class="stat-item">
                                <h4>99.6%</h4>
                                <p>Quality Rating</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Auth Card -->
                <div class="col-lg-5 col-md-8 col-sm-11">
                    <div class="auth-card">

                        <div class="auth-card-header">
                            <h2>Sign in to ProtoCut</h2>
                            <p>Don't have an account? <a href="{{route('register')}}"
                                    class="text-primary fw-bold text-decoration-none">Create one free</a></p>
                        </div>

                        <!-- Social Login -->
                        <a href="{{ route('google.login') }}" class="btn-social mb-3">
                            <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google">
                            Continue with Google
                        </a>

                        <div class="auth-divider">or sign in with email</div>

                        <!-- Login Form -->
                        <form id="loginForm" action="{{route('login.submit')}}" method="POST" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <div class="auth-input-wrap">
                                    <i class="bi bi-envelope input-icon"></i>
                                    <input type="email" name="email" class="form-control" id="loginEmail"
                                        placeholder="you@example.com" required>
                                </div>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>

                            <div class="mb-1">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <label class="form-label mb-0">Password</label>
                                    <a href="#" class="text-primary text-decoration-none"
                                        style="font-size:12px;font-weight:600;">Forgot password?</a>
                                </div>
                                <div class="auth-input-wrap">
                                    <i class="bi bi-lock input-icon"></i>
                                    <input type="password" name="password" class="form-control" id="loginPassword"
                                        placeholder="Enter your password" required>
                                    <button type="button" class="toggle-password" data-target="loginPassword">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                                <div class="invalid-feedback">Password is required.</div>
                            </div>

                            <div class="form-check mt-3 mb-4">
                                <input class="form-check-input" type="checkbox" name="remember" id="rememberMe" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label text-muted" for="rememberMe" style="font-size:13px;">
                                    Keep me signed in
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 fw-bold fs-6">
                                <i class="bi bi-box-arrow-in-right me-2"></i> Sign In
                            </button>
                        </form>

                        <div class="auth-footer-link">
                            New to ProtoCut? <a href="{{route('register')}}">Create a free account</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection


@push('scripts')
    <script>
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(btn => {
            btn.addEventListener('click', function () {
                const input = document.getElementById(this.dataset.target);
                const icon = this.querySelector('i');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.className = 'bi bi-eye-slash';
                } else {
                    input.type = 'password';
                    icon.className = 'bi bi-eye';
                }
            });
        });

        $(document).ready(function () {

            let remember = localStorage.getItem('remember_me');
            let email = localStorage.getItem('remember_email');

            if (remember === '1') {
                $('#rememberMe').prop('checked', true);
            }

            if (email) {
                $('#loginEmail').val(email);
            }
        });
        $('#rememberMe').on('change', function () {
            localStorage.setItem('remember_me', $(this).is(':checked') ? '1' : '0');
        });
        $('#loginForm').on('submit', function (e) {

            if (!this.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
                $(this).addClass('was-validated');

                toastr.error("Please fill all required fields!");
                return;
            }
            if ($('#rememberMe').is(':checked')) {
                localStorage.setItem('remember_email', $('#loginEmail').val());
            } else {
                localStorage.removeItem('remember_email');
            }
        });
    </script>
@endpush