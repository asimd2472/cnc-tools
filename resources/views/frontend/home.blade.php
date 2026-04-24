@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')

    <!-- Hero Section -->
    <header class="hero-section" id="quote">
        <div class="container">
            <div class="row align-items-center">
                <!-- Quote Form -->
                <div class="col-lg-5">
                    <div class="quote-card shadow-premium ms-lg-auto">
                        <h2 class="fw-bold">Instant Quote</h2>
                        <p class="text-muted small mb-4">Precision CNC & 3D Printing Prototype Service. Upload your CAD
                            file to get started.</p>

                        <form>
                            <div class="mb-3">
                                <label class="form-label">Dimensions</label>
                                <div class="dim-input-group">
                                    <input type="text" class="form-control dim-field" placeholder="Length (mm)">
                                    <span class="dim-sep">×</span>
                                    <input type="text" class="form-control dim-field" placeholder="Width (mm)">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label">Quantity</label>
                                    <select class="form-select">
                                        <option>Choose Num (pcs)</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Material</label>
                                    <select class="form-select">
                                        <option>Aluminum 6061</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Finishing</label>
                                <select class="form-select">
                                    <option>As Machined</option>
                                </select>
                            </div>

                            <button class="btn btn-primary w-100 py-3 rounded-3 fw-bold">
                                <i class="bi bi-cloud-upload me-2"></i> Upload CAD File
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Hero Content -->
                <div class="col-lg-7 ps-lg-5 text-center text-lg-start mt-5 mt-lg-0 hero-text">
                    <span class="badge-custom mb-3 d-inline-block"><i class="bi bi-gear-fill me-1"></i> New: Sheet Metal
                        Fabrication</span>
                    <h1 class="fw-800">CNC Machining From ₹1,200</h1>
                    <ul class="list-unstyled mb-5">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Turning & 3/4/5-Axis
                            Milling</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> 30+ Engineering
                            Materials</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Precision up to
                            0.01mm</li>
                    </ul>
                    <div class="d-flex gap-4 justify-content-center justify-content-lg-start">
                        <div class="text-center">
                            <h4 class="fw-bold mb-0">24h</h4>
                            <p class="small mb-0">Turnaround</p>
                        </div>
                        <div class="vr"></div>
                        <div class="text-center">
                            <h4 class="fw-bold mb-0">ISO</h4>
                            <p class="small mb-0">Certified</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Features Bar -->
    <div class="features-bar">
        <div class="container">
            <div class="row g-4 d-flex d-md-none overflow-auto flex-nowrap">
                <div class="col-10">
                    <div class="feature-item">
                        <div class="feature-icon"><i class="bi bi-gem"></i></div>
                        <div>
                            <h6 class="mb-0 fw-bold">Best Value</h6>
                            <small class="opacity-50">High-Quality, Low-Cost</small>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="feature-item">
                        <div class="feature-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <div>
                            <h6 class="mb-0 fw-bold">Fast Turnaround</h6>
                            <small class="opacity-50">Delivery in 24 Hours</small>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="feature-item">
                        <div class="feature-icon"><i class="bi bi-headset"></i></div>
                        <div>
                            <h6 class="mb-0 fw-bold">24/7 Service</h6>
                            <small class="opacity-50">Engineering Support</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 d-none d-md-flex">
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="feature-icon"><i class="bi bi-gem"></i></div>
                        <div>
                            <h6 class="mb-0 fw-bold">Best Value</h6>
                            <small class="opacity-50">High-Quality, Low-Cost</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border-start border-secondary">
                    <div class="feature-item ps-md-4">
                        <div class="feature-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <div>
                            <h6 class="mb-0 fw-bold">Fast Turnaround</h6>
                            <small class="opacity-50">Delivery in 24 Hours</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border-start border-secondary">
                    <div class="feature-item ps-md-4">
                        <div class="feature-icon"><i class="bi bi-headset"></i></div>
                        <div>
                            <h6 class="mb-0 fw-bold">24/7 Service</h6>
                            <small class="opacity-50">Professional Engineering Support</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How to use -->
    <section class="process-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold">How to use ProtoCut <span class="text-muted fw-normal ms-2">Place an order</span>
                </h2>
                <button class="btn btn-outline-primary btn-sm rounded-pill" data-bs-toggle="modal"
                    data-bs-target="#videoModal"><i class="bi bi-play-circle  me-1"></i> See how it works</button>
            </div>

            <div class="row g-3 mt-2 ordering-steps justify-content-center">
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="order-step-card">
                        <div class="step-badge">01</div>
                        <div class="step-card-body">
                            <div class="step-icon"><i class="bi bi-file-earmark-text"></i></div>
                            <div class="step-info">
                                <h6 class="fw-bold mb-1">Online Quote</h6>
                                <p class="text-muted small mb-0">Get pricing instantly with our automated tool.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="order-step-card">
                        <div class="step-badge">02</div>
                        <div class="step-card-body">
                            <div class="step-icon"><i class="bi bi-box-arrow-in-up"></i></div>
                            <div class="step-info">
                                <h6 class="fw-bold mb-1">Upload CAD</h6>
                                <p class="text-muted small mb-0">Securely upload STEP, IGS, or SLDPRT files.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="order-step-card">
                        <div class="step-badge">03</div>
                        <div class="step-card-body">
                            <div class="step-icon"><i class="bi bi-clipboard-check"></i></div>
                            <div class="step-info">
                                <h6 class="fw-bold mb-1">Order Review</h6>
                                <p class="text-muted small mb-0">Detailed DFM and geometric analysis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="order-step-card">
                        <div class="step-badge">04</div>
                        <div class="step-card-body">
                            <div class="step-icon"><i class="bi bi-credit-card"></i></div>
                            <div class="step-info">
                                <h6 class="fw-bold mb-1">Payment</h6>
                                <p class="text-muted small mb-0">Convenient payment via secure gateway.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="order-step-card">
                        <div class="step-badge">05</div>
                        <div class="step-card-body">
                            <div class="step-icon"><i class="bi bi-gear-wide-connected"></i></div>
                            <div class="step-info">
                                <h6 class="fw-bold mb-1">Production</h6>
                                <p class="text-muted small mb-0">Real-time status updates from our shop floor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="order-step-card">
                        <div class="step-badge">06</div>
                        <div class="step-card-body">
                            <div class="step-icon"><i class="bi bi-truck"></i></div>
                            <div class="step-info">
                                <h6 class="fw-bold mb-1">Fast Delivery</h6>
                                <p class="text-muted small mb-0">Express shipping across all major Indian cities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Service -->
    <section class="featured-service">
        <div class="container">
            <div class="bg-white p-3 p-md-4 p-lg-5 rounded-4 shadow-sm">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="service-image-container">
                            <img src="{{ asset('assets/img/project-2.png')}}" class="img-fluid" alt="Sheet Metal">
                            <button class="play-btn border-0" data-bs-toggle="modal" data-bs-target="#videoModal"><i
                                    class="bi bi-play-fill"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="text-primary small text-uppercase fw-bold">Featured Service</span>
                        <h2 class="display-6 fw-bold mb-4 mt-2">Custom <span class="text-primary">Sheet Metal</span>
                            Solutions</h2>
                        <p class="text-muted">Bending, Punching, and Laser Cutting with precision for Indian industry
                            standards.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Rapid Prototyping & Low
                                Volume
                            </li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Stainless, Aluminum, Galva
                                Steel
                            </li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Powder Coating & Anodizing
                            </li>
                        </ul>
                        <div class="d-flex align-items-center gap-4">
                            <div>
                                <h4 class="mb-0 fw-bold">₹1,800</h4>
                                <small class="text-muted">Sheet Metal Proto Pack</small>
                            </div>
                            <button class="btn btn-primary px-4 py-3 rounded-3">Get Started Now <i
                                    class="bi bi-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manufacturing Info -->
    <section class="py-5">
        <div class="container">
            <h3 class="mb-5 fw-bold section-title">Affordable Prototype Manufacturing in India</h3>
            <div class="swiper swiper-mobile-only service-swiper">
                <div class="swiper-wrapper">
                    <!-- CNC Card -->
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <div class="info-card">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="fw-bold mb-0">CNC Machining</h6>
                                <span class="badge bg-danger">HOT</span>
                            </div>
                            <p class="small text-muted mb-4"><span
                                    class="bg-warning-subtle text-warning px-2 py-1 rounded">Milling/Turning</span></p>
                            <button class="btn btn-outline-secondary btn-sm w-100 mt-auto">Quote Now</button>
                        </div>
                    </div>
                    <!-- 3D Print Card -->
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <div class="info-card">
                            <h6 class="fw-bold mb-4">3D Printing</h6>
                            <table class="table table-borderless table-sm small text-muted">
                                <tr>
                                    <td>Technologies:</td>
                                    <td class="text-dark">SLA, FDM, MJF</td>
                                </tr>
                                <tr>
                                    <td>Materials:</td>
                                    <td class="text-dark">Resin, Nylon, PLA</td>
                                </tr>
                            </table>
                            <button class="btn btn-outline-secondary btn-sm w-100 mt-auto">Compare Tech</button>
                        </div>
                    </div>
                    <!-- Laser Card -->
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <div class="info-card">
                            <h6 class="fw-bold mb-4">Laser & Cutting</h6>
                            <table class="table table-borderless table-sm small text-muted">
                                <tr>
                                    <td>Thickness:</td>
                                    <td class="text-dark">0.5mm - 30mm</td>
                                </tr>
                                <tr>
                                    <td>Accuracy:</td>
                                    <td class="text-dark">±0.1mm</td>
                                </tr>
                            </table>
                            <button class="btn btn-outline-primary btn-sm w-100 mt-auto">Quote Now</button>
                        </div>
                    </div>
                    <!-- Orders Card -->
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <div class="info-card">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="fw-bold mb-0">Live Orders</h6>
                                <span class="text-primary small fw-bold">LIVE <i class="bi bi-broadcast"></i></span>
                            </div>
                            <ul class="list-unstyled small mb-0">
                                <li class="mb-2 d-flex justify-content-between"><span>02-05 P***5</span> <span
                                        class="text-danger">In Quality</span></li>
                                <li class="mb-2 d-flex justify-content-between"><span>02-05 T***K</span> <span
                                        class="text-warning">In Production</span></li>
                                <li class="mb-0 d-flex justify-content-between"><span>02-05 M***R</span> <span
                                        class="text-success">Shipped</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination d-lg-none"></div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5 bg-light">
        <div class="container text-center mb-5">
            <h2 class="fw-bold">Why Choose Our Prototype Manufacturing?</h2>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="d-flex gap-3">
                        <div class="text-primary fs-3 flex-shrink-0"><i class="bi bi-lightning-charge"></i></div>
                        <div>
                            <h6 class="fw-bold">24 hours lead-time*</h6>
                            <p class="small text-muted">Rapid production for prototypes and urgent orders to keep your
                                projects moving.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex gap-3">
                        <div class="text-primary fs-3 flex-shrink-0"><i class="bi bi-people"></i></div>
                        <div>
                            <h6 class="fw-bold">90+ Professionals</h6>
                            <p class="small text-muted">Team supported by over 90 professionals & technical engineering
                                experts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex gap-3">
                        <div class="text-primary fs-3 flex-shrink-0"><i class="bi bi-globe-central-south-asia"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold">Pan-India Logistics</h6>
                            <p class="small text-muted">Reliable delivery across all states supported by
                                DHL/FedEx/BlueDart.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex gap-3">
                        <div class="text-primary fs-3 flex-shrink-0"><i class="bi bi-patch-check"></i></div>
                        <div>
                            <h6 class="fw-bold">Top Notch Quality Criteria</h6>
                            <p class="small text-muted">ISO-certified processes and strict QC inspection ensure every
                                part meets spec.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex gap-3">
                        <div class="text-primary fs-3 flex-shrink-0"><i class="bi bi-award"></i></div>
                        <div>
                            <h6 class="fw-bold">Trusted Experience</h6>
                            <p class="small text-muted">Years of manufacturing expertise serving startups, R&D labs, and
                                OEM clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex gap-3">
                        <div class="text-primary fs-3 flex-shrink-0"><i class="bi bi-file-earmark-code"></i></div>
                        <div>
                            <h6 class="fw-bold">DXF / CAD Assistance</h6>
                            <p class="small text-muted">Free DFM review and CAD support from our engineering team before
                                production.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <div class="stat-item">
                        <h3>12,400+</h3>
                        <p class="small text-muted">PRECISION PARTS / 200</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <h3>256K+</h3>
                        <p class="small text-muted">SATISFIED PROS</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <h3>170+</h3>
                        <p class="small text-muted">COUNTRIES SERVED</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <h3>99.6%</h3>
                        <p class="small text-muted">QUALITY RATING</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shared Projects -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h2 class="fw-bold mb-0">Shared Projects</h2>
                <a href="shared-projects.html" class="text-primary text-decoration-none small fw-bold">Explore Community
                    <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="swiper swiper-mobile-only project-swiper pb-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide col-lg-4 col-md-6">
                        <div class="project-card shadow-sm">
                            <img src="{{ asset('assets/img/project-1.png')}}" class="w-100" alt="Motherboard">
                            <div class="p-3">
                                <h6 class="fw-bold mb-1">Advanced Control Motherboard</h6>
                                <small class="text-muted">PCB Assembly</small>
                                <div class="d-flex justify-content-between mt-3 small">
                                    <span><i class="bi bi-eye me-1"></i> 13K</span>
                                    <span><i class="bi bi-heart me-1"></i> 450</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide col-lg-4 col-md-6">
                        <div class="project-card shadow-sm">
                            <img src="{{ asset('assets/img/project-2.png')}}" class="w-100" alt="Robotic Arm">
                            <div class="p-3">
                                <h6 class="fw-bold mb-1">DIY Robotic Arm Controller</h6>
                                <small class="text-muted">CNC Parts</small>
                                <div class="d-flex justify-content-between mt-3 small">
                                    <span><i class="bi bi-eye me-1"></i> 3.5K</span>
                                    <span><i class="bi bi-heart me-1"></i> 890</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide col-lg-4 col-md-6">
                        <div class="project-card shadow-sm">
                            <img src="{{ asset('assets/img/project-3.png')}}" class="w-100" alt="Sensor">
                            <div class="p-3">
                                <h6 class="fw-bold mb-1">Smart IOT Environmental Sensor</h6>
                                <small class="text-muted">3D Print Case</small>
                                <div class="d-flex justify-content-between mt-3 small">
                                    <span><i class="bi bi-eye me-1"></i> 2.1K</span>
                                    <span><i class="bi bi-heart me-1"></i> 320</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination d-lg-none"></div>
            </div>
        </div>
    </section>

    <!-- Reviews -->
    <section class="py-5 text-white"
        style="background: linear-gradient(135deg, rgba(10,18,28,0.95) 0%, rgba(10,18,28,0.90) 100%), url('{{ asset('assets/img/hero-bg.png')}}') center/cover no-repeat;">
        <div class="container text-center mb-5">
            <h2 class="fw-bold">Customer Review</h2>
            <p class="text-white-50 small">Trusted by engineers and makers worldwide</p>
        </div>
        <div class="container">
            <div class="swiper review-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <div class="review-card">
                            <i class="bi bi-quote fs-3 text-primary"></i>
                            <p class="small my-4">Incredibly fast shipping to Delhi even for heavy CNC parts...</p>
                            <button class="btn btn-outline-light btn-sm w-100 rounded-pill mb-4" data-bs-toggle="modal"
                                data-bs-target="#videoModal"
                                data-video-url="https://www.youtube.com/embed/4rvmiJZl4bk"><i
                                    class="bi bi-play-fill"></i> Watch review</button>
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/40?u=1" class="reviewer-img" alt="Arjun">
                                <div>
                                    <h6 class="small mb-0">Arjun Mehta</h6><small class="text-white opacity-50">New
                                        Delhi, India</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <div class="review-card featured">
                            <i class="bi bi-quote fs-3 text-white"></i>
                            <p class="small my-4">ProtoCut is our go-to for CNC machining in Bangalore...</p>
                            <button class="btn btn-outline-light btn-sm w-100 rounded-pill mb-4" data-bs-toggle="modal"
                                data-bs-target="#videoModal"
                                data-video-url="https://www.youtube.com/embed/4rvmiJZl4bk"><i
                                    class="bi bi-play-fill"></i> Watch review</button>
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/40?u=2" class="reviewer-img" alt="Priya">
                                <div>
                                    <h6 class="small mb-0">Priya Sharma</h6><small
                                        class="text-white opacity-75">Bangalore, India</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <div class="review-card">
                            <i class="bi bi-quote fs-3 text-primary"></i>
                            <p class="small my-4">Using them for our medical enclosures for 2 years...</p>
                            <button class="btn btn-outline-light btn-sm w-100 rounded-pill mb-4" data-bs-toggle="modal"
                                data-bs-target="#videoModal"
                                data-video-url="https://www.youtube.com/embed/4rvmiJZl4bk"><i
                                    class="bi bi-play-fill"></i> Watch review</button>
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/40?u=3" class="reviewer-img" alt="Tanmay">
                                <div>
                                    <h6 class="small mb-0">Tanmay Kundu</h6><small
                                        class="text-white opacity-50">Hyderabad, India</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <div class="review-card">
                            <i class="bi bi-quote fs-3 text-primary"></i>
                            <p class="small my-4">Great service and high-quality PCBs delivered to Pune...</p>
                            <button class="btn btn-outline-light btn-sm w-100 rounded-pill mb-4" data-bs-toggle="modal"
                                data-bs-target="#videoModal"
                                data-video-url="https://www.youtube.com/embed/4rvmiJZl4bk"><i
                                    class="bi bi-play-fill"></i> Watch review</button>
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/40?u=4" class="reviewer-img" alt="Rahul">
                                <div>
                                    <h6 class="small mb-0">Rahul Deshmukh</h6><small class="text-white opacity-50">Pune,
                                        India</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Trust Footer -->
    <div class="bg-white py-5 border-top border-bottom">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <i class="bi bi-patch-check text-primary fs-3 mb-2 d-block"></i>
                    <h6 class="fw-bold mb-1">GST Ready</h6>
                    <small class="text-muted small">Tax invoices for Indian businesses</small>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-truck text-primary fs-3 mb-2 d-block"></i>
                    <h6 class="fw-bold mb-1">Pan-India Delivery</h6>
                    <small class="text-muted small">Fast delivery to all major cities</small>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-shield-check text-primary fs-3 mb-2 d-block"></i>
                    <h6 class="fw-bold mb-1">Safe Payment</h6>
                    <small class="text-muted small">Secure & popular payment methods</small>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-check-circle text-primary fs-3 mb-2 d-block"></i>
                    <h6 class="fw-bold mb-1">Not A Broker</h6>
                    <small class="text-muted small">Direct manufacturer capabilities</small>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@push('scripts')
    <script>
        // Use a single initialization function for Swiper sliders
        function initSwipers() {
            // General Swiper Configuration with Breakpoints
            const commonConfig = {
                slidesPerView: 1.2,
                spaceBetween: 20,
                pagination: { el: '.swiper-pagination', clickable: true },
                breakpoints: {
                    768: { slidesPerView: 2.5, spaceBetween: 25 },
                    992: { slidesPerView: 4, spaceBetween: 30, enabled: false } // Disable Swiper on Desktop to use standard Grid
                }
            };

            new Swiper('.service-swiper', commonConfig);
            new Swiper('.project-swiper', {
                ...commonConfig,
                breakpoints: {
                    768: { slidesPerView: 2.2, spaceBetween: 25 },
                    992: { slidesPerView: 3, enabled: false }
                }
            });

            // Review Swiper (Always slider, with 4 items on desktop)
            new Swiper('.review-swiper', {
                slidesPerView: 1.1,
                spaceBetween: 20,
                pagination: { el: '.swiper-pagination', clickable: true },
                breakpoints: {
                    576: { slidesPerView: 1.5 },
                    768: { slidesPerView: 2.5 },
                    992: { slidesPerView: 3 },
                    1200: { slidesPerView: 4 }
                }
            });
        }

        window.addEventListener('load', initSwipers);
    </script>

    <!-- Video Modal Script -->
    <script>
        const videoModal = document.getElementById('videoModal');
        const videoIframe = document.getElementById('videoIframe');
        const defaultSrc = videoIframe.src;

        videoModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const videoUrl = button.getAttribute('data-video-url');
            if (videoUrl) {
                videoIframe.src = videoUrl;
            }
        });

        videoModal.addEventListener('hidden.bs.modal', function () {
            videoIframe.src = '';
            videoIframe.src = defaultSrc;
        });
    </script>
@endpush