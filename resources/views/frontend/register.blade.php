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
                        <a href="index.html" class="brand-logo"><span>P</span> ProtoCut</a>
                        <h1>Join India's <span class="highlight">Premier</span><br>Manufacturing<br>Community</h1>
                        <p>Create your free account and unlock instant quoting, real-time tracking, DFM reviews, and
                            access to 30+ engineering materials.</p>

                        <ul class="auth-benefit-list">
                            <li>
                                <i class="bi bi-clock-history"></i>
                                Get quotes in under 60 seconds
                            </li>
                            <li>
                                <i class="bi bi-cpu"></i>
                                Access 30+ materials & finishes
                            </li>
                            <li>
                                <i class="bi bi-graph-up-arrow"></i>
                                Track production progress live
                            </li>
                            <li>
                                <i class="bi bi-receipt-cutoff"></i>
                                Auto-generated GST invoices
                            </li>
                        </ul>

                        <div class="auth-stat-row">
                            <div class="stat-item">
                                <h4>Free</h4>
                                <p>To Register</p>
                            </div>
                            <div class="stat-item">
                                <h4>60s</h4>
                                <p>Instant Quote</p>
                            </div>
                            <div class="stat-item">
                                <h4>24h</h4>
                                <p>Lead Time</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Auth Card -->
                <div class="col-lg-5 col-md-8 col-sm-11">
                    <div class="auth-card">

                        <div class="auth-card-header">
                            <h2>Create your account</h2>
                            <p>Already have an account? <a href="{{route('login')}}"
                                    class="text-primary fw-bold text-decoration-none">Sign in here</a></p>
                        </div>

                        <!-- Social Register -->
                        <a href="{{ route('google.login') }}" class="btn-social mb-3">
                            <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google">
                            Continue with Google
                        </a>

                        <div class="auth-divider">or register with email</div>

                        <!-- Register Form -->
                        <form id="registerForm" action="{{route('signup')}}" method="post" novalidate>
                            @csrf
                            <div class="row g-3 mb-3">
                                <div class="col-6">
                                    <label class="form-label">First Name</label>
                                    <div class="auth-input-wrap">
                                        <i class="bi bi-person input-icon"></i>
                                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Arjun" value="{{ old('firstName') }}"
                                            required>
                                    </div>
                                    <div class="invalid-feedback">Required.</div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Last Name</label>
                                    <div class="auth-input-wrap">
                                        <i class="bi bi-person input-icon"></i>
                                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Mehta" value="{{ old('lastName') }}"
                                            required>
                                    </div>
                                    <div class="invalid-feedback">Required.</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <div class="auth-input-wrap">
                                    <i class="bi bi-envelope input-icon"></i>
                                    <input type="email" class="form-control" name="email" id="regEmail" placeholder="you@example.com" value="{{ old('email') }}"
                                        required>
                                </div>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone Number <span class="text-muted fw-normal"
                                        style="text-transform:none;">(optional)</span></label>
                                <div class="auth-input-wrap">
                                    <i class="bi bi-telephone input-icon"></i>
                                    <input type="number" class="form-control" name="phone_number" id="phone" placeholder="+91 98765 43210" value="{{ old('phone_number') }}">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="auth-input-wrap">
                                    <i class="bi bi-lock input-icon"></i>
                                    <input type="password" name="password" class="form-control" id="regPassword"
                                        placeholder="Create a strong password" required minlength="8">
                                    <button type="button" class="toggle-password" data-target="regPassword">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                                <div class="invalid-feedback">Password must be at least 8 characters.</div>
                                <!-- Password Strength -->
                                <div class="password-strength mt-2">
                                    <div class="d-flex gap-1 mb-1">
                                        <div class="strength-bar flex-fill">
                                            <div class="fill" id="bar1"></div>
                                        </div>
                                        <div class="strength-bar flex-fill">
                                            <div class="fill" id="bar2"></div>
                                        </div>
                                        <div class="strength-bar flex-fill">
                                            <div class="fill" id="bar3"></div>
                                        </div>
                                        <div class="strength-bar flex-fill">
                                            <div class="fill" id="bar4"></div>
                                        </div>
                                    </div>
                                    <span class="strength-text" id="strengthLabel"></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <div class="auth-input-wrap">
                                    <i class="bi bi-lock-fill input-icon"></i>
                                    <input type="password" name="password_confirmation" class="form-control" id="confirmPassword"
                                        placeholder="Repeat your password" required>
                                    <button type="button" class="toggle-password" data-target="confirmPassword">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                                <div class="invalid-feedback" id="confirmError">Passwords do not match.</div>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" name="agreeTerms" id="agreeTerms" required>
                                <label class="form-check-label text-muted" for="agreeTerms" style="font-size:13px;">
                                    I agree to the <a href="#" class="text-primary text-decoration-none fw-bold">Terms
                                        of Service</a> and <a href="#"
                                        class="text-primary text-decoration-none fw-bold">Privacy Policy</a>
                                </label>
                                <div class="invalid-feedback">You must agree before continuing.</div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 fw-bold fs-6">
                                <i class="bi bi-person-plus me-2"></i> Create Free Account
                            </button>
                        </form>

                        <div class="auth-footer-link">
                            Already registered? <a href="{{route('login')}}">Sign in to your account</a>
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

        // Password strength meter
        const strengthColors = ['#ef4444', '#f97316', '#eab308', '#00ca72'];
        const strengthLabels = ['Weak', 'Fair', 'Good', 'Strong'];

        document.getElementById('regPassword').addEventListener('input', function () {
            const val = this.value;
            let score = 0;
            if (val.length >= 8) score++;
            if (/[A-Z]/.test(val)) score++;
            if (/[0-9]/.test(val)) score++;
            if (/[^A-Za-z0-9]/.test(val)) score++;

            ['bar1', 'bar2', 'bar3', 'bar4'].forEach((id, i) => {
                const bar = document.getElementById(id);
                if (i < score) {
                    bar.style.width = '100%';
                    bar.style.background = strengthColors[score - 1];
                } else {
                    bar.style.width = '0%';
                }
            });

            const label = document.getElementById('strengthLabel');
            if (val.length === 0) {
                label.textContent = '';
            } else {
                label.textContent = 'Strength: ' + strengthLabels[score - 1];
                label.style.color = strengthColors[score - 1];
            }
        });

        // Form validation
        document.getElementById('registerForm').addEventListener('submit', function (e) {

            const pwd = document.getElementById('regPassword').value;
            const confirm = document.getElementById('confirmPassword').value;

            if (pwd !== confirm) {
                document.getElementById('confirmPassword').setCustomValidity('Passwords do not match.');
            } else {
                document.getElementById('confirmPassword').setCustomValidity('');
            }

            if (!this.checkValidity()) {
                e.preventDefault(); // only stop if invalid
                e.stopPropagation();
                this.classList.add('was-validated');
            }
        });

        // Clear confirm mismatch on typing
        document.getElementById('confirmPassword').addEventListener('input', function () {
            this.setCustomValidity('');
        });
    </script>
@endpush