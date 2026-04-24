@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')

     <!-- Page Hero -->
    <section class="page-hero page-hero--sheet">
        <div class="container">
            <nav aria-label="breadcrumb" class="page-breadcrumb mb-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active">Sheet Metal Fabrication</li>
                </ol>
            </nav>
            <div class="page-badge"><i class="bi bi-box-seam"></i> Sheet Metal Service</div>
            <h1>Sheet Metal Fabrication<br><span class="text-primary">/ Custom Precision Parts</span></h1>
            <p>Professional sheet metal bending, punching, and laser cutting services tailored for Indian industries.
                From enclosures to structural parts — delivered fast and precise.</p>
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
                        <div class="h-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <div>
                            <h6>48h Lead Time</h6><small>Express fabrication</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-rulers"></i></div>
                        <div>
                            <h6>±0.1mm Tolerance</h6><small>CNC precision</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-layers-fill"></i></div>
                        <div>
                            <h6>Metals</h6><small>Stainless, Al, Steel</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-palette-fill"></i></div>
                        <div>
                            <h6>Powder Coating</h6><small>RAL color matching</small>
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
                    <span class="text-primary fw-bold text-uppercase small letter-spacing-1">Overview</span>
                    <h2 class="fw-bold mt-2 mb-4">Full-Cycle Sheet Metal<br>Fabrication in India</h2>
                    <p class="text-muted mb-4">ProtoCut delivers end-to-end sheet metal fabrication for prototypes and
                        production runs. Our in-house capabilities cover the complete workflow from raw sheet to
                        finished, coated part — no outsourcing, no delays.</p>
                    <ul class="list-unstyled vstack gap-3">
                        <li class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0 text-primary fs-5"><i class="bi bi-check-circle-fill"></i></div>
                            <div><strong>Laser Cutting of Sheets</strong> — Fiber laser for metals up to 12mm with tight
                                tolerances and clean edge quality.</div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0 text-primary fs-5"><i class="bi bi-check-circle-fill"></i></div>
                            <div><strong>CNC Press Brake Bending</strong> — Programmable bending up to 20mm mild steel
                                with repeatability across batches.</div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0 text-primary fs-5"><i class="bi bi-check-circle-fill"></i></div>
                            <div><strong>Punching & Forming</strong> — High-speed punching for holes, louvers, embosses,
                                and custom forms in one setup.</div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0 text-primary fs-5"><i class="bi bi-check-circle-fill"></i></div>
                            <div><strong>TIG/MIG Welding & Assembly</strong> — Certified welders for structural
                                integrity, followed by full quality inspection.</div>
                        </li>
                    </ul>
                    <a href="index.html" class="btn btn-primary mt-4 px-4 py-2 fw-bold">Get Instant Quote</a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg">
                        <img src="assets/img/project-2.png" alt="Sheet Metal Fabrication"
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
                <h2 class="fw-bold mt-2">What We Fabricate</h2>
                <p class="text-muted">Complete in-house sheet metal fabrication — from design to finished part.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Laser Cutting Sheet</h5>
                        <p class="text-muted small mb-0">Fiber laser cutting for steel, stainless, aluminum and copper
                            sheets up to 12mm with ±0.1mm accuracy and burr-free edges.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-arrows-angle-contract"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">CNC Bending / Press Brake</h5>
                        <p class="text-muted small mb-0">CNC-controlled press brake bending with programmable back
                            gauges for consistent angles across prototypes and production runs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-circle-square"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Punching & Forming</h5>
                        <p class="text-muted small mb-0">CNC turret punch for holes, slots, louvers, knockouts, and
                            custom emboss patterns at high speed and low unit cost.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-fire"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">TIG / MIG Welding</h5>
                        <p class="text-muted small mb-0">Certified TIG and MIG welders for structural and cosmetic welds
                            on mild steel, stainless steel, and aluminum assemblies.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-palette-fill"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Powder Coating</h5>
                        <p class="text-muted small mb-0">In-house powder coating in RAL colors with epoxy and polyester
                            powders for corrosion resistance and a premium finish.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-tools"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Precision Assembly</h5>
                        <p class="text-muted small mb-0">Hardware insertion (PEM nuts, studs, standoffs), final
                            assembly, and functional testing to deliver ready-to-use fabricated parts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specifications Table -->
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
                                <td>Min Thickness</td>
                                <td><strong>0.5 mm</strong></td>
                            </tr>
                            <tr>
                                <td>Max Thickness (Laser)</td>
                                <td><strong>12 mm</strong></td>
                            </tr>
                            <tr>
                                <td>Max Thickness (Bending)</td>
                                <td><strong>20 mm</strong></td>
                            </tr>
                            <tr>
                                <td>Tolerance</td>
                                <td><strong>±0.1 mm</strong></td>
                            </tr>
                            <tr>
                                <td>Surface Options</td>
                                <td><strong>As-Cut / Bead Blast / Powder Coat / Anodize</strong></td>
                            </tr>
                            <tr>
                                <td>Lead Time</td>
                                <td><strong>2 – 5 days</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <span class="text-primary fw-bold text-uppercase small">Materials</span>
                    <h2 class="fw-bold mt-2 mb-4">Supported Materials</h2>
                    <div class="material-chips mb-4">
                        <span class="material-chip">Mild Steel</span>
                        <span class="material-chip">Stainless 304</span>
                        <span class="material-chip">Stainless 316</span>
                        <span class="material-chip">Aluminum 1100</span>
                        <span class="material-chip">Aluminum 5052</span>
                        <span class="material-chip">Galvanized Steel</span>
                        <span class="material-chip">Copper</span>
                        <span class="material-chip">Brass</span>
                    </div>
                    <span class="text-primary fw-bold text-uppercase small">Finishes</span>
                    <h4 class="fw-bold mt-2 mb-3">Available Finishes</h4>
                    <div class="material-chips">
                        <span class="material-chip">As-Cut</span>
                        <span class="material-chip">Deburring</span>
                        <span class="material-chip">Powder Coating</span>
                        <span class="material-chip">Anodizing</span>
                        <span class="material-chip">Zinc Plating</span>
                        <span class="material-chip">Bead Blasting</span>
                        <span class="material-chip">Brushing</span>
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
                <h2 class="fw-bold mt-2">Our Fabrication Process</h2>
                <p class="text-muted">From file upload to your doorstep — a transparent 5-step process.</p>
            </div>
            <div class="svc-steps">
                <div class="svc-step">
                    <h6>Upload DXF / STEP</h6>
                    <p>Upload your flat pattern DXF or folded STEP file. We accept DXF, DWG, STEP, and IGES formats.</p>
                </div>
                <div class="svc-step">
                    <h6>Instant Quote</h6>
                    <p>Receive a detailed quote with material, finish, and quantity pricing within minutes of uploading
                        your file.</p>
                </div>
                <div class="svc-step">
                    <h6>DFM Review</h6>
                    <p>Our engineers review your design for manufacturability and flag any issues before production
                        begins.</p>
                </div>
                <div class="svc-step">
                    <h6>Fabrication & QC</h6>
                    <p>Parts are cut, bent, welded, and finished in our facility with 100% dimensional inspection before
                        packing.</p>
                </div>
                <div class="svc-step">
                    <h6>Ship Pan-India</h6>
                    <p>Parts are securely packed and dispatched via express courier to any location across India within
                        2–5 days.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="py-5">
        <div class="container">
            <div class="quote-cta-banner text-center">
                <h2 class="fw-bold text-white mb-3">Ready to fabricate your sheet metal parts?</h2>
                <p class="text-white-50 mb-4 fs-5">Upload your DXF or STEP file now and get an instant quote. No tooling
                    cost. No minimum order.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="index.html" class="btn btn-primary btn-lg px-5 fw-bold"><i
                            class="bi bi-cloud-upload me-2"></i>Upload & Quote</a>
                    <a href="contact.html" class="btn btn-outline-light btn-lg px-5 fw-bold">Talk to an Engineer</a>
                </div>
            </div>
        </div>
    </section>

@endsection