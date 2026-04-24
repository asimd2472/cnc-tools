@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')

<!-- Profile Hero -->
    <section class="profile-hero">
        <div class="container text-center">
            <h1 class="fw-bold mb-2">Alex Mercer</h1>
            <p class="text-white-50 fs-5 mb-0">Aerospace Robotics Engineer • Mumbai, India</p>
        </div>
    </section>

    <!-- Header Avatar & Stats Section -->
    <section class="author-stats-bar">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-2 text-center text-lg-start">
                    <img src="https://i.pravatar.cc/150?u=a042581f4e29026704d" alt="Alex Mercer"
                        class="profile-avatar-xl">
                </div>
                <div class="col-lg-6 py-3 py-lg-0">
                    <div class="d-flex justify-content-center justify-content-lg-start gap-4">
                        <div class="stat-item">
                            <span class="stat-value">24</span>
                            <span class="stat-label">Projects</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-value">1.2K</span>
                            <span class="stat-label">Likes</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-value">850</span>
                            <span class="stat-label">Followers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-value">Nov '24</span>
                            <span class="stat-label">Joined</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end pb-3">
                    <button class="btn btn-primary px-4 fw-bold rounded-pill me-2"><i
                            class="bi bi-person-plus-fill me-2"></i>Follow</button>
                    <button class="btn btn-outline-secondary px-4 fw-bold rounded-pill"><i
                            class="bi bi-chat-dots me-2"></i>Message</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">

                <!-- Left: Project Gallery -->
                <div class="col-lg-8">
                    <div class="d-flex border-bottom mb-4 nav nav-tabs border-0" id="profileTabs" role="tablist">
                        <button class="profile-tab active border-0 bg-transparent" id="projects-tab"
                            data-bs-toggle="tab" data-bs-target="#shared-projects" type="button" role="tab">Shared
                            Projects <span class="count">24</span></button>
                        <button class="profile-tab border-0 bg-transparent" id="about-tab" data-bs-toggle="tab"
                            data-bs-target="#about" type="button" role="tab">About</button>
                        <button class="profile-tab border-0 bg-transparent" id="collections-tab" data-bs-toggle="tab"
                            data-bs-target="#collections" type="button" role="tab">Collections <span
                                class="count">3</span></button>
                    </div>

                    <div class="tab-content">
                        <div id="shared-projects" class="tab-pane fade show active" role="tabpanel">
                            <div class="row g-4">
                                <!-- Project 1 -->
                                <div class="col-md-6 proj-card-wrap">
                                    <a href="project-details.html" class="text-decoration-none text-dark">
                                        <div class="proj-card h-100">
                                            <img src="assets/img/project-1.png" alt="Drone Bracket"
                                                class="proj-card-img-top">
                                            <div class="p-3">
                                                <h6 class="fw-bold mb-1">5-Axis Drone Payload Bracket</h6>
                                                <p class="text-muted small mb-3">CNC Machining • Aluminum 7075</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge bg-light text-dark fw-normal"><i
                                                            class="bi bi-heart-fill text-danger me-1"></i> 242</span>
                                                    <span class="text-primary small fw-bold">View Case Study <i
                                                            class="bi bi-arrow-right"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Project 2 -->
                                <div class="col-md-6 proj-card-wrap">
                                    <a href="project-details.html" class="text-decoration-none text-dark">
                                        <div class="proj-card h-100">
                                            <img src="assets/img/project-2.png" alt="Robotic Gripper"
                                                class="proj-card-img-top">
                                            <div class="p-3">
                                                <h6 class="fw-bold mb-1">High-Precision Robotic Gripper</h6>
                                                <p class="text-muted small mb-3">CNC Milling • Stainless Steel</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge bg-light text-dark fw-normal"><i
                                                            class="bi bi-heart-fill text-danger me-1"></i> 189</span>
                                                    <span class="text-primary small fw-bold">View Case Study <i
                                                            class="bi bi-arrow-right"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Project 3 -->
                                <div class="col-md-6 proj-card-wrap">
                                    <a href="project-details.html" class="text-decoration-none text-dark">
                                        <div class="proj-card h-100">
                                            <img src="assets/img/project-3.png" alt="SLA Micro Fluidics"
                                                class="proj-card-img-top">
                                            <div class="p-3">
                                                <h6 class="fw-bold mb-1">SLA Micro Fluidics Prototype</h6>
                                                <p class="text-muted small mb-3">3D Printing • Clear Resin</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge bg-light text-dark fw-normal"><i
                                                            class="bi bi-heart-fill text-danger me-1"></i> 312</span>
                                                    <span class="text-primary small fw-bold">View Case Study <i
                                                            class="bi bi-arrow-right"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div id="about" class="tab-pane fade" role="tabpanel">
                            <div class="sidebar-card">
                                <h6 class="fw-bold">About Alex Mercer</h6>
                                <p class="text-muted">Aerospace Robotics Engineer with 8+ years of experience in rapid
                                    prototyping and mechanical design. Specializing in high-precision CNC machining and
                                    advanced 3D printing technologies for aerospace applications.</p>
                                <hr class="my-4 opacity-5">
                                <h6 class="mb-3 fw-bold">Work Experience</h6>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">Lead Hardware Engineer</div>
                                        <span class="text-muted small">2020 - Present</span>
                                    </div>
                                    <div class="text-primary small">Mumbai Aerospace Research</div>
                                </div>
                                <div class="mb-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">Senior Prototyping Specialist</div>
                                        <span class="text-muted small">2016 - 2020</span>
                                    </div>
                                    <div class="text-primary small">TechFab Innovations</div>
                                </div>
                            </div>
                        </div>

                        <div id="collections" class="tab-pane fade" role="tabpanel">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="sidebar-card p-0 overflow-hidden h-100">
                                        <img src="assets/img/project-3.png" class="w-100"
                                            style="height: 160px; object-fit: cover;">
                                        <div class="p-3">
                                            <div class="fw-bold">Aerospace Components</div>
                                            <div class="text-muted small">12 Projects • Public</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sidebar-card p-0 overflow-hidden h-100">
                                        <img src="assets/img/project-2.png" class="w-100"
                                            style="height: 160px; object-fit: cover;">
                                        <div class="p-3">
                                            <div class="fw-bold">CNC Masterpieces</div>
                                            <div class="text-muted small">8 Projects • Private</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- tab-content ends -->
                </div> <!-- col-lg-8 ends -->

                <!-- Right: Profile Info -->
                <div class="col-lg-4">
                    <div class="sidebar-card">
                        <h6 class="fw-bold">Technical Skills</h6>
                        <div class="skill-badges">
                            <span class="skill-badge">SolidWorks</span>
                            <span class="skill-badge">Fusion 360</span>
                            <span class="skill-badge">5-Axis Milling</span>
                            <span class="skill-badge">SLA 3D Printing</span>
                            <span class="skill-badge">DFM Analysis</span>
                            <span class="skill-badge">Titanium Machining</span>
                        </div>
                    </div>

                    <div class="sidebar-card">
                        <h6 class="fw-bold">Professional Impact</h6>
                        <div class="impact-row">
                            <span class="label">Collaborations</span>
                            <span class="value">12</span>
                        </div>
                        <div class="impact-row">
                            <span class="label">Manufacturer Rating</span>
                            <span class="value text-primary">4.9/5</span>
                        </div>
                        <div class="impact-row">
                            <span class="label">Member Tier</span>
                            <span class="value text-warning"><i class="bi bi-star-fill me-1"></i> Gold
                                Contributor</span>
                        </div>
                    </div>

                    <div class="sidebar-card">
                        <h6 class="fw-bold">Social Links</h6>
                        <div class="profile-social-group">
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-globe"></i></a>
                            <a href="#"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection