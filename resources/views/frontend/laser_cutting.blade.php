@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')

<!-- Page Hero -->
    <section class="page-hero page-hero--laser">
        <div class="container">
            <nav aria-label="breadcrumb" class="page-breadcrumb mb-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active">Laser Cutting</li>
                </ol>
            </nav>
            <div class="page-badge"><i class="bi bi-lightning-charge-fill"></i> Cutting Service</div>
            <h1>Laser Cutting<br><span class="text-primary">/ From 0.5mm to 30mm</span></h1>
            <p>High-precision CO2 and fiber laser cutting for metals and plastics. From intricate sheet metal components
                to custom acrylic panels — cut clean, cut fast, delivered anywhere in India.</p>
            <div class="d-flex gap-3 mt-4 flex-wrap">
                <a href="index.html" class="btn btn-primary px-4 py-3 fw-bold rounded-3"><i
                        class="bi bi-cloud-upload me-2"></i> Upload DXF & Get Quote</a>
                <a href="contact.html" class="btn btn-outline-light px-4 py-3 fw-bold rounded-3">Talk to an Engineer</a>
            </div>
        </div>
    </section>

    <!-- Service Highlights Bar -->
    <div class="service-highlights">
        <div class="container">
            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-rulers"></i></div>
                        <div>
                            <h6>±0.1mm Accuracy</h6><small>Fiber & CO2 lasers</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-layers-fill"></i></div>
                        <div>
                            <h6>0.5 – 30mm Thickness</h6><small>Metals & plastics</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <div>
                            <h6>CO2 & Fiber Laser</h6><small>Both technologies in-house</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-clock-fill"></i></div>
                        <div>
                            <h6>24h Express</h6><small>Same-day cutting available</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Overview Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="text-primary fw-bold text-uppercase small">Overview</span>
                    <h2 class="fw-bold mt-2 mb-4">Precision Laser Cutting<br>for Every Material</h2>
                    <p class="text-muted mb-4">ProtoCut operates high-power fiber and CO2 laser systems capable of
                        cutting virtually any flat material with exceptional precision. No tooling, no minimum quantity
                        — just fast turnaround and quality edges.</p>
                    <ul class="list-unstyled vstack gap-3">
                        <li class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0 text-primary fs-5"><i class="bi bi-check-circle-fill"></i></div>
                            <div><strong>Fiber Laser for Metals</strong> — Cut stainless steel, aluminum, mild steel,
                                copper, and brass from 0.5mm to 30mm thickness with clean kerf and no HAZ distortion.
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0 text-primary fs-5"><i class="bi bi-check-circle-fill"></i></div>
                            <div><strong>CO2 Laser for Non-Metals</strong> — Cut acrylic, MDF, plywood, rubber, and
                                fabric with smooth polished edges and precise detail reproduction.</div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0 text-primary fs-5"><i class="bi bi-check-circle-fill"></i></div>
                            <div><strong>Intricate Cutouts & Engraving</strong> — Complex patterns, text, logos, and
                                perforations produced directly from your DXF file with zero setup cost.</div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0 text-primary fs-5"><i class="bi bi-check-circle-fill"></i></div>
                            <div><strong>No Tooling Cost</strong> — Laser cutting is tool-free, making it ideal for
                                prototypes, one-offs, and small production batches at competitive pricing.</div>
                        </li>
                    </ul>
                    <a href="index.html" class="btn btn-primary mt-4 px-4 py-2 fw-bold">Get Instant Quote</a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg">
                        <img src="assets/img/project-1.png" alt="Laser Cutting Service"
                            class="img-fluid w-100 svc-hero-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Capabilities -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary fw-bold text-uppercase small">Capabilities</span>
                <h2 class="fw-bold mt-2">Laser Cutting Capabilities</h2>
                <p class="text-muted">From single prototype parts to batch production — our lasers handle it all.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Fiber Laser Cutting</h5>
                        <p class="text-muted small mb-0">High-power fiber lasers for cutting all metals up to 30mm
                            including steel, stainless, aluminum, copper, and brass with minimal taper and excellent
                            edge quality.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-soundwave"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">CO2 Laser Cutting</h5>
                        <p class="text-muted small mb-0">CO2 laser systems for non-metallic materials including acrylic,
                            MDF, plywood, rubber, leather, and fabric with polished fire-finished edges.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-pencil-fill"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Laser Engraving & Marking</h5>
                        <p class="text-muted small mb-0">Permanent laser engraving and marking for logos, serial
                            numbers, QR codes, and surface textures on metal and non-metal parts.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-circle-fill"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Tube / Pipe Laser Cutting</h5>
                        <p class="text-muted small mb-0">Rotary laser cutting for round, square, and rectangular tubes
                            and pipes — ideal for frames, brackets, and structural components.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-grid-3x3-gap-fill"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Custom Patterns & Perforations</h5>
                        <p class="text-muted small mb-0">Complex perforated patterns, decorative screens, grilles, and
                            mesh designs cut directly from DXF files for architectural and industrial applications.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-diagram-3-fill"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Auto Nesting (Cost Optimization)</h5>
                        <p class="text-muted small mb-0">Intelligent auto-nesting software minimizes material waste and
                            reduces per-part cost — especially beneficial for batch and production orders.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specs & Materials -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-6">
                    <span class="text-primary fw-bold text-uppercase small">Specifications</span>
                    <h2 class="fw-bold mt-2 mb-4">Technical Specifications</h2>
                    <table class="spec-table w-100">
                        <tbody>
                            <tr>
                                <td>Max Sheet Size</td>
                                <td><strong>2000 × 1000 mm</strong></td>
                            </tr>
                            <tr>
                                <td>Min Kerf Width</td>
                                <td><strong>0.1 mm</strong></td>
                            </tr>
                            <tr>
                                <td>Thickness Range</td>
                                <td><strong>0.5 – 30 mm (steel)</strong></td>
                            </tr>
                            <tr>
                                <td>Tolerance</td>
                                <td><strong>±0.1 mm</strong></td>
                            </tr>
                            <tr>
                                <td>File Formats</td>
                                <td><strong>DXF / DWG / PDF / AI</strong></td>
                            </tr>
                            <tr>
                                <td>Lead Time</td>
                                <td><strong>24 – 48 hours</strong></td>
                            </tr>
                            <tr>
                                <td>Min Order</td>
                                <td><strong>1 piece</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <span class="text-primary fw-bold text-uppercase small">Materials</span>
                    <h2 class="fw-bold mt-2 mb-4">Supported Materials</h2>
                    <div class="material-chips">
                        <span class="material-chip">Mild Steel</span>
                        <span class="material-chip">Stainless 304/316</span>
                        <span class="material-chip">Aluminum</span>
                        <span class="material-chip">Copper</span>
                        <span class="material-chip">Brass</span>
                        <span class="material-chip">Acrylic (PMMA)</span>
                        <span class="material-chip">MDF</span>
                        <span class="material-chip">Plywood</span>
                        <span class="material-chip">Rubber</span>
                        <span class="material-chip">Fabric</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Steps -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary fw-bold text-uppercase small">How It Works</span>
                <h2 class="fw-bold mt-2">Our Laser Cutting Process</h2>
                <p class="text-muted">Upload your file and receive finished parts at your door in as little as 24 hours.
                </p>
            </div>
            <div class="svc-steps">
                <div class="svc-step">
                    <h6>Upload DXF File</h6>
                    <p>Upload your 2D cutting file in DXF, DWG, PDF, or AI format. Our system auto-detects geometry and
                        calculates cut length.</p>
                </div>
                <div class="svc-step">
                    <h6>Get Instant Quote</h6>
                    <p>Receive a real-time price based on material, thickness, quantity, and delivery time. Adjust to
                        fit your budget instantly.</p>
                </div>
                <div class="svc-step">
                    <h6>Nesting & Programming</h6>
                    <p>Our CAM team nests your parts for maximum material efficiency and programs the optimal cutting
                        path for your geometry.</p>
                </div>
                <div class="svc-step">
                    <h6>Laser Cutting</h6>
                    <p>Parts are cut on our fiber or CO2 laser machines with real-time process monitoring for consistent
                        quality across every piece.</p>
                </div>
                <div class="svc-step">
                    <h6>QC & Delivery</h6>
                    <p>Parts pass dimensional inspection, are deburred if needed, and securely packed for express
                        delivery anywhere in India.</p>
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
                        <h2 class="fw-bold text-white mb-2">Get your parts laser cut today</h2>
                        <p class="text-white-50 mb-0">Upload your DXF file and receive an instant quote. 24h express
                            cutting available. No minimum order quantity.</p>
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