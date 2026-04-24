@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')

    <!-- Page Hero -->
    <section class="page-hero page-hero--wire">
        <div class="container">
            <nav aria-label="breadcrumb" class="page-breadcrumb mb-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active">Wire EDM Cutting</li>
                </ol>
            </nav>
            <div class="page-badge"><i class="bi bi-bezier"></i> EDM Machining</div>
            <h1>Wire EDM Cutting<br><span class="text-primary">/ Ultra-Precision Parts</span></h1>
            <p>High-precision wire EDM for hardened metals, complex profiles, and tight tolerances impossible to achieve
                with conventional machining. No cutting forces, no distortion, no limits.</p>
            <div class="d-flex gap-3 mt-4 flex-wrap">
                <a href="index.html" class="btn btn-primary px-4 py-3 fw-bold rounded-3"><i
                        class="bi bi-cloud-upload me-2"></i> Upload CAD & Get Quote</a>
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
                            <h6>±0.002mm Accuracy</h6><small>Micron-level precision</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-shield-fill-check"></i></div>
                        <div>
                            <h6>Any Hardness</h6><small>Up to 68 HRC</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-bezier2"></i></div>
                        <div>
                            <h6>Complex Profiles</h6><small>No geometric limits</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-star-fill"></i></div>
                        <div>
                            <h6>No Burr</h6><small>Spark eroded clean finish</small>
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
                    <h2 class="fw-bold mt-2 mb-4">Wire EDM for the Most<br>Demanding Applications</h2>
                    <p class="text-muted mb-4">Wire Electrical Discharge Machining (EDM) uses a thin electrically
                        charged wire to erode conductive metal with extreme precision. It is the preferred process when
                        tolerances below ±0.005mm are required, or when the workpiece is too hard or fragile for
                        conventional cutting.</p>
                    <ul class="list-unstyled vstack gap-3">
                        <li class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0 text-primary fs-5"><i class="bi bi-check-circle-fill"></i></div>
                            <div><strong>Hardened Steels up to 68 HRC</strong> — Wire EDM cuts fully hardened tool
                                steels, carbide, and heat-treated metals that would destroy conventional cutting tools.
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0 text-primary fs-5"><i class="bi bi-check-circle-fill"></i></div>
                            <div><strong>Intricate Profiles with No Limits</strong> — Internal sharp corners, intricate
                                splines, keyways, and contours that are geometrically impossible with milling or
                                grinding.</div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0 text-primary fs-5"><i class="bi bi-check-circle-fill"></i></div>
                            <div><strong>Excellent Surface Finish</strong> — Multi-pass EDM cutting achieves Ra 0.4μm
                                surface finish, eliminating the need for subsequent grinding in many applications.</div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0 text-primary fs-5"><i class="bi bi-check-circle-fill"></i></div>
                            <div><strong>No Cutting Forces</strong> — The non-contact erosion process exerts zero
                                mechanical force, making it safe for thin walls, delicate features, and stress-sensitive
                                parts.</div>
                        </li>
                    </ul>
                    <a href="index.html" class="btn btn-primary mt-4 px-4 py-2 fw-bold">Get Instant Quote</a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg">
                        <img src="assets/img/project-3.png" alt="Wire EDM Cutting" class="img-fluid w-100 svc-hero-img">
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
                <h2 class="fw-bold mt-2">Wire EDM Capabilities</h2>
                <p class="text-muted">Specialized EDM services for toolmaking, aerospace, medical, and precision
                    engineering industries.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-bezier"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">2-Axis Wire EDM</h5>
                        <p class="text-muted small mb-0">Standard 2-axis wire EDM for profiles, slots, keyways, and
                            external/internal contours on any conductive metal with ±0.002mm tolerance.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-arrows-move"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">4-Axis Taper Wire Cutting</h5>
                        <p class="text-muted small mb-0">4-axis simultaneous wire EDM for tapered profiles, angular
                            surfaces, and complex 3D forms such as turbine blade root slots and die tapers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-zoom-in"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Micro Wire EDM (Ø0.05mm)</h5>
                        <p class="text-muted small mb-0">Ultra-fine wire EDM using 0.05mm diameter wire for micro slots,
                            micro gears, and miniature components requiring features smaller than 0.1mm.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-dot"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">EDM Hole Drilling</h5>
                        <p class="text-muted small mb-0">Small hole EDM drilling for start holes, cooling passages, oil
                            holes, and fuel nozzle orifices in hardened materials where conventional drilling fails.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-tools"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Die & Punch Making</h5>
                        <p class="text-muted small mb-0">Precision punches and dies for blanking, piercing, and
                            progressive tooling manufactured from D2, H13, and carbide with matched clearances.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-heart-pulse-fill"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Medical & Aerospace Parts</h5>
                        <p class="text-muted small mb-0">Surgical instruments, implant components, aerospace brackets,
                            and fuel system parts machined from titanium, Inconel, and stainless with full traceability.
                        </p>
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
                                <td>Max Part Size</td>
                                <td><strong>500 × 400 × 300 mm</strong></td>
                            </tr>
                            <tr>
                                <td>Wire Diameter</td>
                                <td><strong>0.1 – 0.3 mm</strong></td>
                            </tr>
                            <tr>
                                <td>Min Slot Width</td>
                                <td><strong>0.12 mm</strong></td>
                            </tr>
                            <tr>
                                <td>Tolerance</td>
                                <td><strong>±0.002 mm</strong></td>
                            </tr>
                            <tr>
                                <td>Surface Finish</td>
                                <td><strong>Ra 0.4 μm</strong></td>
                            </tr>
                            <tr>
                                <td>Cutting Speed</td>
                                <td><strong>300 mm²/min</strong></td>
                            </tr>
                            <tr>
                                <td>Materials</td>
                                <td><strong>Any Conductive Metal</strong></td>
                            </tr>
                            <tr>
                                <td>Lead Time</td>
                                <td><strong>3 – 7 days</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <span class="text-primary fw-bold text-uppercase small">Materials</span>
                    <h2 class="fw-bold mt-2 mb-4">Supported Materials</h2>
                    <div class="material-chips">
                        <span class="material-chip">Tool Steel D2/H13</span>
                        <span class="material-chip">Tungsten Carbide</span>
                        <span class="material-chip">Hardened Steel</span>
                        <span class="material-chip">Stainless 304/316</span>
                        <span class="material-chip">Titanium</span>
                        <span class="material-chip">Copper</span>
                        <span class="material-chip">Brass</span>
                        <span class="material-chip">Inconel</span>
                    </div>
                    <div class="info-card mt-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="text-primary fs-4 flex-shrink-0"><i class="bi bi-info-circle-fill"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Why Wire EDM over Laser Cutting?</h6>
                                <p class="text-muted small mb-0">Wire EDM is preferred for hardened materials (above 40
                                    HRC), tolerances tighter than ±0.05mm, and profiles requiring zero heat-affected
                                    zone. Laser cutting is faster and cheaper for soft metals and non-metals where
                                    micron tolerances are not required.</p>
                            </div>
                        </div>
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
                <h2 class="fw-bold mt-2">Our Wire EDM Process</h2>
                <p class="text-muted">Precision from file to finished part with full dimensional traceability.</p>
            </div>
            <div class="svc-steps">
                <div class="svc-step">
                    <h6>Upload CAD / DXF</h6>
                    <p class="text-muted small mb-0">Upload your part drawing in DXF, DWG, STEP, or IGES format. Include
                        material specification, hardness, and required tolerance.</p>
                </div>
                <div class="svc-step">
                    <h6>Quote & DFM Review</h6>
                    <p class="text-muted small mb-0">Our EDM specialists review the design for feasibility, wire entry
                        requirements, and workholding constraints before confirming the quote.</p>
                </div>
                <div class="svc-step">
                    <h6>Wire Program Setup</h6>
                    <p class="text-muted small mb-0">CAM engineers generate the optimized wire path program, selecting
                        offset values and number of passes for the required surface finish.</p>
                </div>
                <div class="svc-step">
                    <h6>EDM Cutting & QC</h6>
                    <p class="text-muted small mb-0">Parts are machined on calibrated wire EDM machines under stable
                        temperature conditions. In-process checks ensure conformance throughout cutting.</p>
                </div>
                <div class="svc-step">
                    <h6>Precision Measurement & Delivery</h6>
                    <p class="text-muted small mb-0">Final CMM inspection with full dimensional report. Parts are packed
                        with protective wrapping and shipped with certificate of conformance.</p>
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
                        <h2 class="fw-bold text-white mb-2">Need ultra-precision EDM cut parts?</h2>
                        <p class="text-white-50 mb-0">Upload your CAD file today and receive an instant quote within 60
                            seconds. High-precision wire EDM service with ±0.002mm tolerance.</p>
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