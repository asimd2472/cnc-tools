@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <nav aria-label="breadcrumb" class="page-breadcrumb mb-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active">CNC Machining</li>
                </ol>
            </nav>
            <div class="page-badge"><i class="bi bi-gear-fill"></i> Manufacturing Service</div>
            <h1>CNC Machining<br><span class="text-primary">From ₹1,200</span></h1>
            <p>Precision 3, 4 & 5-axis CNC milling and turning for metals and plastics. Tolerances up to ±0.01mm.
                Delivered pan-India in 24 hours.</p>
            <div class="d-flex gap-3 mt-4 flex-wrap">
                <a href="index.html" class="btn btn-primary px-4 py-3 fw-bold rounded-3"><i
                        class="bi bi-cloud-upload me-2"></i> Upload CAD & Get Quote</a>
                <a href="contact.html" class="btn btn-outline-light px-4 py-3 fw-bold rounded-3">Talk to an Engineer</a>
            </div>
        </div>
    </section>

    <!-- Highlights Bar -->
    <div class="service-highlights">
        <div class="container">
            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <div>
                            <h6>24h Lead Time</h6><small>Express production available</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-crosshair"></i></div>
                        <div>
                            <h6>±0.01mm Tolerance</h6><small>Precision machining</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-layers-fill"></i></div>
                        <div>
                            <h6>30+ Materials</h6><small>Metals & engineering plastics</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <div>
                            <h6>ISO 9001:2015</h6><small>Certified quality control</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <span class="text-primary small fw-bold text-uppercase">What We Offer</span>
                    <h2 class="fw-bold mt-2 mb-3">High-Precision CNC Machining for Every Application</h2>
                    <p class="text-muted">ProtoCut offers full-service CNC machining — from single-piece prototypes to
                        batch production. Our fleet of 3, 4, and 5-axis machining centres, CNC lathes, and Swiss-type
                        turning machines deliver parts to aerospace, automotive, medical, and electronics industries.
                    </p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-3 d-flex gap-3"><i class="bi bi-check-circle-fill text-primary mt-1"></i>
                            <div><strong>3-Axis CNC Milling</strong> — Ideal for prismatic parts, slots, pockets, and
                                flat surfaces.</div>
                        </li>
                        <li class="mb-3 d-flex gap-3"><i class="bi bi-check-circle-fill text-primary mt-1"></i>
                            <div><strong>4-Axis CNC Milling</strong> — Rotary axis for complex contours and undercuts in
                                one setup.</div>
                        </li>
                        <li class="mb-3 d-flex gap-3"><i class="bi bi-check-circle-fill text-primary mt-1"></i>
                            <div><strong>5-Axis CNC Milling</strong> — Full freedom for complex aerospace and medical
                                geometries.</div>
                        </li>
                        <li class="mb-3 d-flex gap-3"><i class="bi bi-check-circle-fill text-primary mt-1"></i>
                            <div><strong>CNC Turning & Lathe</strong> — Cylindrical parts, threads, grooves and bores
                                with high accuracy.</div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="service-image-container rounded-4 overflow-hidden svc-img-wrap">
                        <img src="assets/img/project-2.png" class="img-fluid w-100 h-100" alt="CNC Machining">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Capabilities -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary small fw-bold text-uppercase">Our Equipment</span>
                <h2 class="fw-bold mt-2">CNC Machining Capabilities</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="capability-card">
                        <div class="cap-icon"><i class="bi bi-gear-fill"></i></div>
                        <h6>3-Axis CNC Milling</h6>
                        <p>Max part size 600×400×250mm. Surface finish Ra 0.8–3.2. Standard tolerances ±0.05mm. Ideal
                            for flat profiles, pockets, and holes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="capability-card">
                        <div class="cap-icon"><i class="bi bi-arrows-fullscreen"></i></div>
                        <h6>5-Axis CNC Milling</h6>
                        <p>Complex geometries in a single setup. Max size 500×400×300mm. Perfect for impellers, medical
                            implants, and aerospace brackets.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="capability-card">
                        <div class="cap-icon"><i class="bi bi-record-circle"></i></div>
                        <h6>CNC Turning</h6>
                        <p>Diameters up to Ø200mm, length up to 500mm. Live tooling for milled features. Swiss turning
                            for miniature precision parts.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="capability-card">
                        <div class="cap-icon"><i class="bi bi-bullseye"></i></div>
                        <h6>Precision Grinding</h6>
                        <p>Cylindrical and surface grinding for tight-tolerance shafts, bores, and flat surfaces. Ra 0.1
                            achievable.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="capability-card">
                        <div class="cap-icon"><i class="bi bi-layers"></i></div>
                        <h6>EDM Hole Drilling</h6>
                        <p>Fine holes as small as Ø0.3mm in hardened materials. Ideal for cooling channels and injection
                            mould gates.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="capability-card">
                        <div class="cap-icon"><i class="bi bi-shield-check"></i></div>
                        <h6>CMM Inspection</h6>
                        <p>Full 3D dimensional inspection on Zeiss CMM. First Article Inspection Reports (FAIR)
                            available on request.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specs + Materials -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Specs -->
                <div class="col-lg-6">
                    <h4 class="fw-bold mb-4">Technical Specifications</h4>
                    <table class="spec-table">
                        <tr>
                            <td>Max Part Size (Milling)</td>
                            <td>600 × 400 × 300 mm</td>
                        </tr>
                        <tr>
                            <td>Max Part Size (Turning)</td>
                            <td>Ø200 × 500 mm</td>
                        </tr>
                        <tr>
                            <td>Standard Tolerance</td>
                            <td>±0.05 mm</td>
                        </tr>
                        <tr>
                            <td>Precision Tolerance</td>
                            <td>±0.01 mm</td>
                        </tr>
                        <tr>
                            <td>Min Feature Size</td>
                            <td>0.5 mm</td>
                        </tr>
                        <tr>
                            <td>Surface Roughness (as-machined)</td>
                            <td>Ra 3.2 μm</td>
                        </tr>
                        <tr>
                            <td>Surface Roughness (polished)</td>
                            <td>Ra 0.4 μm</td>
                        </tr>
                        <tr>
                            <td>Lead Time (Express)</td>
                            <td>24 hours</td>
                        </tr>
                        <tr>
                            <td>Lead Time (Standard)</td>
                            <td>3–5 business days</td>
                        </tr>
                        <tr>
                            <td>File Formats</td>
                            <td>STEP, IGES, STL, DXF, DWG</td>
                        </tr>
                        <tr>
                            <td>Min Order Quantity</td>
                            <td>1 piece</td>
                        </tr>
                    </table>
                </div>
                <!-- Materials -->
                <div class="col-lg-6">
                    <h4 class="fw-bold mb-4">Available Materials</h4>
                    <h6 class="text-muted small fw-bold text-uppercase mb-3">Metals</h6>
                    <div class="material-chips mb-4">
                        <span class="material-chip">Aluminum 6061</span>
                        <span class="material-chip">Aluminum 7075</span>
                        <span class="material-chip">Stainless 304</span>
                        <span class="material-chip">Stainless 316</span>
                        <span class="material-chip">Mild Steel</span>
                        <span class="material-chip">Brass</span>
                        <span class="material-chip">Copper</span>
                        <span class="material-chip">Titanium Grade 5</span>
                        <span class="material-chip">Inconel 625</span>
                        <span class="material-chip">Tool Steel</span>
                    </div>
                    <h6 class="text-muted small fw-bold text-uppercase mb-3">Engineering Plastics</h6>
                    <div class="material-chips mb-4">
                        <span class="material-chip">ABS</span>
                        <span class="material-chip">Nylon PA6</span>
                        <span class="material-chip">Nylon PA66</span>
                        <span class="material-chip">Acetal (POM)</span>
                        <span class="material-chip">Polycarbonate</span>
                        <span class="material-chip">PEEK</span>
                        <span class="material-chip">PTFE</span>
                        <span class="material-chip">UHMWPE</span>
                        <span class="material-chip">HDPE</span>
                    </div>
                    <h6 class="text-muted small fw-bold text-uppercase mb-3">Surface Finishes</h6>
                    <div class="material-chips">
                        <span class="material-chip active">As Machined</span>
                        <span class="material-chip">Anodizing Type II</span>
                        <span class="material-chip">Anodizing Type III</span>
                        <span class="material-chip">Bead Blasting</span>
                        <span class="material-chip">Powder Coating</span>
                        <span class="material-chip">Electroless Nickel</span>
                        <span class="material-chip">Black Oxide</span>
                        <span class="material-chip">Mirror Polish</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <span class="text-primary small fw-bold text-uppercase">How It Works</span>
                    <h2 class="fw-bold mt-2 mb-4">From CAD File to Finished Part in 24 Hours</h2>
                    <div class="svc-steps">
                        <div class="svc-step">
                            <h6>Upload Your CAD File</h6>
                            <p>Upload STEP, IGES, or STL via our instant quote portal. Our DFM engine analyses your file
                                in seconds.</p>
                        </div>
                        <div class="svc-step">
                            <h6>Get Instant Quote</h6>
                            <p>Select material, finish, tolerance class, and quantity. Receive a real-time price and
                                lead time within 60 seconds.</p>
                        </div>
                        <div class="svc-step">
                            <h6>Engineer Review & Confirm</h6>
                            <p>Our engineers review DFM, identify issues, and confirm the order. You receive a
                                production confirmation email.</p>
                        </div>
                        <div class="svc-step">
                            <h6>CNC Machining & QC</h6>
                            <p>Parts are machined on our state-of-the-art machines, followed by full CMM dimensional
                                inspection.</p>
                        </div>
                        <div class="svc-step">
                            <h6>Pack & Deliver Pan-India</h6>
                            <p>Parts are carefully packaged and shipped via BlueDart / DHL / FedEx with tracking to your
                                door.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="info-card text-center py-4"><i
                                    class="bi bi-geo-alt-fill fs-2 text-primary mb-2 d-block"></i>
                                <h4 class="fw-bold text-primary">5-Axis</h4>
                                <p class="small text-muted mb-0">CNC Milling Centers</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="info-card text-center py-4"><i
                                    class="bi bi-record-circle-fill fs-2 text-primary mb-2 d-block"></i>
                                <h4 class="fw-bold text-primary">18+</h4>
                                <p class="small text-muted mb-0">CNC Turning Machines</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="info-card text-center py-4"><i
                                    class="bi bi-people-fill fs-2 text-primary mb-2 d-block"></i>
                                <h4 class="fw-bold text-primary">90+</h4>
                                <p class="small text-muted mb-0">Engineers & Operators</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="info-card text-center py-4"><i
                                    class="bi bi-clock-fill fs-2 text-primary mb-2 d-block"></i>
                                <h4 class="fw-bold text-primary">24h</h4>
                                <p class="small text-muted mb-0">Express Lead Time</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="py-5">
        <div class="container">
            <div class="quote-cta-banner">
                <div class="row align-items-center cta-inner-row">
                    <div class="col-lg-8">
                        <h2 class="fw-bold text-white mb-2">Ready to machine your part?</h2>
                        <p class="text-white-50 mb-0">Upload your CAD file now and get an instant quote in under 60
                            seconds. No registration required to try.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="index.html" class="btn btn-primary px-5 py-3 fw-bold rounded-3 fs-6"><i
                                class="bi bi-cloud-upload me-2"></i> Upload & Quote Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')

@endpush