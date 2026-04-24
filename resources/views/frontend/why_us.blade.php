@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')


    <!-- Page Hero -->
    <section class="page-hero"
        style="background: linear-gradient(135deg, rgba(16,24,32,0.96) 0%, rgba(16,24,32,0.88) 100%), url('assets/img/project-1.png') center/cover no-repeat;">
        <div class="container">
            <nav aria-label="breadcrumb" class="page-breadcrumb mb-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Why ProtoCut</li>
                </ol>
            </nav>
            <div class="page-badge"><i class="bi bi-award-fill"></i> About ProtoCut</div>
            <h1>Why Engineers Choose<br><span style="color:var(--primary-color);">ProtoCut</span></h1>
            <p>India's fastest and most reliable prototype manufacturer since 2018. Trusted by startups, R&D labs, and
                production teams across 170+ countries for precision parts delivered on time, every time.</p>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="why-stat-card text-center">
                        <div class="stat-num">12,400+</div>
                        <div class="stat-label">Parts Delivered</div>
                        <p class="text-muted small mt-2 mb-0">Successfully manufactured and shipped to customers
                            worldwide.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-stat-card text-center">
                        <div class="stat-num">256K+</div>
                        <div class="stat-label">Satisfied Customers</div>
                        <p class="text-muted small mt-2 mb-0">Engineers, designers, and businesses trust ProtoCut for
                            their parts.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-stat-card text-center">
                        <div class="stat-num">170+</div>
                        <div class="stat-label">Countries Served</div>
                        <p class="text-muted small mt-2 mb-0">Global reach with India-speed turnaround and competitive
                            pricing.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-stat-card text-center">
                        <div class="stat-num">99.6%</div>
                        <div class="stat-label">Quality Rating</div>
                        <p class="text-muted small mt-2 mb-0">Based on post-delivery customer satisfaction surveys and
                            re-order rates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary fw-bold text-uppercase small">Our Advantages</span>
                <h2 class="fw-bold mt-2">What Makes ProtoCut Different</h2>
                <p class="text-muted">Six reasons why engineers across India choose ProtoCut for their prototype and
                    production needs.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">24h Lead Time</h5>
                        <p class="text-muted small mb-0">Express manufacturing with 24-hour turnaround for CNC
                            machining, laser cutting, and 3D printing. Order today, ship tomorrow — backed by our
                            on-time delivery guarantee.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-people-fill"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">90+ Professionals</h5>
                        <p class="text-muted small mb-0">A team of 90+ skilled engineers, machinists, and quality
                            specialists with decades of combined experience in precision manufacturing for demanding
                            industries.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">ISO 9001:2015 Certified</h5>
                        <p class="text-muted small mb-0">Our quality management system is certified to ISO 9001:2015,
                            ensuring consistent processes, traceable materials, and documented quality control at every
                            step.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-globe-central-south-asia"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Pan-India Delivery</h5>
                        <p class="text-muted small mb-0">Express delivery to all major cities and Tier 2 towns across
                            India within 1–3 business days. Real-time tracking and GST invoice included with every
                            order.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-file-earmark-code-fill"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">Free DFM Review</h5>
                        <p class="text-muted small mb-0">Every order includes a free Design for Manufacturability
                            review. Our engineers flag potential issues before cutting begins, saving you costly
                            re-spins and delays.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="capability-card h-100">
                        <div class="cap-icon"><i class="bi bi-receipt-cutoff"></i></div>
                        <h5 class="fw-bold mt-3 mb-2">GST Tax Invoice</h5>
                        <p class="text-muted small mb-0">All orders come with a proper GST-compliant tax invoice for
                            seamless input tax credit (ITC) claims. Fully compliant with Indian tax regulations for
                            businesses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="text-primary fw-bold text-uppercase small">Our Story</span>
                    <h2 class="fw-bold mt-2 mb-4">Built in Pune,<br>Serving India & Beyond</h2>
                    <p class="text-muted mb-3">ProtoCut was founded in 2018 in Pune, Maharashtra, by a team of engineers
                        frustrated by long lead times, poor quality, and opaque pricing from traditional machine shops.
                        We set out to build a manufacturing partner that engineers could actually rely on.</p>
                    <p class="text-muted mb-3">Starting with a single CNC machining center and a handful of customers,
                        ProtoCut grew steadily by doing one thing exceptionally well: delivering great parts on time. By
                        2022 we had added 5-axis CNC capability, and by 2024 our MJF 3D printing service expanded our
                        additive manufacturing range to include production-grade nylon parts.</p>
                    <p class="text-muted mb-4">Today, ProtoCut serves 256,000+ customers across India and 170+ countries
                        — from individual engineers building one-off prototypes to startups running production batches.
                        Our mission remains the same: democratize access to precision manufacturing for every Indian
                        innovator, regardless of order size.</p>
                    <a href="index.html" class="btn btn-primary px-4 py-2 fw-bold">Start Your Project</a>
                </div>
                <div class="col-lg-6">
                    <div class="vstack gap-3">
                        <div class="info-card d-flex align-items-center gap-4">
                            <div class="text-primary fw-bold" style="font-size:2rem;min-width:60px;text-align:center;">
                                2018</div>
                            <div>
                                <h6 class="fw-bold mb-1">ProtoCut Founded</h6>
                                <p class="text-muted small mb-0">Started operations in Pune with CNC machining and a
                                    mission to make precision manufacturing accessible to all Indian engineers.</p>
                            </div>
                        </div>
                        <div class="info-card d-flex align-items-center gap-4">
                            <div class="text-primary fw-bold" style="font-size:2rem;min-width:60px;text-align:center;">
                                2020</div>
                            <div>
                                <h6 class="fw-bold mb-1">ISO 9001:2015 Certified</h6>
                                <p class="text-muted small mb-0">Achieved ISO 9001:2015 certification, establishing a
                                    formal quality management system trusted by automotive and aerospace customers.</p>
                            </div>
                        </div>
                        <div class="info-card d-flex align-items-center gap-4">
                            <div class="text-primary fw-bold" style="font-size:2rem;min-width:60px;text-align:center;">
                                2022</div>
                            <div>
                                <h6 class="fw-bold mb-1">5-Axis CNC Added</h6>
                                <p class="text-muted small mb-0">Commissioned our first 5-axis machining center,
                                    enabling complex aerospace and medical device components that were previously
                                    impossible in-house.</p>
                            </div>
                        </div>
                        <div class="info-card d-flex align-items-center gap-4">
                            <div class="text-primary fw-bold" style="font-size:2rem;min-width:60px;text-align:center;">
                                2024</div>
                            <div>
                                <h6 class="fw-bold mb-1">MJF 3D Printing Launched</h6>
                                <p class="text-muted small mb-0">Expanded additive capabilities with HP Multi Jet Fusion
                                    technology for production-grade nylon parts with isotropic mechanical properties.
                                </p>
                            </div>
                        </div>
                        <div class="info-card d-flex align-items-center gap-4">
                            <div class="text-primary fw-bold" style="font-size:2rem;min-width:60px;text-align:center;">
                                2026</div>
                            <div>
                                <h6 class="fw-bold mb-1">256K+ Customers</h6>
                                <p class="text-muted small mb-0">Reached 256,000+ satisfied customers across 170+
                                    countries, cementing ProtoCut's position as India's leading online manufacturer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary fw-bold text-uppercase small">Certifications</span>
                <h2 class="fw-bold mt-2">Recognized & Certified</h2>
                <p class="text-muted">Our certifications demonstrate our commitment to quality, compliance, and
                    continuous improvement.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="cert-badge text-center">
                        <div class="cert-icon"><i class="bi bi-patch-check-fill text-primary"></i></div>
                        <div class="fw-bold mt-2">ISO 9001:2015</div>
                        <div class="text-muted small">Quality Management</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="cert-badge text-center">
                        <div class="cert-icon"><i class="bi bi-shield-check text-primary"></i></div>
                        <div class="fw-bold mt-2">CE Marking</div>
                        <div class="text-muted small">European Compliance</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="cert-badge text-center">
                        <div class="cert-icon"><i class="bi bi-recycle text-primary"></i></div>
                        <div class="fw-bold mt-2">RoHS Compliant</div>
                        <div class="text-muted small">Hazardous Substances</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="cert-badge text-center">
                        <div class="cert-icon"><i class="bi bi-building-fill text-primary"></i></div>
                        <div class="fw-bold mt-2">MSME Registered</div>
                        <div class="text-muted small">Govt of India</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="cert-badge text-center">
                        <div class="cert-icon"><i class="bi bi-receipt text-primary"></i></div>
                        <div class="fw-bold mt-2">GST Registered</div>
                        <div class="text-muted small">Tax Compliant</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="cert-badge text-center">
                        <div class="cert-icon"><i class="bi bi-flag-fill text-primary"></i></div>
                        <div class="fw-bold mt-2">Make in India</div>
                        <div class="text-muted small">Proudly Indian</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary fw-bold text-uppercase small">Our People</span>
                <h2 class="fw-bold mt-2">Meet Our Leadership</h2>
                <p class="text-muted">The experienced team behind ProtoCut's engineering, operations, and quality.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://i.pravatar.cc/300?u=10" alt="Rajiv Sharma" class="team-avatar">
                        <div class="tc-body">
                            <h5 class="fw-bold mb-1">Rajiv Sharma</h5>
                            <div class="text-primary small fw-bold mb-2">Founder & CEO</div>
                            <p class="text-muted small mb-3">15+ years in precision manufacturing. IIT Bombay alumnus
                                with a vision to make advanced manufacturing accessible to every Indian engineer and
                                startup.</p>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-secondary px-2 py-1"><i
                                        class="bi bi-linkedin"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-secondary px-2 py-1"><i
                                        class="bi bi-twitter-x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://i.pravatar.cc/300?u=11" alt="Priya Nair" class="team-avatar">
                        <div class="tc-body">
                            <h5 class="fw-bold mb-1">Priya Nair</h5>
                            <div class="text-primary small fw-bold mb-2">Head of Engineering</div>
                            <p class="text-muted small mb-3">Mechanical engineering expert with deep expertise in CNC
                                programming, DFM analysis, and process optimization for aerospace and medical
                                applications.</p>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-secondary px-2 py-1"><i
                                        class="bi bi-linkedin"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-secondary px-2 py-1"><i
                                        class="bi bi-twitter-x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://i.pravatar.cc/300?u=12" alt="Aditya Kulkarni" class="team-avatar">
                        <div class="tc-body">
                            <h5 class="fw-bold mb-1">Aditya Kulkarni</h5>
                            <div class="text-primary small fw-bold mb-2">Operations Director</div>
                            <p class="text-muted small mb-3">Supply chain and production planning specialist who
                                oversees our 48h order-to-ship pipeline and coordinates logistics with 20+ delivery
                                partners across India.</p>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-secondary px-2 py-1"><i
                                        class="bi bi-linkedin"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-secondary px-2 py-1"><i
                                        class="bi bi-twitter-x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://i.pravatar.cc/300?u=13" alt="Meera Iyer" class="team-avatar">
                        <div class="tc-body">
                            <h5 class="fw-bold mb-1">Meera Iyer</h5>
                            <div class="text-primary small fw-bold mb-2">Quality Manager</div>
                            <p class="text-muted small mb-3">Certified quality engineer who leads our ISO 9001:2015
                                quality system, CMM inspection protocols, and customer satisfaction programs that
                                maintain our 99.6% rating.</p>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-secondary px-2 py-1"><i
                                        class="bi bi-linkedin"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-secondary px-2 py-1"><i
                                        class="bi bi-twitter-x"></i></a>
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
            <div class="quote-cta-banner text-center">
                <h2 class="fw-bold text-white mb-3">Ready to experience the ProtoCut difference?</h2>
                <p class="text-white-50 mb-4 fs-5">Upload your CAD file and get a quote in minutes. No minimum order.
                    Free DFM review included. GST invoice guaranteed.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="index.html" class="btn btn-primary btn-lg px-5 fw-bold"><i
                            class="bi bi-cloud-upload me-2"></i>Upload CAD File</a>
                    <a href="contact.html" class="btn btn-outline-light btn-lg px-5 fw-bold"><i
                            class="bi bi-telephone me-2"></i>Contact Us</a>
                </div>
            </div>
        </div>
    </section>


@endsection