@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@section('content')

<!-- ════════════════════════════════════════════════════════ -->
    <div class="quote-page-wrapper">
        <div class="container">

            <!-- Page Heading -->
            <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                <div>
                    <h4 class="fw-bold mb-1">Instant Online Quote</h4>
                    <p class="text-muted mb-0 quote-info-text">Upload your CAD file and configure your part —
                        get a real-time price in seconds.</p>
                </div>
                <div class="d-flex gap-2">
                    <a href="contact.html" class="btn btn-outline-secondary btn-sm px-3"><i
                            class="bi bi-headset me-1"></i> Talk to Engineer</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3"><i class="bi bi-question-circle me-1"></i>
                        DFM Guide</a>
                </div>
            </div>

            <!-- Service Type Tabs -->
            <div class="service-tabs">
                <div class="svc-tab active" data-svc="cnc">
                    <div class="svc-tab-icon"><i class="bi bi-gear-fill"></i></div>
                    <div class="svc-tab-label">CNC Machining<small>Milling &amp; Turning</small></div>
                </div>
                <a href="sheet-metal.html" class="svc-tab">
                    <div class="svc-tab-icon"><i class="bi bi-box-seam"></i></div>
                    <div class="svc-tab-label">Sheet Metal<small>Laser, Bending</small></div>
                </a>
                <a href="{{url('/3d-printing')}}" class="svc-tab">
                    <div class="svc-tab-icon"><i class="bi bi-layers"></i></div>
                    <div class="svc-tab-label">3D Printing<small>FDM, SLA, SLS, MJF</small></div>
                </a>
                <div class="svc-tab">
                    <div class="svc-tab-icon"><i class="bi bi-droplet-half"></i></div>
                    <div class="svc-tab-label">Injection Moulding<small>Rapid tooling</small></div>
                </div>
            </div>

            <!-- Sub-tabs -->
            <div class="page-subtabs">
                <a href="#" class="page-subtab active">Auto Quote</a>
                <a href="cnc-machining.html#capabilities" class="page-subtab">Capabilities</a>
                <a href="cnc-machining.html#materials" class="page-subtab">Materials</a>
                <a href="#" class="page-subtab">Industries</a>
                <a href="faq.html" class="page-subtab">Resources / FAQ</a>
            </div>

            <!-- Two-column layout -->
            <div class="row g-4 align-items-start">
                <!-- Left: Form -->
                <div class="col-lg-8">

                    <!-- Step 1: Upload -->
                    <div class="quote-form-card">
                        <div class="quote-form-header">
                            <h6><span class="text-primary me-2">01</span> Upload Your CAD File</h6>
                            <p>Accepted formats: STEP, STP, IGES, IGS, X_T, SLDPRT — max 200 MB per file, up to 12 parts
                                per order.</p>
                        </div>
                        <div class="quote-form-body">
                            <div class="upload-zone" id="uploadZone">
                                <input type="file" id="cadFile" accept=".step,.stp,.iges,.igs,.x_t,.sldprt" multiple>
                                <div class="upload-icon"><i class="bi bi-cloud-arrow-up-fill"></i></div>
                                <h6>Drag &amp; Drop your CAD file here</h6>
                                <p>or <span class="text-primary fw-bold cursor-pointer">browse to select
                                        files</span></p>
                                <div class="upload-formats">
                                    <span class="fmt-badge">.STEP</span>
                                    <span class="fmt-badge">.STP</span>
                                    <span class="fmt-badge">.IGES</span>
                                    <span class="fmt-badge">.IGS</span>
                                    <span class="fmt-badge">.X_T</span>
                                    <span class="fmt-badge">.SLDPRT</span>
                                    <span class="fmt-badge">Max 200 MB</span>
                                </div>
                            </div>
                            <div class="upload-notice">
                                <i class="bi bi-info-circle-fill"></i>
                                <strong>Note:</strong> Do not upload ZIP folders. Sharp edges and burrs will be removed
                                by default. Recessed corners are filleted unless otherwise specified in a drawing.
                            </div>
                            <div class="info-alert">
                                <i class="bi bi-shield-lock-fill"></i>
                                <div>Your files are protected under our <strong>NDA agreement</strong>. All uploads are
                                    encrypted and never shared. <a href="#" class="text-primary">Sign an NDA here</a>
                                    for added protection.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Configure -->
                    <div class="quote-form-card">
                        <div class="quote-form-header">
                            <h6><span class="text-primary me-2">02</span> Configure Your Part</h6>
                            <p>All options below apply to the uploaded part. Add another part for multi-part quotes.</p>
                        </div>

                        <!-- Basic -->
                        <div class="form-section-heading">Basic Parameters</div>
                        <div class="quote-form-body">

                            <!-- Quantity -->
                            <div class="form-row">
                                <div class="form-row-label">Quantity<span class="req">*</span></div>
                                <div class="form-row-control">
                                    <div class="qty-input-wrap">
                                        <button class="qty-btn" id="qtyMinus" type="button">−</button>
                                        <input class="qty-val" type="number" id="qtyInput" value="1" min="1"
                                            max="10000">
                                        <button class="qty-btn" id="qtyPlus" type="button">+</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Design Units -->
                            <div class="form-row">
                                <div class="form-row-label">Design Units</div>
                                <div class="form-row-control">
                                    <div class="pill-group" id="unitGroup">
                                        <div class="opt-pill active" data-val="mm"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> mm</div>
                                        <div class="opt-pill" data-val="inch"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> inch</div>
                                        <div class="opt-pill" data-val="cm"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> cm</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Material -->
                            <div class="form-row">
                                <div class="form-row-label">Material<span class="req">*</span></div>
                                <div class="form-row-control">
                                    <div class="pill-group" id="materialGroup">
                                        <div class="opt-pill active" data-val="aluminum"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> Aluminum</div>
                                        <div class="opt-pill" data-val="stainless"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> Stainless Steel</div>
                                        <div class="opt-pill" data-val="brass"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> Brass</div>
                                        <div class="opt-pill" data-val="copper"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> Copper</div>
                                        <div class="opt-pill" data-val="titanium"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> Titanium</div>
                                        <div class="opt-pill" data-val="mild-steel"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> Mild Steel</div>
                                        <div class="opt-pill" data-val="alloy-steel"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> Alloy Steel</div>
                                        <div class="opt-pill" data-val="tool-steel"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> Tool Steel</div>
                                        <div class="opt-pill" data-val="abs"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> ABS</div>
                                        <div class="opt-pill" data-val="pc"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> Polycarbonate</div>
                                        <div class="opt-pill" data-val="nylon"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> Nylon</div>
                                        <div class="opt-pill" data-val="pom"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> POM (Acetal)</div>
                                        <div class="opt-pill" data-val="ptfe"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> PTFE</div>
                                        <div class="opt-pill" data-val="peek"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> PEEK</div>
                                        <div class="opt-pill" data-val="pmma"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> PMMA (Acrylic)</div>
                                        <div class="opt-pill" data-val="custom"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> <i class="bi bi-pencil me-1"></i>
                                            Custom…</div>
                                    </div>
                                    <!-- Custom material input (hidden by default) -->
                                    <div id="customMaterialWrap" class="d-none mt-2">
                                        <input type="text" class="custom-input max-w-320" id="customMaterial"
                                            placeholder="Enter material name…">
                                    </div>
                                    <!-- Material sub-type -->
                                    <div id="matSubWrap" class="mt-3">
                                        <p id="matSubHeading" class="quote-label-caps">
                                            Type of Aluminum</p>
                                        <div class="pill-group" id="matSubGroup">
                                            <!-- populated by JS -->
                                        </div>
                                    </div>
                                    <!-- Material info card -->
                                    <div class="material-info-row" id="matInfoRow">
                                        <div class="mat-info-card">
                                            <div class="mat-thumb"><i class="bi bi-hexagon-fill"></i></div>
                                            <div class="mat-info-body">
                                                <div class="mat-name" id="matInfoName">Aluminum 6061</div>
                                                <div class="mat-rating">★★★★★ <span class="text-muted">4.9 (2,100
                                                        reviews)</span></div>
                                                <a href="#">Show material description ›</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Surface Finish -->
                            <div class="form-row">
                                <div class="form-row-label">Surface Finish<span class="req">*</span><span
                                        class="hint">25 options available</span></div>
                                <div class="form-row-control">
                                    <button class="finish-select-btn" id="finishBtn" type="button"
                                        data-bs-toggle="modal" data-bs-target="#finishModal">
                                        <div class="finish-icon" id="finishSwatch"></div>
                                        <span id="finishLabel">Standard (As-Machined)</span>
                                        <i class="bi bi-chevron-down ms-auto"></i>
                                    </button>
                                </div>
                            </div>

                        </div><!-- /basic form body -->

                        <!-- Advanced -->
                        <div class="form-section-heading">Part Specifications</div>
                        <div class="quote-form-body">

                            <!-- Technical Drawing -->
                            <div class="form-row">
                                <div class="form-row-label">Technical Drawing<span class="hint">Threads, tight
                                        tolerances, silkscreen</span></div>
                                <div class="form-row-control">
                                    <button class="drawing-upload-btn" type="button" data-bs-toggle="modal"
                                        data-bs-target="#drawingModal">
                                        <i class="bi bi-file-earmark-arrow-up"></i> Upload 2D Drawing
                                    </button>
                                    <p class="drawing-note">If your part has threads, tight tolerances, silk screen, or
                                        specific roughness — upload a 2D technical drawing. Your 3D file specs take
                                        priority over the drawing.</p>
                                </div>
                            </div>

                            <!-- Threads & Tapped Holes -->
                            <div class="form-row">
                                <div class="form-row-label">Threads &amp; Tapped Holes<span class="req">*</span><span
                                        class="hint">Internal or external threads?</span></div>
                                <div class="form-row-control">
                                    <div class="radio-group" id="threadsGroup">
                                        <label class="radio-opt active">
                                            <input type="radio" name="threads" value="no" checked>
                                            <div class="radio-opt-body"><strong>No</strong><span>No threading
                                                    required</span></div>
                                        </label>
                                        <label class="radio-opt">
                                            <input type="radio" name="threads" value="yes">
                                            <div class="radio-opt-body"><strong>Yes</strong><span>Specify in
                                                    drawing</span></div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Inserts -->
                            <div class="form-row">
                                <div class="form-row-label">Inserts<span class="req">*</span><span class="hint">Heat-set
                                        or threaded inserts</span></div>
                                <div class="form-row-control">
                                    <div class="radio-group" id="insertsGroup">
                                        <label class="radio-opt active">
                                            <input type="radio" name="inserts" value="no" checked>
                                            <div class="radio-opt-body"><strong>No</strong><span>No inserts
                                                    needed</span></div>
                                        </label>
                                        <label class="radio-opt">
                                            <input type="radio" name="inserts" value="yes">
                                            <div class="radio-opt-body"><strong>Yes</strong><span>Specify in
                                                    drawing</span></div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Tolerance -->
                            <div class="form-row">
                                <div class="form-row-label">Tolerance<span class="req">*</span><span class="hint">ISO
                                        2768-1 default</span></div>
                                <div class="form-row-control">
                                    <div class="radio-group" id="toleranceGroup">
                                        <label class="radio-opt active">
                                            <input type="radio" name="tolerance" value="standard" checked>
                                            <div class="radio-opt-body"><strong>Standard (ISO 2768-1)</strong><span>No
                                                    tighter tolerances required</span></div>
                                        </label>
                                        <label class="radio-opt">
                                            <input type="radio" name="tolerance" value="tight">
                                            <div class="radio-opt-body"><strong>Tighter Tolerances</strong><span>Upload
                                                    a 2D drawing to specify</span></div>
                                        </label>
                                    </div>
                                    <!-- tight tolerance notice (shown when tight selected) -->
                                    <div id="tightToleranceNotice" class="d-none mt-2">
                                        <div class="upload-notice quote-upload-notice text-warning">
                                            <i class="bi bi-exclamation-triangle-fill"></i>
                                            Tighter tolerances require a 2D technical drawing with critical dimensions
                                            annotated.
                                            <button class="tolerance-upload-btn ms-2" type="button"
                                                data-bs-toggle="modal" data-bs-target="#drawingModal">
                                                <i class="bi bi-upload"></i> Upload Drawing
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Surface Roughness -->
                            <div class="form-row">
                                <div class="form-row-label">Surface Roughness<span class="req">*</span></div>
                                <div class="form-row-control">
                                    <div class="pill-group" id="roughnessGroup">
                                        <div class="opt-pill active" data-val="ra6.3"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> 250 µin / Ra 6.3 µm</div>
                                        <div class="opt-pill" data-val="ra3.2"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> 125 µin / Ra 3.2 µm</div>
                                        <div class="opt-pill" data-val="ra1.6"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> 63 µin / Ra 1.6 µm</div>
                                        <div class="opt-pill" data-val="ra0.8"><span class="pill-check"><i
                                                    class="bi bi-check"></i></span> 32 µin / Ra 0.8 µm</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Part Marking -->
                            <div class="form-row">
                                <div class="form-row-label">Part Marking</div>
                                <div class="form-row-control">
                                    <div class="check-group" id="markingGroup">
                                        <label class="check-opt">
                                            <input type="checkbox" name="marking" value="silkscreen"> Silkscreen
                                        </label>
                                        <label class="check-opt">
                                            <input type="checkbox" name="marking" value="laser"> Laser Engraving
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Parts Assembly -->
                            <div class="form-row">
                                <div class="form-row-label">Parts Assembly<span class="req">*</span></div>
                                <div class="form-row-control">
                                    <div class="radio-group" id="assemblyGroup">
                                        <label class="radio-opt active">
                                            <input type="radio" name="assembly" value="none" checked>
                                            <div class="radio-opt-body"><strong>No Assembly</strong><span>Ship as
                                                    individual parts</span></div>
                                        </label>
                                        <label class="radio-opt">
                                            <input type="radio" name="assembly" value="test">
                                            <div class="radio-opt-body"><strong>Assembly Test</strong><span>Fit-check
                                                    before shipping</span></div>
                                        </label>
                                        <label class="radio-opt">
                                            <input type="radio" name="assembly" value="assembled">
                                            <div class="radio-opt-body"><strong>Ship Assembled</strong><span>Full
                                                    assembly &amp; ship</span></div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Finished Appearance -->
                            <div class="form-row">
                                <div class="form-row-label">Finished Appearance</div>
                                <div class="form-row-control">
                                    <div class="radio-group" id="appearanceGroup">
                                        <label class="radio-opt flex-1 min-w-200">
                                            <input type="radio" name="appearance" value="standard" checked>
                                            <div class="radio-opt-body">
                                                <strong>Standard</strong>
                                                <span>Normal machining traces acceptable. No cosmetic inspection.</span>
                                            </div>
                                        </label>
                                        <label class="radio-opt" class="radio-opt flex-1 min-w-200">
                                            <input type="radio" name="appearance" value="premium">
                                            <div class="radio-opt-body">
                                                <strong>Premium <span class="text-orange fs-10">(Extra
                                                        charges)</span></strong>
                                                <span>Clean, blemish-free surface. Photos sent before shipment.</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Inspection -->
                            <div class="form-row">
                                <div class="form-row-label">Inspection</div>
                                <div class="form-row-control">
                                    <div class="radio-group flex-column gap-2" id="inspectionGroup">
                                        <label class="radio-opt">
                                            <input type="radio" name="inspection" value="standard" checked>
                                            <div class="radio-opt-body">
                                                <strong>Standard Inspection (No Report)</strong>
                                                <span>Dimension &amp; surface check per drawing. No report issued. No
                                                    extra charge.</span>
                                            </div>
                                        </label>
                                        <label class="radio-opt">
                                            <input type="radio" name="inspection" value="report">
                                            <div class="radio-opt-body">
                                                <strong>Standard Inspection + Formal Report</strong>
                                                <span>2D drawing required. Report included. Extra charge applies.</span>
                                            </div>
                                        </label>
                                        <label class="radio-opt">
                                            <input type="radio" name="inspection" value="cmm">
                                            <div class="radio-opt-body">
                                                <strong>CMM Inspection + Formal Report</strong>
                                                <span>Full 3D dimensional report on Zeiss CMM. Extra charge
                                                    applies.</span>
                                            </div>
                                        </label>
                                        <label class="radio-opt">
                                            <input type="radio" name="inspection" value="material-cert">
                                            <div class="radio-opt-body">
                                                <strong>Source Material Certification</strong>
                                                <span>Mill cert &amp; material test report provided. Extra charge
                                                    applies.</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /part specs -->

                        <!-- Product & Remarks -->
                        <div class="form-section-heading">Product Details</div>
                        <div class="quote-form-body">

                            <!-- Product Description -->
                            <div class="form-row">
                                <div class="form-row-label">Product Category<span class="req">*</span><span
                                        class="hint">Helps with customs clearance</span></div>
                                <div class="form-row-control">
                                    <select class="custom-select max-w-340" id="productCat">
                                        <option value="">— Select category —</option>
                                        <optgroup label="Office Appliance &amp; Accessories">
                                            <option>Printer Enclosure</option>
                                            <option>Computer Enclosure</option>
                                            <option>Monitor Stand Bracket</option>
                                        </optgroup>
                                        <optgroup label="Vehicles &amp; Accessories">
                                            <option>Motorcycle Connector Enclosure</option>
                                            <option>Bicycle Frame</option>
                                            <option>Vehicle Bracket</option>
                                        </optgroup>
                                        <optgroup label="Smart Products &amp; Accessories">
                                            <option>Gateway Enclosure</option>
                                            <option>Tachograph Enclosure</option>
                                            <option>Infrared Transmitter Enclosure</option>
                                        </optgroup>
                                        <optgroup label="Household Appliances">
                                            <option>Metal Components for Furniture</option>
                                            <option>Household Appliance Bracket</option>
                                        </optgroup>
                                        <optgroup label="Measuring &amp; Precision Instruments">
                                            <option>Industrial Metal Component</option>
                                            <option>Precision Fixture</option>
                                        </optgroup>
                                        <optgroup label="Boards &amp; Blocks">
                                            <option>Aluminum Rectangular Plate</option>
                                            <option>Aluminum Enclosure</option>
                                        </optgroup>
                                        <optgroup label="Shaft &amp; Coupling">
                                            <option>Aluminum Shaft Coupling</option>
                                            <option>Aluminum Gear</option>
                                        </optgroup>
                                        <optgroup label="Electronics">
                                            <option>Circuit Board Fixing Bracket</option>
                                            <option>Speaker Enclosure</option>
                                        </optgroup>
                                        <optgroup label="Others">
                                            <option>Others</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <!-- Special Request -->
                            <div class="form-row">
                                <div class="form-row-label">Special Request<span class="hint">Production, packaging, or
                                        shipping notes</span></div>
                                <div class="form-row-control">
                                    <textarea class="custom-input" rows="3"
                                        placeholder="Enter any special production, packaging, or shipment requirements…"></textarea>
                                </div>
                            </div>

                        </div><!-- /product details -->
                    </div><!-- /configure card -->

                </div><!-- /col-lg-8 -->

                <!-- Right: Sidebar -->
                <div class="col-lg-4">
                    <div class="quote-sidebar">
                        <div class="sidebar-head">
                            <h6><i class="bi bi-receipt me-2 text-primary"></i>Quote Summary</h6>
                        </div>
                        <div class="sidebar-body">

                            <div class="price-row">
                                <div class="price-label">Subtotal <span class="fs-10 text-muted-50">(0
                                        parts)</span></div>
                                <div class="price-val rfq" id="priceDisplay">RFQ</div>
                            </div>
                            <div class="price-note">GST &amp; freight excluded. Final price after file analysis.</div>

                            <div class="sidebar-divider"></div>

                            <!-- Lead Time -->
                            <div class="lead-time-section">
                                <h6>Lead Time</h6>
                                <div class="lead-time-opt">
                                    <input type="radio" name="leadtime" value="3-5" checked>
                                    <div class="lead-time-opt-body">
                                        <strong>3–5 Business Days</strong>
                                        <small id="shipDate">Est. shipment: calculating…</small>
                                    </div>
                                </div>
                                <div class="lead-time-opt mt-2 bg-light border">
                                    <input type="radio" name="leadtime" value="express">
                                    <div class="lead-time-opt-body">
                                        <strong>24h Express <span
                                                class="text-orange fs-10">(+30%)</span></strong>
                                        <small>Available for select materials</small>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-divider"></div>

                            <!-- Parts summary -->
                            <div class="parts-summary">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="quote-label-caps mb-0">Parts</span>
                                    <span class="quote-status-label" id="partCount">0 added</span>
                                </div>
                                <div id="partsList">
                                    <div class="quote-empty-state">
                                        <i class="bi bi-cloud-upload fs-2 d-block mb-2"></i>
                                        Upload a CAD file to start
                                    </div>
                                </div>
                            </div>

                            <div class="add-part-btn" id="addPartBtn">
                                <i class="bi bi-plus-circle"></i> Add Another Part
                            </div>

                            <button class="submit-btn" id="submitBtn" disabled>
                                <i class="bi bi-send-fill"></i> Submit Request
                            </button>
                            <p class="sidebar-legal">By submitting, you agree to our <a href="#">Terms of Service</a>
                                and <a href="#">Privacy Policy</a>.</p>

                            <div class="sidebar-divider"></div>

                            <!-- Trust badges -->
                            <div class="d-flex flex-column gap-2 small text-muted">
                                <div class="d-flex align-items-center gap-2"><i
                                        class="bi bi-patch-check-fill text-primary"></i> ISO 9001:2015 Certified</div>
                                <div class="d-flex align-items-center gap-2"><i
                                        class="bi bi-shield-fill-check text-primary"></i> NDA &amp; Data Protection
                                </div>
                                <div class="d-flex align-items-center gap-2"><i class="bi bi-globe-central-south-asia text-primary"></i>
                                    Pan-India Delivery</div>
                                <div class="d-flex align-items-center gap-2"><i class="bi bi-headset text-primary"></i>
                                    Engineer Support 24/7</div>
                            </div>

                        </div>
                    </div>
                </div><!-- /col-lg-4 -->
            </div><!-- /row -->

        </div><!-- /container -->
    </div><!-- /quote-page-wrapper -->


    <!-- ════ Surface Finish Modal ════ -->
    <div class="modal fade" id="finishModal" tabindex="-1" aria-labelledby="finishModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content rounded-4 overflow-hidden">
                <div class="modal-header bg-light border-bottom">
                    <h6 class="modal-title fw-bold" id="finishModalLabel"><i
                            class="bi bi-palette me-2 text-primary"></i>Select Surface Finish</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0 min-h-420">
                        <!-- Category list -->
                        <div class="col-4 border-end bg-light">
                            <div class="p-3">
                                <p class="quote-label-caps mb-2">Categories</p>
                                <div id="finishCatList"></div>
                            </div>
                        </div>
                        <!-- Options -->
                        <div class="col-8 p-3">
                            <div id="finishOptionsList"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light border-top">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmFinish" data-bs-dismiss="modal">Confirm
                        Selection</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ════ Technical Drawing Upload Modal ════ -->
    <div class="modal fade" id="drawingModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-4 overflow-hidden">
                <div class="modal-header bg-light border-bottom">
                    <h6 class="modal-title fw-bold"><i class="bi bi-file-earmark-text me-2 text-primary"></i>Upload
                        Technical Drawing</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted small">If the part contains threads, specific tolerances,
                        silk screen printing, or tighter surface roughness, upload a 2D technical drawing here.</p>
                    <div class="upload-zone p-4">
                        <input type="file" accept=".pdf,.svg,.jpg,.jpeg,.png,.dwg,.dxf,.slddrw,.ai,.eps">
                        <div class="upload-icon quote-step-number fs-5 mx-auto mb-2"><i
                                 class="bi bi-file-earmark-arrow-up"></i></div>
                        <h6 class="small">Drag &amp; Drop or Browse</h6>
                        <div class="upload-formats mt-2">
                            <span class="fmt-badge">PDF</span><span class="fmt-badge">SVG</span><span
                                class="fmt-badge">DWG</span>
                            <span class="fmt-badge">DXF</span><span class="fmt-badge">PNG/JPG</span><span
                                class="fmt-badge">Max 5 MB</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light border-top">
