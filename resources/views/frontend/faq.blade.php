@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <nav aria-label="breadcrumb" class="page-breadcrumb mb-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">FAQ</li>
                </ol>
            </nav>
            <div class="page-badge"><i class="bi bi-patch-question-fill"></i> Help Center</div>
            <h1>Frequently Asked<br><span style="color:var(--primary-color);">Questions</span></h1>
            <p>Everything you need to know about ProtoCut's services, ordering process, materials, and delivery.</p>
        </div>
    </section>

    <!-- FAQ Search -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="faq-search-wrap">
                <i class="bi bi-search"></i>
                <input type="text" id="faqSearch" class="form-control"
                    placeholder="Search your question, e.g. 'tolerances', 'payment', 'delivery'...">
                <button class="btn btn-primary search-btn">Search</button>
            </div>
        </div>
    </section>

    <!-- FAQ Body -->
    <section class="py-5">
        <div class="container">

            <!-- Category Pills -->
            <div class="faq-cat-pills">
                <a href="#" class="faq-cat-pill active" data-cat="all"><i class="bi bi-grid-fill"></i> All Topics</a>
                <a href="#" class="faq-cat-pill" data-cat="general"><i class="bi bi-info-circle-fill"></i> General</a>
                <a href="#" class="faq-cat-pill" data-cat="ordering"><i class="bi bi-cart-fill"></i> Ordering</a>
                <a href="#" class="faq-cat-pill" data-cat="materials"><i class="bi bi-layers-fill"></i> Materials</a>
                <a href="#" class="faq-cat-pill" data-cat="payment"><i class="bi bi-credit-card-fill"></i> Payment</a>
                <a href="#" class="faq-cat-pill" data-cat="shipping"><i class="bi bi-truck"></i> Shipping</a>
                <a href="#" class="faq-cat-pill" data-cat="quality"><i class="bi bi-patch-check-fill"></i> Quality</a>
            </div>

            <div class="row g-5">
                <!-- Main FAQ -->
                <div class="col-lg-8">

                    <!-- General -->
                    <div class="mb-5 faq-group" data-cat="general">
                        <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                            <span
                                style="width:28px;height:28px;background:rgba(0,202,114,0.1);border-radius:8px;display:inline-flex;align-items:center;justify-content:center;">
                                <i class="bi bi-info-circle-fill text-primary" style="font-size:13px;"></i>
                            </span>
                            General
                        </h5>
                        <div class="accordion faq-accordion" id="accordionGeneral">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#g1">
                                        What is ProtoCut and what services do you offer?
                                    </button>
                                </h2>
                                <div id="g1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionGeneral">
                                    <div class="accordion-body">
                                        ProtoCut is India's fastest prototype manufacturing platform, offering
                                        <strong>CNC Machining</strong> (3/4/5-axis milling & turning), <strong>3D
                                            Printing</strong> (SLA, FDM, MJF), <strong>Laser Cutting</strong>,
                                        <strong>Wire EDM Cutting</strong>, and <strong>Sheet Metal Fabrication</strong>.
                                        We serve startups, R&D labs, engineers, and OEM clients across India with quick
                                        turnaround and ISO-certified quality.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#g2">
                                        What is the minimum order quantity (MOQ)?
                                    </button>
                                </h2>
                                <div id="g2" class="accordion-collapse collapse" data-bs-parent="#accordionGeneral">
                                    <div class="accordion-body">
                                        There is <strong>no minimum order quantity</strong> at ProtoCut. We happily
                                        accept single-piece prototype orders as well as bulk production runs of
                                        thousands of parts. Pricing adjusts automatically based on quantity in our
                                        instant quote system.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#g3">
                                        Is ProtoCut ISO certified?
                                    </button>
                                </h2>
                                <div id="g3" class="accordion-collapse collapse" data-bs-parent="#accordionGeneral">
                                    <div class="accordion-body">
                                        Yes. ProtoCut operates under <strong>ISO 9001:2015</strong> certified quality
                                        management processes. Every part goes through dimensional inspection before
                                        shipping, and our in-house engineering team performs a DFM (Design for
                                        Manufacturability) review on every CAD file uploaded.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#g4">
                                        Do you provide NDA / confidentiality agreements?
                                    </button>
                                </h2>
                                <div id="g4" class="accordion-collapse collapse" data-bs-parent="#accordionGeneral">
                                    <div class="accordion-body">
                                        Absolutely. We take IP protection seriously. You can request a signed
                                        <strong>NDA (Non-Disclosure Agreement)</strong> before uploading any design
                                        files. Contact our team at <a href="mailto:legal@protocut.in"
                                            class="text-primary fw-bold text-decoration-none">legal@protocut.in</a> to
                                        initiate the process.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ordering -->
                    <div class="mb-5 faq-group" data-cat="ordering">
                        <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                            <span
                                style="width:28px;height:28px;background:rgba(0,202,114,0.1);border-radius:8px;display:inline-flex;align-items:center;justify-content:center;">
                                <i class="bi bi-cart-fill text-primary" style="font-size:13px;"></i>
                            </span>
                            Ordering
                        </h5>
                        <div class="accordion faq-accordion" id="accordionOrdering">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#o1">
                                        What CAD file formats do you accept?
                                    </button>
                                </h2>
                                <div id="o1" class="accordion-collapse collapse" data-bs-parent="#accordionOrdering">
                                    <div class="accordion-body">
                                        We accept all major CAD formats including <strong>STEP (.stp/.step)</strong>,
                                        <strong>IGES (.igs/.iges)</strong>, <strong>STL</strong>, <strong>DXF</strong>,
                                        <strong>DWG</strong>, <strong>SolidWorks (.sldprt)</strong>, and
                                        <strong>CATIA</strong> files. For 2D laser/wire cutting, DXF is preferred. For
                                        3D printing, STL or STEP are recommended.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#o2">
                                        How does the instant quote system work?
                                    </button>
                                </h2>
                                <div id="o2" class="accordion-collapse collapse" data-bs-parent="#accordionOrdering">
                                    <div class="accordion-body">
                                        Our quoting engine analyzes your CAD file automatically. Simply <strong>upload
                                            your file → select material → choose finish → enter quantity</strong>. The
                                        system calculates machining time, material cost, and finishing charges in under
                                        60 seconds. For complex multi-step parts, our engineers review and confirm the
                                        quote within 2 hours.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#o3">
                                        Can I modify my order after placing it?
                                    </button>
                                </h2>
                                <div id="o3" class="accordion-collapse collapse" data-bs-parent="#accordionOrdering">
                                    <div class="accordion-body">
                                        Modifications are possible <strong>within 2 hours</strong> of placing the order,
                                        before production begins. Log in to your account → go to Orders → select the
                                        order → click "Request Modification". Once production has started, changes
                                        cannot be made to the current order, but you can place a new order.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#o4">
                                        What tolerances can ProtoCut achieve?
                                    </button>
                                </h2>
                                <div id="o4" class="accordion-collapse collapse" data-bs-parent="#accordionOrdering">
                                    <div class="accordion-body">
                                        Standard CNC tolerances are <strong>±0.05mm</strong>. For precision parts
                                        requiring tighter tolerances down to <strong>±0.01mm</strong>, select
                                        "Precision" during order configuration. Surface roughness ranges from Ra 3.2
                                        (as-machined) down to Ra 0.4 (mirror polish). Always include GD&T drawings for
                                        critical features.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Materials -->
                    <div class="mb-5 faq-group" data-cat="materials">
                        <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                            <span
                                style="width:28px;height:28px;background:rgba(0,202,114,0.1);border-radius:8px;display:inline-flex;align-items:center;justify-content:center;">
                                <i class="bi bi-layers-fill text-primary" style="font-size:13px;"></i>
                            </span>
                            Materials
                        </h5>
                        <div class="accordion faq-accordion" id="accordionMaterials">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#m1">
                                        What materials are available for CNC machining?
                                    </button>
                                </h2>
                                <div id="m1" class="accordion-collapse collapse" data-bs-parent="#accordionMaterials">
                                    <div class="accordion-body">
                                        We stock <strong>30+ engineering materials</strong>: <br><br>
                                        <strong>Metals:</strong> Aluminum (6061, 7075, 2024), Stainless Steel (304,
                                        316), Mild Steel, Brass, Copper, Titanium Grade 5, Inconel.<br><br>
                                        <strong>Plastics:</strong> ABS, Nylon (PA6, PA66), Acetal (POM), Polycarbonate,
                                        PEEK, PTFE, UHMWPE, Delrin.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#m2">
                                        What surface finishes are available?
                                    </button>
                                </h2>
                                <div id="m2" class="accordion-collapse collapse" data-bs-parent="#accordionMaterials">
                                    <div class="accordion-body">
                                        Available finishes include: <strong>As Machined</strong> (Ra 3.2), <strong>Bead
                                            Blasting</strong>, <strong>Anodizing</strong> (Type II & III, clear or
                                        colored), <strong>Powder Coating</strong>, <strong>Electroless Nickel
                                            Plating</strong>, <strong>Black Oxide</strong>,
                                        <strong>Passivation</strong>, and <strong>Mirror Polishing</strong>. All
                                        finishes are available directly in the instant quote configurator.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#m3">
                                        Can I request a material not listed on your platform?
                                    </button>
                                </h2>
                                <div id="m3" class="accordion-collapse collapse" data-bs-parent="#accordionMaterials">
                                    <div class="accordion-body">
                                        Yes! Contact our engineering team with the material specification or datasheet.
                                        We can source most engineering-grade materials within <strong>3–5 business
                                            days</strong>. Exotic materials like Hastelloy, Monel, or specialty
                                        composites are handled on a case-by-case basis.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment -->
                    <div class="mb-5 faq-group" data-cat="payment">
                        <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                            <span
                                style="width:28px;height:28px;background:rgba(0,202,114,0.1);border-radius:8px;display:inline-flex;align-items:center;justify-content:center;">
                                <i class="bi bi-credit-card-fill text-primary" style="font-size:13px;"></i>
                            </span>
                            Payment
                        </h5>
                        <div class="accordion faq-accordion" id="accordionPayment">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#p1">
                                        What payment methods do you accept?
                                    </button>
                                </h2>
                                <div id="p1" class="accordion-collapse collapse" data-bs-parent="#accordionPayment">
                                    <div class="accordion-body">
                                        We accept <strong>UPI</strong> (GPay, PhonePe, Paytm), <strong>Net
                                            Banking</strong>, all major <strong>Credit/Debit cards</strong>,
                                        <strong>NEFT/RTGS</strong> bank transfers, and <strong>Purchase Orders
                                            (PO)</strong> for verified business accounts. All payments are secured via
                                        Razorpay's PCI-DSS compliant gateway.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#p2">
                                        Do you provide GST invoices?
                                    </button>
                                </h2>
                                <div id="p2" class="accordion-collapse collapse" data-bs-parent="#accordionPayment">
                                    <div class="accordion-body">
                                        Yes. Every order automatically generates a <strong>GST-compliant tax
                                            invoice</strong> available for download from your account dashboard. Our
                                        GSTIN is <strong>27AABCP1234K1Z5</strong>. Invoices are generated instantly upon
                                        payment confirmation and can be used for ITC (Input Tax Credit) claims.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#p3">
                                        What is your refund and cancellation policy?
                                    </button>
                                </h2>
                                <div id="p3" class="accordion-collapse collapse" data-bs-parent="#accordionPayment">
                                    <div class="accordion-body">
                                        Orders cancelled within <strong>2 hours</strong> of placement (before production
                                        starts) receive a <strong>100% refund</strong>. After production begins,
                                        cancellation is not possible. If parts are defective due to our manufacturing
                                        error, we offer a <strong>free re-run or full refund</strong>. Customer-caused
                                        defects (wrong CAD file, incorrect spec) are not covered.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping -->
                    <div class="mb-5 faq-group" data-cat="shipping">
                        <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                            <span
                                style="width:28px;height:28px;background:rgba(0,202,114,0.1);border-radius:8px;display:inline-flex;align-items:center;justify-content:center;">
                                <i class="bi bi-truck text-primary" style="font-size:13px;"></i>
                            </span>
                            Shipping & Delivery
                        </h5>
                        <div class="accordion faq-accordion" id="accordionShipping">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#s1">
                                        What is the typical lead time?
                                    </button>
                                </h2>
                                <div id="s1" class="accordion-collapse collapse" data-bs-parent="#accordionShipping">
                                    <div class="accordion-body">
                                        <strong>Standard lead time</strong> is 3–5 business days. For simple parts with
                                        <strong>Express processing</strong>, we can deliver in as little as <strong>24
                                            hours</strong> from order confirmation. Lead time depends on part
                                        complexity, material availability, and selected finish. Exact lead time is
                                        always shown on your quote before payment.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#s2">
                                        Which cities do you deliver to?
                                    </button>
                                </h2>
                                <div id="s2" class="accordion-collapse collapse" data-bs-parent="#accordionShipping">
                                    <div class="accordion-body">
                                        We deliver <strong>pan-India</strong> to all major cities and most pin codes via
                                        <strong>BlueDart, FedEx, DHL, and Delhivery</strong>. Priority delivery is
                                        available for metro cities (Delhi, Mumbai, Bangalore, Chennai, Hyderabad, Pune).
                                        Remote areas may have 1–2 additional transit days.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#s3">
                                        How can I track my shipment?
                                    </button>
                                </h2>
                                <div id="s3" class="accordion-collapse collapse" data-bs-parent="#accordionShipping">
                                    <div class="accordion-body">
                                        Once your order ships, you receive an <strong>email + SMS</strong> with the
                                        courier AWB number and a tracking link. You can also track in real-time from
                                        your ProtoCut account dashboard under <strong>Orders → Track Shipment</strong>.
                                        Production progress (In Queue → Machining → QC → Shipped) is also visible in the
                                        dashboard.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quality -->
                    <div class="mb-5 faq-group" data-cat="quality">
                        <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                            <span
                                style="width:28px;height:28px;background:rgba(0,202,114,0.1);border-radius:8px;display:inline-flex;align-items:center;justify-content:center;">
                                <i class="bi bi-patch-check-fill text-primary" style="font-size:13px;"></i>
                            </span>
                            Quality & Inspection
                        </h5>
                        <div class="accordion faq-accordion" id="accordionQuality">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#q1">
                                        What quality inspection do parts go through?
                                    </button>
                                </h2>
                                <div id="q1" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">
                                    <div class="accordion-body">
                                        All parts undergo <strong>3-stage quality control</strong>: (1) First Article
                                        Inspection after initial setup, (2) In-Process inspection at key operations, (3)
                                        Final CMM (Coordinate Measuring Machine) dimensional check before packaging. For
                                        critical orders, we provide a <strong>First Article Inspection Report
                                            (FAIR)</strong> with actual measured dimensions.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#q2">
                                        What if I receive a defective part?
                                    </button>
                                </h2>
                                <div id="q2" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">
                                    <div class="accordion-body">
                                        If parts are defective due to manufacturing error, contact us within <strong>7
                                            days of delivery</strong> with photos/measurements. We will arrange a
                                        <strong>free re-manufacture and re-delivery</strong> at no charge, or issue a
                                        full refund — your choice. Our quality guarantee covers dimensional accuracy,
                                        surface finish, and material correctness.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 80px;">

                        <!-- Popular Topics -->
                        <div class="info-card mb-4">
                            <h6 class="fw-bold mb-3">Popular Topics</h6>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><a href="#"
                                        class="text-decoration-none text-dark d-flex align-items-center gap-2"
                                        style="font-size:13px;"><i class="bi bi-arrow-right-circle text-primary"></i>
                                        How to get an instant quote?</a></li>
                                <li class="mb-2"><a href="#"
                                        class="text-decoration-none text-dark d-flex align-items-center gap-2"
                                        style="font-size:13px;"><i class="bi bi-arrow-right-circle text-primary"></i>
                                        Accepted file formats</a></li>
                                <li class="mb-2"><a href="#"
                                        class="text-decoration-none text-dark d-flex align-items-center gap-2"
                                        style="font-size:13px;"><i class="bi bi-arrow-right-circle text-primary"></i>
                                        CNC tolerance guide</a></li>
                                <li class="mb-2"><a href="#"
                                        class="text-decoration-none text-dark d-flex align-items-center gap-2"
                                        style="font-size:13px;"><i class="bi bi-arrow-right-circle text-primary"></i>
                                        Aluminium 6061 vs 7075</a></li>
                                <li class="mb-2"><a href="#"
                                        class="text-decoration-none text-dark d-flex align-items-center gap-2"
                                        style="font-size:13px;"><i class="bi bi-arrow-right-circle text-primary"></i>
                                        Track your order</a></li>
                                <li><a href="#" class="text-decoration-none text-dark d-flex align-items-center gap-2"
                                        style="font-size:13px;"><i class="bi bi-arrow-right-circle text-primary"></i>
                                        GST invoice download</a></li>
                            </ul>
                        </div>

                        <!-- Contact Quick -->
                        <div class="info-card mb-4"
                            style="background:linear-gradient(135deg,var(--dark-bg),#1c2732);border:none;color:white;">
                            <i class="bi bi-headset fs-2 text-primary mb-3 d-block"></i>
                            <h6 class="fw-bold text-white mb-1">Still need help?</h6>
                            <p class="small mb-3" style="color:rgba(255,255,255,0.6);">Our engineering team is available
                                24/7 to answer your questions.</p>
                            <a href="contact.html" class="btn btn-primary btn-sm w-100 py-2 fw-bold">Contact Support</a>
                        </div>

                        <!-- Quick Stats -->
                        <div class="info-card">
                            <h6 class="fw-bold mb-3">Quick Facts</h6>
                            <div class="d-flex justify-content-between mb-2 small"><span class="text-muted">Questions
                                    answered</span><span class="fw-bold">50+</span></div>
                            <div class="d-flex justify-content-between mb-2 small"><span class="text-muted">Avg.
                                    response time</span><span class="fw-bold text-primary">
                                    < 2 hrs</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2 small"><span class="text-muted">Support
                                    hours</span><span class="fw-bold">24 / 7</span></div>
                            <div class="d-flex justify-content-between small"><span class="text-muted">Customer
                                    satisfaction</span><span class="fw-bold text-primary">99.6%</span></div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="faq-cta-card">
                <h3>Didn't find your answer?</h3>
                <p>Our engineering team is ready to help you with any technical or commercial query.</p>
                <div class="faq-contact-options">
                    <a href="contact.html" class="btn btn-primary px-5 py-3 fw-bold rounded-3">
                        <i class="bi bi-envelope me-2"></i> Send a Message
                    </a>
                    <a href="tel:+911234567890" class="btn btn-outline-light px-5 py-3 fw-bold rounded-3">
                        <i class="bi bi-telephone me-2"></i> Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>
    
@endsection