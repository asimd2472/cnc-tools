<!-- Main Footer -->
    <footer>
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <h5 class="fw-bold">Stay Connected</h5>
                    <div class="social-links mb-4">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                    <div class="small text-white-50">
                        <p class="mb-3">Subscribe to our newsletter for updates</p>
                        <div class="input-group">
                            <input type="email" class="form-control bg-dark border-secondary text-white small"
                                placeholder="Email address">
                            <button class="btn btn-primary"><i class="bi bi-send"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Capabilities Section -->
                <div class="col-lg-3 col-sm-6">
                    <h5 class="fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#footerCaps"
                        aria-expanded="false">
                        Capabilities
                    </h5>
                    <div class="collapse" id="footerCaps">
                        <ul class="list-unstyled pt-2 pt-lg-0">
                            <li><a href="{{url('/cnc-machining')}}" class="text-decoration-none">CNC Machining</a></li>
                            <li><a href="{{url('/3d-printing')}}" class="text-decoration-none">3D Printing</a></li>
                            <li><a href="{{url('/laser-cutting')}}" class="text-decoration-none">Laser Cutting</a></li>
                            <li><a href="{{url('/sheet-metal')}}" class="text-decoration-none">Sheet Metal</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Support Section -->
                <div class="col-lg-3 col-sm-6">
                    <h5 class="fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#footerSupport"
                        aria-expanded="false">
                        Support
                    </h5>
                    <div class="collapse" id="footerSupport">
                        <ul class="list-unstyled pt-2 pt-lg-0">
                            <li><a href="{{url('/faq')}}" class="text-decoration-none">Help Center</a></li>
                            <li><a href="{{url('/contact')}}" class="text-decoration-none">Contact Us</a></li>
                            <li><a href="#" class="text-decoration-none">Shipping Policy</a></li>
                            <li><a href="faq.html" class="text-decoration-none">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Company Section -->
                <div class="col-lg-3 col-sm-6">
                    <h5 class="fw-bold collapsed" data-bs-toggle="collapse" data-bs-target="#footerWhy"
                        aria-expanded="false">
                        Why ProtoCut
                    </h5>
                    <div class="collapse" id="footerWhy">
                        <ul class="list-unstyled pt-2 pt-lg-0">
                            <li><a href="{{url('/why-us')}}" class="text-decoration-none">About Us</a></li>
                            <li><a href="{{url('/why-us')}}" class="text-decoration-none">Quality Guarantee</a></li>
                            <li><a href="#" class="text-decoration-none">Privacy Policy</a></li>
                            <li><a href="#" class="text-decoration-none">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center pt-5 mt-5 border-top border-secondary  text-white-50">
                <p class="small mb-0">© 2026 ProtoCut India. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0">
                    <div class="d-flex justify-content-end mb-2">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow-lg">
                        <iframe id="videoIframe" src="https://www.youtube.com/embed/4rvmiJZl4bk?si=fdQJ1GO-GFAMKQPc"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <!-- Mobile Bottom Navigation -->
    <nav class="mobile-bottom-nav d-none">
        <a href="{{url('/')}}" class="nav-btn active">
            <i class="bi bi-house-door"></i>
            <span>Home</span>
        </a>
        <a href="{{url('/shared-projects')}}" class="nav-btn">
            <i class="bi bi-grid"></i>
            <span>Community</span>
        </a>
        <a href="{{url('/cnc-quote')}}" class="nav-btn-center">
            <i class="bi bi-plus-lg"></i>
        </a>
        <a href="{{url('/why-us')}}" class="nav-btn">
            <i class="bi bi-patch-check"></i>
            <span>Why Us</span>
        </a>
        <a href="{{url('/profile')}}" class="nav-btn">
            <i class="bi bi-person"></i>
            <span>Profile</span>
        </a>
    </nav>