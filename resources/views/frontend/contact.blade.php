@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <nav aria-label="breadcrumb" class="page-breadcrumb mb-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </nav>
            <div class="page-badge"><i class="bi bi-envelope-fill"></i> Get In Touch</div>
            <h1>Let's Talk About<br>Your <span style="color:var(--primary-color);">Project</span></h1>
            <p>Have a question or a part to manufacture? Our engineers are ready — response within 2 hours guaranteed.
            </p>
        </div>
    </section>

    <!-- Contact Info Cards -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info-card text-center">
                        <div class="icon-wrap mx-auto"><i class="bi bi-telephone-fill"></i></div>
                        <h6>Call Us</h6>
                        <p>+91 98765 43210</p>
                        <small>Mon–Sat, 9am–8pm IST</small>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info-card text-center">
                        <div class="icon-wrap mx-auto"><i class="bi bi-envelope-fill"></i></div>
                        <h6>Email Us</h6>
                        <p>hello@protocut.in</p>
                        <small>Reply within 2 hours</small>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info-card text-center">
                        <div class="icon-wrap mx-auto"><i class="bi bi-geo-alt-fill"></i></div>
                        <h6>Visit Us</h6>
                        <p>MIDC, Pune,<br>Maharashtra 411019</p>
                        <small>By appointment only</small>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info-card text-center">
                        <div class="icon-wrap mx-auto"><i class="bi bi-chat-dots-fill"></i></div>
                        <h6>Live Chat</h6>
                        <p>Chat with Engineer</p>
                        <small>24 / 7 available</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form + Info -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 align-items-start">

                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="contact-form-card">
                        <h4 class="fw-bold mb-1">Send Us a Message</h4>
                        <p class="text-muted small mb-4">Fill in the details below and we'll get back to you within 2
                            hours.</p>

                        <!-- Subject Tags -->
                        <div class="mb-4">
                            <label class="form-label">What's this about?</label>
                            <div class="subject-tags">
                                <span class="subject-tag selected">General Enquiry</span>
                                <span class="subject-tag">Get a Quote</span>
                                <span class="subject-tag">Order Support</span>
                                <span class="subject-tag">Technical Help</span>
                                <span class="subject-tag">Bulk / OEM</span>
                                <span class="subject-tag">Partnership</span>
                            </div>
                        </div>

                        <form id="contactForm" novalidate>
                            <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" placeholder="Arjun Mehta" required>
                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Company / Organization</label>
                                    <input type="text" class="form-control" placeholder="Optional">
                                </div>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" placeholder="you@example.com" required>
                                    <div class="invalid-feedback">Please enter a valid email.</div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="+91 98765 43210">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Service Interested In</label>
                                <select class="form-select">
                                    <option value="">Select a service...</option>
                                    <option>CNC Machining (Milling / Turning)</option>
                                    <option>3D Printing (SLA / FDM / MJF)</option>
                                    <option>Laser Cutting</option>
                                    <option>Wire EDM Cutting</option>
                                    <option>Sheet Metal Fabrication</option>
                                    <option>Multiple / Not Sure</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Your Message</label>
                                <textarea class="form-control" rows="5"
                                    placeholder="Describe your project, quantity, material requirements, or any questions you have..."
                                    required></textarea>
                                <div class="invalid-feedback">Please enter a message.</div>
                            </div>

                            <!-- File Upload -->
                            <div class="mb-4">
                                <label class="form-label">Attach CAD File <span class="text-muted fw-normal"
                                        style="text-transform:none;">(optional)</span></label>
                                <div class="border rounded-3 p-3 text-center"
                                    style="border-style:dashed!important;border-color:#d0d5dd!important;background:#fafbfc;cursor:pointer;"
                                    onclick="document.getElementById('fileInput').click()">
                                    <i class="bi bi-cloud-upload fs-3 text-primary mb-2 d-block"></i>
                                    <p class="small text-muted mb-1">Click to upload or drag & drop</p>
                                    <p class="small text-muted mb-0" style="font-size:11px;">STEP, IGES, STL, DXF, DWG —
                                        Max 50MB</p>
                                    <input type="file" id="fileInput" class="d-none"
                                        accept=".step,.stp,.iges,.igs,.stl,.dxf,.dwg,.pdf">
                                </div>
                                <div id="fileName" class="small text-primary mt-2 fw-bold"></div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 fw-bold fs-6">
                                <i class="bi bi-send me-2"></i> Send Message
                            </button>
                        </form>

                        <!-- Success Alert (hidden) -->
                        <div id="successAlert" class="alert mt-4 rounded-3 d-none"
                            style="background:rgba(0,202,114,0.1);border:1.5px solid rgba(0,202,114,0.3);color:#00874c;">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            <strong>Message sent!</strong> Our team will get back to you within 2 hours.
                        </div>
                    </div>
                </div>

                <!-- Info Panel -->
                <div class="col-lg-5">

                    <!-- Map -->
                    <div class="map-wrap mb-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.285749999!2d73.8567!3d18.5204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDMxJzEzLjQiTiA3M8KwNTEnMjQuMSJF!5e0!3m2!1sen!2sin!4v1"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <!-- Business Hours -->
                    <div class="contact-form-card mb-4">
                        <h6 class="fw-bold mb-3 d-flex align-items-center gap-2">
                            <i class="bi bi-clock-fill text-primary"></i> Business Hours
                        </h6>
                        <table class="hours-table">
                            <tr class="today">
                                <td>Monday – Friday</td>
                                <td>9:00 AM – 8:00 PM <span class="badge text-bg-success ms-1"
                                        style="font-size:10px;">Open Now</span></td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>10:00 AM – 6:00 PM</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>Closed</td>
                            </tr>
                            <tr>
                                <td>Online Support</td>
                                <td>24 / 7</td>
                            </tr>
                        </table>
                    </div>

                    <!-- Social -->
                    <div class="contact-form-card">
                        <h6 class="fw-bold mb-3 d-flex align-items-center gap-2">
                            <i class="bi bi-share-fill text-primary"></i> Follow Us
                        </h6>
                        <p class="text-muted small mb-3">Stay updated with new services, project highlights, and
                            engineering tips.</p>
                        <div class="contact-social d-flex gap-2 flex-wrap">
                            <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" title="YouTube"><i class="bi bi-youtube"></i></a>
                            <a href="#" title="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" title="Twitter / X"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="bg-white py-5 border-top border-bottom">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <i class="bi bi-patch-check text-primary fs-3 mb-2 d-block"></i>
                    <h6 class="fw-bold mb-1">GST Ready</h6>
                    <small class="text-muted">Tax invoices for Indian businesses</small>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-globe-central-south-asia text-primary fs-3 mb-2 d-block"></i>
                    <h6 class="fw-bold mb-1">Pan-India Delivery</h6>
                    <small class="text-muted">Fast delivery to all major cities</small>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-shield-check text-primary fs-3 mb-2 d-block"></i>
                    <h6 class="fw-bold mb-1">Safe Payment</h6>
                    <small class="text-muted">Secure & popular payment methods</small>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-headset text-primary fs-3 mb-2 d-block"></i>
                    <h6 class="fw-bold mb-1">24/7 Engineer Support</h6>
                    <small class="text-muted">Real engineers, not bots</small>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')

<script>
    // Subject tag toggle
    document.querySelectorAll('.subject-tag').forEach(tag => {
        tag.addEventListener('click', function () {
            document.querySelectorAll('.subject-tag').forEach(t => t.classList.remove('selected'));
            this.classList.add('selected');
        });
    });

    // File upload label
    document.getElementById('fileInput').addEventListener('change', function () {
        const name = this.files[0] ? this.files[0].name : '';
        document.getElementById('fileName').textContent = name ? '📎 ' + name : '';
    });

    // Form submit
    document.getElementById('contactForm').addEventListener('submit', function (e) {
        e.preventDefault();
        if (!this.checkValidity()) {
            e.stopPropagation();
            this.classList.add('was-validated');
            return;
        }
        // Show success
        const btn = this.querySelector('button[type="submit"]');
        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Sending...';
        btn.disabled = true;
        setTimeout(() => {
            btn.innerHTML = '<i class="bi bi-check-circle me-2"></i> Message Sent!';
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-success');
            document.getElementById('successAlert').classList.remove('d-none');
            document.getElementById('successAlert').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }, 1500);
    });
</script>

@endpush