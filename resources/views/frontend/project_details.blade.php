@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')

    <!-- Page Breadcrumbs & Hero -->
    <section class="py-4 bg-light border-bottom">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumb-light">
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="shared-projects.html">Shared Projects</a></li>
                    <li class="breadcrumb-item active">5-Axis CNC Aluminum Bracket</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between align-items-end flex-wrap gap-3">
                <div>
                    <h1 class="fw-bold mb-2">5-Axis CNC Aluminum Bracket</h1>
                    <div class="proj-tags">
                        <span class="proj-tag">CNC Machining</span>
                        <span class="proj-tag">Aluminum 7075</span>
                        <span class="proj-tag">Aerospace</span>
                    </div>
                </div>
                <div>
                    <a href="#" class="btn btn-outline-secondary btn-sm fw-bold rounded-pill"><i
                            class="bi bi-heart me-2"></i>
                        242 Likes</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm fw-bold rounded-pill ms-2"><i
                            class="bi bi-share me-2"></i> Share</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Details Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Left Column: Media & Content -->
                <div class="col-lg-8">
                    <!-- Gallery -->
                    <div class="mb-5">
                        <img src="assets/img/project-1.png" alt="5-Axis CNC Bracket Main Angle"
                            class="proj-gallery-main">
                        <div class="row g-2">
                            <div class="col-4"><img src="assets/img/project-1.png" alt="Thumb 1"
                                    class="proj-gallery-thumb active"></div>
                            <div class="col-4"><img src="assets/img/project-2.png" alt="Thumb 2"
                                    class="proj-gallery-thumb"></div>
                            <div class="col-4"><img src="assets/img/project-3.png" alt="Thumb 3"
                                    class="proj-gallery-thumb"></div>
                        </div>
                    </div>

                    <!-- Story & Tech Details -->
                    <h3 class="fw-bold mb-3">About the Project</h3>
                    <p class="text-muted mb-4 fs-5">This bracket was designed as part of a drone payload delivery
                        system, requiring an extreme strength-to-weight ratio and highly complex pocketing that could
                        only be efficiently achieved on a 5-axis mill.</p>

                    <h4 class="fw-bold mb-3">The Challenge</h4>
                    <p class="text-muted mb-4">The drone carries varying load masses depending on the package, shifting
                        its center of gravity. We needed a mounting bracket that was incredibly stiff, but we couldn't
                        use steel due to the harsh weight constraints of the drone battery limits. The geometry included
                        severe undercuts and non-orthogonal features.</p>

                    <h4 class="fw-bold mb-3">The Solution</h4>
                    <p class="text-muted mb-5">We opted for <strong>Aluminum 7075-T6</strong>, which provides the yield
                        strength of many steels but at a fraction of the weight. By utilizing ProtoCut's 5-axis
                        continuous CNC milling service, we were able to machine the entire part in a single setup. This
                        eliminated the tolerance stacking issues we saw in earlier 3-axis revisions and reduced the
                        manufacturing turnaround time from 2 weeks down to just 3 days.</p>

                    <!-- Feedback -->
                    <div class="bg-light rounded-4 p-4 mb-5 border border-secondary border-opacity-10">
                        <h5 class="fw-bold mb-3"><i class="bi bi-chat-quote-fill text-primary me-2"></i> Creator
                            Feedback</h5>
                        <p class="text-muted fst-italic mb-0">"The surface finish out of the box was flawless. The bead
                            blast removed all the tool marks and the dimensional accuracy on the critical mating bores
                            was within 0.005mm of nominal. Will definitely be using ProtoCut for the final production
                            batch."</p>
                    </div>
                </div>

                <!-- Right Column: Sidebar Specs -->
                <div class="col-lg-4">
                    <div class="position-sticky" style="top: 100px;">

                        <!-- Uploader / Author Card -->
                        <div class="author-card mb-4">
                            <img src="https://i.pravatar.cc/150?u=a042581f4e29026704d" alt="Alex Mercer">
                            <h5 class="fw-bold mb-1">Alex Mercer</h5>
                            <p class="text-muted small mb-3">Aerospace Robotics Engineer</p>
                            <a href="profile.html"
                                class="btn btn-sm btn-outline-secondary fw-bold w-100 rounded-pill"><i
                                    class="bi bi-person me-2"></i>View
                                Profile</a>
                        </div>

                        <!-- Tech Specs Card -->
                        <div class="info-card mb-4">
                            <h5 class="fw-bold mb-4 border-bottom pb-3">ProtoCut Manufacturing Specs</h5>
                            <table class="table table-borderless proj-spec-table mb-0">
                                <tbody>
                                    <tr>
                                        <th>Process</th>
                                        <td class="text-end">5-Axis CNC Milling</td>
                                    </tr>
                                    <tr>
                                        <th>Material</th>
                                        <td class="text-end">Aluminum 7075-T6</td>
                                    </tr>
                                    <tr>
                                        <th>Finish</th>
                                        <td class="text-end">Standard Bead Blast</td>
                                    </tr>
                                    <tr>
                                        <th>Quantity</th>
                                        <td class="text-end">4 units</td>
                                    </tr>
                                    <tr>
                                        <th>Tolerance</th>
                                        <td class="text-end">ISO 2768-m</td>
                                    </tr>
                                    <tr>
                                        <th>Turnaround</th>
                                        <td class="text-end">3 Days (Express)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Call to Action -->
                        <div
                            class="bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-4 p-4 text-center">
                            <div class="text-primary fw-bold mb-2"><i class="bi bi-lightning-charge-fill me-1"></i> Make
                                it real</div>
                            <h5 class="fw-bold mb-3">Need a similar part?</h5>
                            <a href="index.html" class="btn btn-primary w-100 fw-bold py-2"><i
                                    class="bi bi-cloud-upload me-2"></i> Upload CAD & Get Quote</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More from the network -->
    <section class="py-5 bg-light border-top border-bottom">
        <div class="container">
            <h4 class="fw-bold mb-4">More Built by the Community</h4>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <a href="project-details.html" class="text-decoration-none text-dark">
                        <div class="proj-card h-100">
                            <img src="assets/img/project-2.png" alt="Laser Cut Steel Enclosure"
                                class="proj-card-img-top">
                            <div class="p-3">
                                <h6 class="fw-bold mb-1">Sheet Metal PSU Enclosure</h6>
                                <p class="text-muted small mb-0">Laser Cut • Powder Coated</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="project-details.html" class="text-decoration-none text-dark">
                        <div class="proj-card h-100">
                            <img src="assets/img/project-3.png" alt="MJF Nylon Drone Arm" class="proj-card-img-top">
                            <div class="p-3">
                                <h6 class="fw-bold mb-1">MJF Drone Landing Gear</h6>
                                <p class="text-muted small mb-0">3D Printing • Nylon PA12</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="project-details.html" class="text-decoration-none text-dark">
                        <div class="proj-card h-100">
                            <img src="assets/img/project-4.png" alt="Wire EDM Gear" class="proj-card-img-top">
                            <div class="p-3">
                                <h6 class="fw-bold mb-1">Precision Hardened Gear</h6>
                                <p class="text-muted small mb-0">Wire EDM • Tool Steel</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="project-details.html" class="text-decoration-none text-dark">
                        <div class="proj-card h-100">
                            <img src="assets/img/project-5.png" alt="CNC Turned Titanium" class="proj-card-img-top">
                            <div class="p-3">
                                <h6 class="fw-bold mb-1">Custom Impeller Shaft</h6>
                                <p class="text-muted small mb-0">CNC Turning • Titanium</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')


@endpush