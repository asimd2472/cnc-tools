@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')

    <!-- Page Hero -->
    <section class="page-hero"
        style="background: linear-gradient(135deg, rgba(16,24,32,0.96) 0%, rgba(16,24,32,0.88) 100%), url('assets/img/project-3.png') center/cover no-repeat;">
        <div class="container">
            <nav aria-label="breadcrumb" class="page-breadcrumb mb-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Shared Projects</li>
                </ol>
            </nav>
            <div class="page-badge"><i class="bi bi-people-fill"></i> Community Showcase</div>
            <h1>Shared Projects<br><span style="color:var(--primary-color);">/ Community Showcase</span></h1>
            <p>Explore real parts made by the ProtoCut community. See how engineers are using CNC machining,<br>3D
                printing, laser cutting, and sheet metal fabrication to bring their ideas to life.</p>
            <div class="d-flex gap-3 flex-wrap mt-4">
                <a href="register.html" class="btn btn-primary btn-lg px-5 fw-bold"><i
                        class="bi bi-upload me-2"></i>Share Your Project</a>
                <a href="index.html" class="btn btn-outline-light btn-lg px-5 fw-bold"><i
                        class="bi bi-tools me-2"></i>Get Parts Made</a>
            </div>
        </div>
    </section>

    <!-- Filter Bar -->
    <div class="projects-filter-bar">
        <div class="container">
            <div class="d-flex flex-wrap gap-2 align-items-center">
                <button class="proj-filter-pill active" data-filter="all">All</button>
                <button class="proj-filter-pill" data-filter="CNC Machining">CNC Machining</button>
                <button class="proj-filter-pill" data-filter="3D Printing">3D Printing</button>
                <button class="proj-filter-pill" data-filter="Laser Cutting">Laser Cutting</button>
                <button class="proj-filter-pill" data-filter="Sheet Metal">Sheet Metal</button>
                <button class="proj-filter-pill" data-filter="Wire Cutting">Wire Cutting</button>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="position-sticky" style="top: 100px;">
                        <div class="upload-proj-cta text-center mb-4">
                            <div class="upload-icon mb-3"><i class="bi bi-cloud-arrow-up-fill"
                                    style="font-size:2.2rem;color:var(--primary-color);"></i></div>
                            <h5 class="fw-bold mb-2">Share Your Project</h5>
                            <p class="text-muted small mb-3">Show the community what you built with ProtoCut. Get
                                feedback, inspire others, and grow your portfolio.</p>
                            <a href="register.html" class="btn btn-primary w-100 fw-bold py-2"><i
                                    class="bi bi-cloud-arrow-up me-2"></i>Upload Project</a>
                        </div>
                        <div class="info-card">
                            <h6 class="fw-bold mb-3">Community Stats</h6>
                            <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                <span class="text-muted small"><i
                                        class="bi bi-folder2-open text-primary me-2"></i>Projects</span>
                                <span class="fw-bold">1,240</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                <span class="text-muted small"><i
                                        class="bi bi-people-fill text-primary me-2"></i>Members</span>
                                <span class="fw-bold">45K</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <span class="text-muted small"><i class="bi bi-eye-fill text-primary me-2"></i>Total
                                    Views</span>
                                <span class="fw-bold">3.2M</span>
                            </div>
                        </div>
                        <div class="info-card mt-3">
                            <h6 class="fw-bold mb-3">Popular Tags</h6>
                            <div class="proj-tags">
                                <span class="proj-tag">Aluminum</span>
                                <span class="proj-tag">5-Axis</span>
                                <span class="proj-tag">FDM</span>
                                <span class="proj-tag">SLA</span>
                                <span class="proj-tag">Stainless</span>
                                <span class="proj-tag">Aerospace</span>
                                <span class="proj-tag">Robotics</span>
                                <span class="proj-tag">Medical</span>
                                <span class="proj-tag">EDM</span>
                                <span class="proj-tag">Powder Coat</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Grid -->
                <div class="col-lg-9">
                    <div class="row g-4" id="projectGrid">

                        <!-- Project 1 -->
                        <div class="col-md-4 proj-card-wrap" data-category="CNC Machining">
                            <a href="project-details.html" class="text-decoration-none text-dark">
                                <div class="proj-card h-100">
                                    <div class="proj-img-wrap">
                                        <img src="assets/img/project-1.png" alt="5-Axis CNC Aluminum Bracket">
                                        <span class="proj-category">CNC Machining</span>
                                    </div>
                                    <div class="proj-body">
                                        <h6 class="fw-bold mb-2">5-Axis CNC Aluminum Bracket</h6>
                                        <div class="proj-tags mb-3">
                                            <span class="proj-tag">Aluminum 7075</span>
                                            <span class="proj-tag">5-Axis</span>
                                            <span class="proj-tag">Aerospace</span>
                                        </div>
                                        <p class="text-muted small mb-0">High-strength 7075 aluminum structural bracket
                                            machined on 5-axis for an aerospace application. Complex undercut geometry
                                            achieved in a single setup.</p>
                                    </div>
                                    <div class="proj-footer">
                                        <div class="proj-author">
                                            <img src="https://i.pravatar.cc/300?u=1" alt="Arjun M.">
                                            <span>Arjun M.</span>
                                        </div>
                                        <div class="proj-stats">
                                            <span><i class="bi bi-eye"></i> 13K</span>
                                            <span><i class="bi bi-heart-fill"></i> 450</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Project 2 -->
                        <div class="col-md-4 proj-card-wrap" data-category="CNC Machining">
                            <div class="proj-card h-100">
                                <div class="proj-img-wrap">
                                    <img src="assets/img/project-2.png" alt="Robotic Arm Joint Assembly">
                                    <span class="proj-category">CNC Machining</span>
                                </div>
                                <div class="proj-body">
                                    <h6 class="fw-bold mb-2">Robotic Arm Joint Assembly</h6>
                                    <div class="proj-tags mb-3">
                                        <span class="proj-tag">Stainless 304</span>
                                        <span class="proj-tag">Turning</span>
                                    </div>
                                    <p class="text-muted small mb-0">Precision-turned stainless steel joint components
                                        for a collaborative robotic arm. Tight bore tolerances ensured smooth
                                        articulation and zero backlash.</p>
                                </div>
                                <div class="proj-footer">
                                    <div class="proj-author">
                                        <img src="https://i.pravatar.cc/300?u=2" alt="Priya S.">
                                        <span>Priya S.</span>
                                    </div>
                                    <div class="proj-stats">
                                        <span><i class="bi bi-eye"></i> 3.5K</span>
                                        <span><i class="bi bi-heart-fill"></i> 890</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 3 -->
                        <div class="col-md-4 proj-card-wrap" data-category="3D Printing">
                            <div class="proj-card h-100">
                                <div class="proj-img-wrap">
                                    <img src="assets/img/project-3.png" alt="IoT Enclosure FDM Print">
                                    <span class="proj-category">3D Printing</span>
                                </div>
                                <div class="proj-body">
                                    <h6 class="fw-bold mb-2">IoT Enclosure FDM Print</h6>
                                    <div class="proj-tags mb-3">
                                        <span class="proj-tag">ABS</span>
                                        <span class="proj-tag">FDM</span>
                                        <span class="proj-tag">Electronics</span>
                                    </div>
                                    <p class="text-muted small mb-0">Custom ABS enclosure for an IoT sensor board with
                                        integrated cable management channels, snap-fit lid, and antenna window — printed
                                        and assembled in 48 hours.</p>
                                </div>
                                <div class="proj-footer">
                                    <div class="proj-author">
                                        <img src="https://i.pravatar.cc/300?u=3" alt="Tanmay K.">
                                        <span>Tanmay K.</span>
                                    </div>
                                    <div class="proj-stats">
                                        <span><i class="bi bi-eye"></i> 2.1K</span>
                                        <span><i class="bi bi-heart-fill"></i> 320</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 4 -->
                        <div class="col-md-4 proj-card-wrap" data-category="Laser Cutting">
                            <div class="proj-card h-100">
                                <div class="proj-img-wrap">
                                    <img src="assets/img/project-1.png" alt="Custom Laser Cut Panel">
                                    <span class="proj-category">Laser Cutting</span>
                                </div>
                                <div class="proj-body">
                                    <h6 class="fw-bold mb-2">Custom Laser Cut Panel</h6>
                                    <div class="proj-tags mb-3">
                                        <span class="proj-tag">Mild Steel</span>
                                        <span class="proj-tag">Fiber Laser</span>
                                    </div>
                                    <p class="text-muted small mb-0">Decorative perforated mild steel panel with custom
                                        geometric pattern cut on fiber laser. Used as architectural screen for a
                                        commercial interior installation in Mumbai.</p>
                                </div>
                                <div class="proj-footer">
                                    <div class="proj-author">
                                        <img src="https://i.pravatar.cc/300?u=4" alt="Rahul D.">
                                        <span>Rahul D.</span>
                                    </div>
                                    <div class="proj-stats">
                                        <span><i class="bi bi-eye"></i> 1.8K</span>
                                        <span><i class="bi bi-heart-fill"></i> 210</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 5 -->
                        <div class="col-md-4 proj-card-wrap" data-category="Sheet Metal">
                            <div class="proj-card h-100">
                                <div class="proj-img-wrap">
                                    <img src="assets/img/project-2.png" alt="Sheet Metal Control Box">
                                    <span class="proj-category">Sheet Metal</span>
                                </div>
                                <div class="proj-body">
                                    <h6 class="fw-bold mb-2">Sheet Metal Control Box</h6>
                                    <div class="proj-tags mb-3">
                                        <span class="proj-tag">Galvanized Steel</span>
                                        <span class="proj-tag">Powder Coat</span>
                                    </div>
                                    <p class="text-muted small mb-0">Galvanized steel electrical control box fabricated
                                        with CNC bending, TIG-welded corners, and powder-coated in RAL 7035 for an
                                        industrial automation project.</p>
                                </div>
                                <div class="proj-footer">
                                    <div class="proj-author">
                                        <img src="https://i.pravatar.cc/300?u=5" alt="Sneha P.">
                                        <span>Sneha P.</span>
                                    </div>
                                    <div class="proj-stats">
                                        <span><i class="bi bi-eye"></i> 4.2K</span>
                                        <span><i class="bi bi-heart-fill"></i> 560</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 6 -->
                        <div class="col-md-4 proj-card-wrap" data-category="3D Printing">
                            <div class="proj-card h-100">
                                <div class="proj-img-wrap">
                                    <img src="assets/img/project-3.png" alt="SLA Dental Model">
                                    <span class="proj-category">3D Printing</span>
                                </div>
                                <div class="proj-body">
                                    <h6 class="fw-bold mb-2">SLA Dental Model</h6>
                                    <div class="proj-tags mb-3">
                                        <span class="proj-tag">Dental Resin</span>
                                        <span class="proj-tag">SLA</span>
                                    </div>
                                    <p class="text-muted small mb-0">High-accuracy SLA dental model printed from
                                        intraoral scan data for orthodontic study and appliance fabrication. Layer
                                        resolution 25μm for clinical accuracy.</p>
                                </div>
                                <div class="proj-footer">
                                    <div class="proj-author">
                                        <img src="https://i.pravatar.cc/300?u=6" alt="Dr. Amit R.">
                                        <span>Dr. Amit R.</span>
                                    </div>
                                    <div class="proj-stats">
                                        <span><i class="bi bi-eye"></i> 5.8K</span>
                                        <span><i class="bi bi-heart-fill"></i> 1.2K</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 7 -->
                        <div class="col-md-4 proj-card-wrap" data-category="Wire Cutting">
                            <div class="proj-card h-100">
                                <div class="proj-img-wrap">
                                    <img src="assets/img/project-1.png" alt="Precision EDM Die Set">
                                    <span class="proj-category">Wire Cutting</span>
                                </div>
                                <div class="proj-body">
                                    <h6 class="fw-bold mb-2">Precision EDM Die Set</h6>
                                    <div class="proj-tags mb-3">
                                        <span class="proj-tag">D2 Tool Steel</span>
                                        <span class="proj-tag">EDM</span>
                                    </div>
                                    <p class="text-muted small mb-0">Matched punch and die set in D2 hardened tool steel
                                        (62 HRC) for a progressive stamping tool. Wire EDM used for ±0.003mm matched
                                        clearance throughout.</p>
                                </div>
                                <div class="proj-footer">
                                    <div class="proj-author">
                                        <img src="https://i.pravatar.cc/300?u=7" alt="Kiran B.">
                                        <span>Kiran B.</span>
                                    </div>
                                    <div class="proj-stats">
                                        <span><i class="bi bi-eye"></i> 920</span>
                                        <span><i class="bi bi-heart-fill"></i> 145</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 8 -->
                        <div class="col-md-4 proj-card-wrap" data-category="3D Printing">
                            <div class="proj-card h-100">
                                <div class="proj-img-wrap">
                                    <img src="assets/img/project-2.png" alt="Carbon Fiber Look FDM Enclosure">
                                    <span class="proj-category">3D Printing</span>
                                </div>
                                <div class="proj-body">
                                    <h6 class="fw-bold mb-2">Carbon Fiber Look FDM Enclosure</h6>
                                    <div class="proj-tags mb-3">
                                        <span class="proj-tag">Carbon PLA</span>
                                        <span class="proj-tag">FDM</span>
                                    </div>
                                    <p class="text-muted small mb-0">Lightweight carbon fibre-filled PLA enclosure for a
                                        drone electronics module. Printed with 0.2mm layer height and post-processed to
                                        achieve a premium matte finish.</p>
                                </div>
                                <div class="proj-footer">
                                    <div class="proj-author">
                                        <img src="https://i.pravatar.cc/300?u=8" alt="Neha V.">
                                        <span>Neha V.</span>
                                    </div>
                                    <div class="proj-stats">
                                        <span><i class="bi bi-eye"></i> 3.1K</span>
                                        <span><i class="bi bi-heart-fill"></i> 430</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 9 -->
                        <div class="col-md-4 proj-card-wrap" data-category="CNC Machining">
                            <div class="proj-card h-100">
                                <div class="proj-img-wrap">
                                    <img src="assets/img/project-3.png" alt="Aluminum Heat Sink CNC">
                                    <span class="proj-category">CNC Machining</span>
                                </div>
                                <div class="proj-body">
                                    <h6 class="fw-bold mb-2">Aluminum Heat Sink CNC</h6>
                                    <div class="proj-tags mb-3">
                                        <span class="proj-tag">Aluminum 6061</span>
                                        <span class="proj-tag">Anodized</span>
                                    </div>
                                    <p class="text-muted small mb-0">High-performance extruded aluminum 6061 heat sink
                                        machined with optimized fin geometry for an EV power electronics module.
                                        Hard-anodized for corrosion resistance.</p>
                                </div>
                                <div class="proj-footer">
                                    <div class="proj-author">
                                        <img src="https://i.pravatar.cc/300?u=9" alt="Vijay M.">
                                        <span>Vijay M.</span>
                                    </div>
                                    <div class="proj-stats">
                                        <span><i class="bi bi-eye"></i> 7.3K</span>
                                        <span><i class="bi bi-heart-fill"></i> 890</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /#projectGrid -->

                    <!-- No Results Message -->
                    <div id="noResultsMsg" class="text-center py-5 d-none">
                        <div class="text-muted mb-3" style="font-size:3rem;"><i class="bi bi-search"></i></div>
                        <h5 class="fw-bold mb-2">No projects found</h5>
                        <p class="text-muted">No projects match the selected category. Try a different filter or <a
                                href="register.html" class="text-primary">be the first to share one!</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="py-5">
        <div class="container">
            <div class="quote-cta-banner text-center">
                <h2 class="fw-bold text-white mb-3">Have a project to share?</h2>
                <p class="text-white-50 mb-4 fs-5">Join 45,000+ engineers sharing their ProtoCut projects. Inspire the
                    community and get your work seen by thousands of makers and manufacturers.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="register.html" class="btn btn-primary btn-lg px-5 fw-bold"><i
                            class="bi bi-cloud-arrow-up me-2"></i>Upload Your Project</a>
                    <a href="index.html" class="btn btn-outline-light btn-lg px-5 fw-bold"><i
                            class="bi bi-tools me-2"></i>Get Parts Made</a>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('scripts')
    <script>
        (function () {
            var searchInput = document.querySelector('.navbar-search-input');
            var filterPills = document.querySelectorAll('.proj-filter-pill');
            var projectCards = document.querySelectorAll('.proj-card-wrap');
            var noResultsMsg = document.getElementById('noResultsMsg');

            function filterProjects() {
                var searchTerm = searchInput.value.toLowerCase().trim();
                var activeFilter = document.querySelector('.proj-filter-pill.active').getAttribute('data-filter');
                var visibleCount = 0;

                projectCards.forEach(function (card) {
                    var title = card.querySelector('h6').textContent.toLowerCase();
                    var category = card.getAttribute('data-category');

                    var matchesSearch = title.includes(searchTerm);
                    var matchesFilter = (activeFilter === 'all' || category === activeFilter);

                    if (matchesSearch && matchesFilter) {
                        card.style.display = '';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (visibleCount === 0) {
                    noResultsMsg.classList.remove('d-none');
                } else {
                    noResultsMsg.classList.add('d-none');
                }
            }

            // Search event
            if (searchInput) {
                searchInput.addEventListener('input', filterProjects);
            }

            // Filter pill event
            filterPills.forEach(function (pill) {
                pill.addEventListener('click', function () {
                    filterPills.forEach(function (p) { p.classList.remove('active'); });
                    pill.classList.add('active');
                    filterProjects();
                });
            });
        })();
    </script>
@endpush