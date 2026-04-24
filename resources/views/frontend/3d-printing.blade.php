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
                    <li class="breadcrumb-item active">3D Printing</li>
                </ol>
            </nav>
            <div class="page-badge"><i class="bi bi-layers-fill"></i> Additive Manufacturing</div>
            <h1>3D Printing Service<br><span class="text-primary">SLA · FDM · MJF</span></h1>
            <p>Professional additive manufacturing for prototypes and end-use parts. Multiple technologies, 20+
                materials, shipped pan-India in 1–3 days.</p>
            <div class="d-flex gap-3 mt-4 flex-wrap">
                <a href="index.html" class="btn btn-primary px-4 py-3 fw-bold rounded-3"><i
                        class="bi bi-cloud-upload me-2"></i> Upload STL & Get Quote</a>
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
                            <h6>1–3 Day Delivery</h6><small>From upload to doorstep</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-rulers"></i></div>
                        <div>
                            <h6>0.05mm Layer Res</h6><small>SLA ultra-fine detail</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-layers-fill"></i></div>
                        <div>
                            <h6>20+ Materials</h6><small>Resin, Nylon, Rubber-like</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <div class="h-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <div>
                            <h6>No Tooling Cost</h6><small>Economical for 1–500 pcs</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Technology Cards -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary small fw-bold text-uppercase">Technologies</span>
                <h2 class="fw-bold mt-2">Choose Your 3D Printing Process</h2>
                <p class="text-muted">Each technology has unique strengths. Our engineers help you select the best
                    option for your application.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-sun"></i></div>
                        <h6>SLA — Stereolithography</h6>
                        <p>Photopolymer resin cured by UV laser. Exceptional surface finish (Ra 0.8μm), fine feature
                            resolution down to 0.1mm. Best for visual prototypes, dental, and jewellery models.</p>
                        <hr>
                        <ul class="list-unstyled small text-muted mb-0">
                            <li class="mb-1"><i class="bi bi-check text-primary me-1"></i> Layer thickness: 0.025–0.1mm
                            </li>
                            <li class="mb-1"><i class="bi bi-check text-primary me-1"></i> Max build: 300×300×200mm</li>
                            <li><i class="bi bi-check text-primary me-1"></i> Watertight, smooth surface</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="capability-card h-100 cap-card-featured">
                        <div class="cap-icon"><i class="bi bi-stack"></i></div>
                        <span class="badge text-bg-success mb-2 badge-xs">Most Popular</span>
                        <h6>FDM — Fused Deposition</h6>
                        <p>Thermoplastic filament extrusion. Strong, functional parts at the lowest cost. Ideal for
                            mechanical prototypes, jigs, fixtures, and large volume parts.</p>
                        <hr>
                        <ul class="list-unstyled small text-muted mb-0">
                            <li class="mb-1"><i class="bi bi-check text-primary me-1"></i> Layer thickness: 0.1–0.3mm
                            </li>
                            <li class="mb-1"><i class="bi bi-check text-primary me-1"></i> Max build: 500×500×500mm</li>
                            <li><i class="bi bi-check text-primary me-1"></i> PLA, ABS, PETG, TPU, ASA</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-grid-3x3-gap-fill"></i></div>
                        <h6>MJF — Multi Jet Fusion</h6>
                        <p>HP powder-bed fusion technology for strong, isotropic Nylon parts without support structures.
                            Ideal for functional end-use parts and complex internal channels.</p>
                        <hr>
                        <ul class="list-unstyled small text-muted mb-0">
                            <li class="mb-1"><i class="bi bi-check text-primary me-1"></i> Layer thickness: 0.08mm</li>
                            <li class="mb-1"><i class="bi bi-check text-primary me-1"></i> Max build: 380×284×380mm</li>
                            <li><i class="bi bi-check text-primary me-1"></i> Nylon PA12, PA11, PP</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specs + Materials -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <h4 class="fw-bold mb-4">Technical Specifications</h4>
                    <table class="spec-table">
                        <tr>
                            <td>Min Layer Thickness (SLA)</td>
                            <td>0.025 mm</td>
                        </tr>
                        <tr>
                            <td>Min Layer Thickness (FDM)</td>
                            <td>0.1 mm</td>
                        </tr>
                        <tr>
                            <td>Min Layer Thickness (MJF)</td>
                            <td>0.08 mm</td>
                        </tr>
                        <tr>
                            <td>Min Wall Thickness</td>
                            <td>0.8 mm (FDM) / 0.3 mm (SLA)</td>
                        </tr>
                        <tr>
                            <td>Dimensional Accuracy</td>
                            <td>±0.2% (min ±0.2mm)</td>
                        </tr>
                        <tr>
                            <td>Max Build Size</td>
                            <td>500×500×500mm (FDM)</td>
                        </tr>
                        <tr>
                            <td>Surface Roughness (SLA)</td>
                            <td>Ra 0.8 μm</td>
                        </tr>
                        <tr>
                            <td>File Formats</td>
                            <td>STL, OBJ, STEP, 3MF</td>
                        </tr>
                        <tr>
                            <td>Lead Time (Express)</td>
                            <td>24–48 hours</td>
                        </tr>
                        <tr>
                            <td>Lead Time (Standard)</td>
                            <td>2–4 business days</td>
                        </tr>
                        <tr>
                            <td>Min Order</td>
                            <td>1 piece</td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6">
                    <h4 class="fw-bold mb-4">Materials by Technology</h4>
                    <h6 class="text-muted small fw-bold text-uppercase mb-2">SLA Resins</h6>
                    <div class="material-chips mb-3"><span class="material-chip">Standard Resin (White/Grey)</span><span
                            class="material-chip">Tough Resin</span><span class="material-chip">Flexible
                            Resin</span><span class="material-chip">Clear Resin</span><span class="material-chip">Dental
                            Resin</span></div>
                    <h6 class="text-muted small fw-bold text-uppercase mb-2">FDM Filaments</h6>
                    <div class="material-chips mb-3"><span class="material-chip active">PLA</span><span
                            class="material-chip">ABS</span><span class="material-chip">PETG</span><span
                            class="material-chip">TPU (Flexible)</span><span class="material-chip">Nylon</span><span
                            class="material-chip">ASA</span><span class="material-chip">PC (Polycarbonate)</span><span
                            class="material-chip">Carbon-filled PLA</span></div>
                    <h6 class="text-muted small fw-bold text-uppercase mb-2">MJF Powders</h6>
                    <div class="material-chips mb-4"><span class="material-chip">Nylon PA12</span><span
                            class="material-chip">Nylon PA11</span><span class="material-chip">Polypropylene (PP)</span>
                    </div>
                    <h6 class="text-muted small fw-bold text-uppercase mb-2">Post-Processing</h6>
                    <div class="material-chips"><span class="material-chip">Sanding</span><span
                            class="material-chip">Painting</span><span class="material-chip">Priming</span><span
                            class="material-chip">Dyeing (MJF)</span><span class="material-chip">Clear
                            Coating</span><span class="material-chip">Metal Plating</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <span class="text-primary small fw-bold text-uppercase">How It Works</span>
                    <h2 class="fw-bold mt-2 mb-4">Your Path to a Physical Part</h2>
                    <div class="svc-steps">
                        <div class="svc-step">
                            <h6>Upload Your 3D Model</h6>
                            <p>Upload STL, STEP, or OBJ files to our portal. Our engine checks for wall thickness and
                                printability.</p>
                        </div>
                        <div class="svc-step">
                            <h6>Configure Your Print</h6>
                            <p>Select your technology (SLA, FDM, or MJF), material, and post-processing options like
                                sanding or painting.</p>
                        </div>
                        <div class="svc-step">
                            <h6>Review & Start Printing</h6>
                            <p>Our engineers perform a final check. Once confirmed, your part is queued on our
                                industrial 3D printers.</p>
                        </div>
                        <div class="svc-step">
                            <h6>Post-Processing & QC</h6>
                            <p>Supports are removed, parts are cured (SLA/MJF), and dimensions are verified against your
                                specifications.</p>
                        </div>
                        <div class="svc-step">
                            <h6>Fast Pan-India Delivery</h6>
                            <p>Your parts are securely packed and shipped via express courier, arriving at your doorstep
                                in 1–3 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg">
                        <img src="assets/img/project-3.png" class="img-fluid w-100" alt="3D Printing Process"
                            style="height: 500px; object-fit: cover;">
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
                        <h2 class="fw-bold text-white mb-2">Print your first prototype today</h2>
                        <p class="text-white-50 mb-0">Upload your STL file and choose your technology, material, and
                            finish. Quotes in 60 seconds, delivery in 24 hours.</p>
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