B</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" class="modal-footer bg-light border-top">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i
                            class="bi bi-upload me-1"></i>Upload</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')

    <script>
        // ═══════════════════════════════════════════════════════════
        // Data
        // ═══════════════════════════════════════════════════════════
        const MAT_SUBS = {
            aluminum: ['Aluminum 6061', 'Aluminum 7075', 'Aluminum 5052', 'Aluminum 2024'],
            stainless: ['SS 304', 'SS 316/316L', 'SS 303', 'SS 430', 'SS 201'],
            brass: ['Brass C360'],
            copper: ['Copper C110'],
            titanium: ['Titanium Gr2', 'Titanium Gr5 (TC4)'],
            'mild-steel': ['Mild Steel 1018', 'Mild Steel 1045', 'Mild Steel A36'],
            'alloy-steel': ['Alloy Steel 4140', 'Alloy Steel 4340'],
            'tool-steel': ['Tool Steel D2', 'Tool Steel A2', 'Tool Steel O1', 'Tool Steel H13'],
            abs: ['ABS', 'ABS Flame Retardant'],
            pc: ['Polycarbonate (PC)'],
            nylon: ['Nylon 6', 'Nylon 12 (PA12)'],
            pom: ['POM (Acetal)'],
            ptfe: ['PTFE (Teflon)'],
            peek: ['PEEK'],
            pmma: ['PMMA (Acrylic)'],
            custom: []
        };

        const MAT_NAMES = {
            aluminum: 'Aluminum 6061', stainless: 'Stainless Steel 304', brass: 'Brass C360',
            copper: 'Copper C110', titanium: 'Titanium Gr5', 'mild-steel': 'Mild Steel 1018',
            'alloy-steel': 'Alloy Steel 4140', 'tool-steel': 'Tool Steel D2',
            abs: 'ABS', pc: 'Polycarbonate (PC)', nylon: 'Nylon 6', pom: 'POM (Acetal)',
            ptfe: 'PTFE (Teflon)', peek: 'PEEK', pmma: 'PMMA (Acrylic)', custom: 'Custom Material'
        };

        const FINISHES = [
            { cat: 'Standard', opts: ['Standard (As-Machined) — Ra 6.3 µm'] },
            { cat: 'Anodizing', opts: ['Anodized Type II (clear)', 'Anodized Type III (hard coat)', 'Bead Blast + Anodized Color', 'Electrically Conductive Oxidation'] },
            { cat: 'Brushed', opts: ['Brushed'] },
            { cat: 'Bead Blast', opts: ['Bead Blast'] },
            { cat: 'Spray Painting', opts: ['Spray Paint — Matt', 'Spray Paint — High Gloss'] },
            { cat: 'Powder Coat', opts: ['Powder Coat — Matt', 'Powder Coat — High Gloss'] },
            { cat: 'Plating', opts: ['Chrome Plating', 'Zinc Plating', 'Nickel Plating', 'Silver Plating', 'Gold Plating', 'Tin Plating'] },
            { cat: 'Sanding', opts: ['#1000 Sanding'] },
            { cat: 'Smooth Machining', opts: ['Smooth Machining — Ra 1.6 µm (63 µin)'] },
            { cat: 'Chemical Treatment', opts: ['Chem Film (Alodine)', 'Electrophoresis', 'Etching', 'Electropolished — Ra 0.8 µm'] },
            { cat: 'Physical Treatment', opts: ['PVD Coating', 'Pickling'] },
            { cat: 'Others', opts: ['Others (specify in notes)'] }
        ];

        // ═══════════════════════════════════════════════════════════
        // Init
        // ═══════════════════════════════════════════════════════════
        document.addEventListener('DOMContentLoaded', () => {
            setupPillGroups();
            setupRadioGroups();
            setupQty();
            setupMaterial();
            setupFinishModal();
            setupUploadZone();
            setupTolerance();
            calcShipDate();
        });

        // ─── Pill groups (single-select) ───
        function setupPillGroups() {
            document.querySelectorAll('.pill-group').forEach(grp => {
                if (grp.id === 'matSubGroup') return; // handled separately
                grp.querySelectorAll('.opt-pill').forEach(pill => {
                    pill.addEventListener('click', () => {
                        grp.querySelectorAll('.opt-pill').forEach(p => p.classList.remove('active'));
                        pill.classList.add('active');
                    });
                });
            });
        }

        // ─── Radio groups (visual) ───
        function setupRadioGroups() {
            document.querySelectorAll('.radio-group').forEach(grp => {
                grp.querySelectorAll('.radio-opt').forEach(opt => {
                    opt.addEventListener('click', () => {
                        grp.querySelectorAll('.radio-opt').forEach(o => o.classList.remove('active'));
                        opt.classList.add('active');
                    });
                });
            });
        }

        // ─── Qty ───
        function setupQty() {
            const inp = document.getElementById('qtyInput');
            document.getElementById('qtyPlus').addEventListener('click', () => { inp.value = Math.min(10000, +inp.value + 1); });
            document.getElementById('qtyMinus').addEventListener('click', () => { inp.value = Math.max(1, +inp.value - 1); });
        }

        // ─── Material ───
        let activeMat = 'aluminum';
        let activeMatSub = 'Aluminum 6061';

        function setupMaterial() {
            const grp = document.getElementById('materialGroup');
            grp.querySelectorAll('.opt-pill').forEach(pill => {
                pill.addEventListener('click', () => {
                    grp.querySelectorAll('.opt-pill').forEach(p => p.classList.remove('active'));
                    pill.classList.add('active');
                    activeMat = pill.dataset.val;
                    updateMatSubs();
                    // custom input
                    document.getElementById('customMaterialWrap').classList.toggle('d-none', activeMat !== 'custom');
                });
            });
            updateMatSubs();
        }

        function updateMatSubs() {
            const subs = MAT_SUBS[activeMat] || [];
            const wrap = document.getElementById('matSubWrap');
            const grp = document.getElementById('matSubGroup');
            const heading = document.getElementById('matSubHeading');
            grp.innerHTML = '';
            wrap.classList.toggle('d-none', !subs.length);
            if (!subs.length) return;
            wrap.classList.remove('d-none');
            const matLabel = document.querySelector(`#materialGroup .opt-pill[data-val="${activeMat}"]`)?.textContent.trim().replace(/^✓\s*/, '') || activeMat;
            heading.textContent = 'Type of ' + matLabel;
            subs.forEach((s, i) => {
                const el = document.createElement('div');
                el.className = 'opt-pill' + (i === 0 ? ' active' : '');
                el.dataset.val = s;
                el.innerHTML = `<span class="pill-check"><i class="bi bi-check"></i></span> ${s}`;
                el.addEventListener('click', () => {
                    grp.querySelectorAll('.opt-pill').forEach(p => p.classList.remove('active'));
                    el.classList.add('active');
                    activeMatSub = s;
                    document.getElementById('matInfoName').textContent = s;
                });
                grp.appendChild(el);
            });
            activeMatSub = subs[0];
            document.getElementById('matInfoName').textContent = subs[0];
        }

        // ─── Tolerance ───
        function setupTolerance() {
            document.querySelectorAll('input[name=tolerance]').forEach(r => {
                r.addEventListener('change', () => {
                    document.getElementById('tightToleranceNotice').classList.toggle('d-none', r.value !== 'tight');
                });
            });
        }

        // ─── Surface Finish Modal ───
        let activeFinish = 'Standard (As-Machined) — Ra 6.3 µm';
        let activeCatIdx = 0;

        function setupFinishModal() {
            const catList = document.getElementById('finishCatList');
            const optList = document.getElementById('finishOptionsList');

            function renderCats() {
                catList.innerHTML = '';
                FINISHES.forEach((f, i) => {
                    const el = document.createElement('div');
                    el.className = 'opt-pill mb-1 w-100 fs-12 justify-content-start' + (i === activeCatIdx ? ' active' : '');
                    el.textContent = f.cat;
                    el.addEventListener('click', () => { activeCatIdx = i; renderCats(); renderOpts(); });
                    catList.appendChild(el);
                });
            }

             function renderOpts() {
                optList.innerHTML = `<p class="quote-label-caps mb-2">${FINISHES[activeCatIdx].cat}</p>`;
                FINISHES[activeCatIdx].opts.forEach(o => {
                    const el = document.createElement('div');
                    el.className = 'radio-opt mb-2' + (o === activeFinish ? ' active' : '');
                    el.innerHTML = `<input type="radio" name="finish" value="${o}" ${o === activeFinish ? 'checked' : ''}> <div class="radio-opt-body"><strong>${o}</strong></div>`;
                    el.addEventListener('click', () => {
                        optList.querySelectorAll('.radio-opt').forEach(r => r.classList.remove('active'));
                        el.classList.add('active');
                        activeFinish = o;
                    });
                    optList.appendChild(el);
                });
            }

            document.getElementById('finishModal').addEventListener('show.bs.modal', () => { renderCats(); renderOpts(); });
            document.getElementById('confirmFinish').addEventListener('click', () => {
                document.getElementById('finishLabel').textContent = activeFinish;
            });
        }

        // ─── Upload Zone ───
        function setupUploadZone() {
            const zone = document.getElementById('uploadZone');
            const inp = document.getElementById('cadFile');

            zone.addEventListener('dragover', e => { e.preventDefault(); zone.classList.add('dragover'); });
            zone.addEventListener('dragleave', () => zone.classList.remove('dragover'));
            zone.addEventListener('drop', e => {
                e.preventDefault();
                zone.classList.remove('dragover');
                handleFiles(e.dataTransfer.files);
            });
            inp.addEventListener('change', () => handleFiles(inp.files));
        }

        function handleFiles(files) {
            if (!files || !files.length) return;
            const partsList = document.getElementById('partsList');
            const partCount = document.getElementById('partCount');
            const submitBtn = document.getElementById('submitBtn');
            let count = partsList.querySelectorAll('.part-row').length;

            // Clear placeholder
            if (count === 0) partsList.innerHTML = '';

            Array.from(files).slice(0, 12 - count).forEach(f => {
                const row = document.createElement('div');
                row.className = 'part-row';
                row.innerHTML = `
                <div>
                    <div class="part-name"><i class="bi bi-file-earmark-code text-primary me-1"></i>${f.name}</div>
                    <div class="part-detail">Qty 1 · Aluminum 6061 · As-Machined</div>
                </div>
                <div class="part-price text-primary">RFQ</div>`;
                partsList.appendChild(row);
                count++;
            });

            partCount.textContent = count + (count === 1 ? ' part' : ' parts');
            submitBtn.disabled = false;
        }

        // ─── Ship date ───
        function calcShipDate() {
            const d = new Date();
            let bdays = 0, added = 0;
            while (added < 5) {
                d.setDate(d.getDate() + 1);
                if (d.getDay() !== 0 && d.getDay() !== 6) added++;
            }
            const opts = { day: 'numeric', month: 'short', year: 'numeric' };
            document.getElementById('shipDate').textContent = 'Est. shipment: ' + d.toLocaleDateString('en-IN', opts);
        }
    </script>

@endpush