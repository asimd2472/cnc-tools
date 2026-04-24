<!-- Top Bar -->
    <div class="top-bar d-none d-lg-block">
        <div class="container d-flex justify-content-between">
            <div>
                <span><i class="bi bi-geo-alt text-primary me-1"></i> India Time: 11:49</span>
                <span class="ms-4"><i class="bi bi-clock text-primary me-1"></i> 24/7 Professional Service</span>
            </div>
            <div>
                @if(auth()->check() && auth()->user()->user_type == '2')
                    <a href="{{route('user.profile')}}">My account</a>
                @else
                    <a href="{{url('/login')}}">Login</a>
                    <a href="{{url('/register')}}">Register</a>
                @endif

                <a href="#"><i class="bi bi-cart me-1"></i> Cart (0)</a>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top border-bottom">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <span class="fw-800 fs-3 text-dark"><span class="text-primary">P</span> ProtoCut</span>
            </a>

            <!-- Mobile Offcanvas Toggle -->
            <button class="navbar-toggler border-0 p-1" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileOffcanvas" aria-controls="mobileOffcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Desktop Nav -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="cncDropdown" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">CNC & 3D
                            Printing</a>
                        <!-- Mega Dropdown -->
                        <div class="dropdown-menu mega-dropdown border-0 shadow-lg p-0 rounded-3 overflow-hidden"
                            aria-labelledby="cncDropdown">
                            <div class="row g-0">
                                <div class="col-6 p-4" style="background:#f8f9fa;">
                                    <p class="text-uppercase fw-bold mb-3"
                                        style="font-size:11px;color:#aaa;letter-spacing:1px;">Manufacturing</p>
                                    <a class="dropdown-item rounded-2 px-3 py-2 mb-1" href="{{url('/cnc-machining')}}">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="mega-dd-icon"><i class="bi bi-gear-fill"></i></div>
                                            <div>
                                                <div class="fw-bold" style="font-size:14px;">CNC Machining</div>
                                                <div class="text-muted" style="font-size:12px;">3/4/5-Axis Milling &
                                                    Turning</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item rounded-2 px-3 py-2 mb-1" href="{{url('/3d-printing')}}">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="mega-dd-icon"><i class="bi bi-layers"></i></div>
                                            <div>
                                                <div class="fw-bold" style="font-size:14px;">3D Printing</div>
                                                <div class="text-muted" style="font-size:12px;">SLA, FDM, MJF
                                                    Technologies</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item rounded-2 px-3 py-2" href="{{url('/sheet-metal')}}">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="mega-dd-icon"><i class="bi bi-box-seam"></i></div>
                                            <div>
                                                <div class="fw-bold" style="font-size:14px;">Sheet Metal</div>
                                                <div class="text-muted" style="font-size:12px;">Bending, Punching &
                                                    Coating</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 p-4">
                                    <p class="text-uppercase fw-bold mb-3"
                                        style="font-size:11px;color:#aaa;letter-spacing:1px;">Cutting Services</p>
                                    <a class="dropdown-item rounded-2 px-3 py-2 mb-1" href="{{url('/laser-cutting')}}">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="mega-dd-icon"><i class="bi bi-lightning-charge"></i></div>
                                            <div>
                                                <div class="fw-bold" style="font-size:14px;">Laser Cutting</div>
                                                <div class="text-muted" style="font-size:12px;">0.5mm – 30mm thickness
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item rounded-2 px-3 py-2 mb-3" href="{{url('/wire-cutting')}}">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="mega-dd-icon"><i class="bi bi-bezier"></i></div>
                                            <div>
                                                <div class="fw-bold" style="font-size:14px;">Wire Cutting (EDM)</div>
                                                <div class="text-muted" style="font-size:12px;">High-precision wire EDM
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="rounded-2 px-3 py-2"
                                        style="background:rgba(0,202,114,0.08);border:1px solid rgba(0,202,114,0.25);">
                                        <div class="fw-bold text-primary mb-1" style="font-size:12px;"><i
                                                class="bi bi-star-fill me-1"></i> New Service</div>
                                        <div class="text-muted" style="font-size:12px;">Sheet Metal Fabrication now
                                            available</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/laser-cutting')}}">Laser Cutting</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/wire-cutting')}}">Wire Cutting</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/why-us')}}">Why Us?</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/shared-projects')}}">Shared Projects</a></li>
                </ul>
                <div class="d-flex align-items-center gap-2">
                    <div class="input-group d-none d-xl-flex">
                        <input type="text" class="form-control border-0 bg-light py-2" placeholder="Search Projects..."
                            style="min-width:160px;">
                        <span class="input-group-text bg-light border-0 text-primary"><i
                                class="bi bi-search"></i></span>
                    </div>
                    <a href="{{url('/cnc-quote')}}" class="btn btn-primary px-4 py-2 ms-1 text-nowrap fw-bold">Get Quote</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Offcanvas Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileOffcanvas" aria-labelledby="mobileOffcanvasLabel">
        <div class="offcanvas-header border-bottom py-3">
            <h5 class="offcanvas-title fw-bold mb-0" id="mobileOffcanvasLabel">
                <span class="text-primary">P</span> ProtoCut
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0 d-flex flex-column">
            <ul class="list-unstyled p-3 mb-0">
                <li><a class="d-block py-2 px-3 rounded-2 text-dark text-decoration-none fw-500 offcanvas-link"
                        href="{{url('/')}}">Home</a></li>
                <li>
                    <button
                        class="btn btn-link text-dark text-decoration-none d-flex justify-content-between align-items-center w-100 py-2 px-3 fw-500 offcanvas-link"
                        data-bs-toggle="collapse" data-bs-target="#mobileServicesCollapse">
                        CNC & 3D Printing <i class="bi bi-chevron-down small"></i>
                    </button>
                    <div class="collapse" id="mobileServicesCollapse">
                        <ul class="list-unstyled ps-2 pb-1">
                            <li><a class="d-block py-2 px-3 text-muted text-decoration-none small rounded-2 offcanvas-link"
                                    href="{{url('/cnc-machining')}}"><i class="bi bi-gear-fill text-primary me-2"></i>CNC
                                    Machining</a></li>
                            <li><a class="d-block py-2 px-3 text-muted text-decoration-none small rounded-2 offcanvas-link"
                                    href="{{url('/3d-printing')}}"><i class="bi bi-layers text-primary me-2"></i>3D
                                    Printing</a></li>
                            <li><a class="d-block py-2 px-3 text-muted text-decoration-none small rounded-2 offcanvas-link"
                                    href="{{url('/sheet-metal')}}"><i class="bi bi-box-seam text-primary me-2"></i>Sheet
                                    Metal</a></li>
                            <li><a class="d-block py-2 px-3 text-muted text-decoration-none small rounded-2 offcanvas-link"
                                    href="{{url('/laser-cutting')}}"><i
                                        class="bi bi-lightning-charge text-primary me-2"></i>Laser Cutting</a></li>
                            <li><a class="d-block py-2 px-3 text-muted text-decoration-none small rounded-2 offcanvas-link"
                                    href="{{url('/wire-cutting')}}"><i class="bi bi-bezier text-primary me-2"></i>Wire Cutting
                                    (EDM)</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="d-block py-2 px-3 rounded-2 text-dark text-decoration-none offcanvas-link"
                        href="{{url('/laser-cutting')}}">Laser Cutting</a></li>
                <li><a class="d-block py-2 px-3 rounded-2 text-dark text-decoration-none offcanvas-link"
                        href="{{url('/wire-cutting')}}">Wire Cutting</a></li>
                <li><a class="d-block py-2 px-3 rounded-2 text-dark text-decoration-none offcanvas-link"
                        href="{{url('/why-us')}}">Why Us?</a></li>
                <li><a class="d-block py-2 px-3 rounded-2 text-dark text-decoration-none offcanvas-link"
                        href="{{url('/shared-projects')}}">Shared Projects</a></li>
            </ul>
            <div class="p-3 border-top mt-auto">
                <div class="input-group mb-3">
                    <input type="text" class="form-control bg-light border-0" placeholder="Search Projects...">
                    <span class="input-group-text bg-light border-0 text-primary"><i class="bi bi-search"></i></span>
                </div>
                <a href="{{url('/')}}" class="btn btn-primary w-100 py-2 fw-bold">Get Quote</a>
                <div class="d-flex gap-3 mt-3">
                    <a href="{{url('/login')}}" class="text-muted text-decoration-none small">Login</a>
                    <a href="{{url('/register')}}" class="text-muted text-decoration-none small">Register</a>
                </div>
            </div>
        </div>
    </div>