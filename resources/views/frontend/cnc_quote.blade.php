@extends('frontend.layouts.app')

@section('title', 'ProtoCut - Modern Manufacturing Service')

@push('styles')
    <style>
        .color-pill-label {
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .color-swatch {
            width: 13px;
            height: 13px;
            border-radius: 1px;
            display: inline-block;
            border: 1px solid #f2f2f2;
            flex-shrink: 0;
            vertical-align: text-top;
        }
    </style>
@endpush

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
                <div class="svc-tab" data-svc="3d">
                    <div class="svc-tab-icon"><i class="bi bi-layers"></i></div>
                    <div class="svc-tab-label">3D Printing<small>FDM, SLA, SLS, MJF</small></div>
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
                                <div id="uploadPrompt">
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
                                <div id="uploadSelectedList" class="d-none mt-2"></div>
                                <div id="uploadError" class="text-danger small mt-2 d-none"></div>
                            </div>
                            <div class="text-muted small mt-2">
                                Supported: .step, .stp, .iges, .igs, .x_t, .sldprt (max 200 MB per file).
                            </div>
                            <div class="upload-notice mt-2">
                                <i class="bi bi-info-circle-fill"></i>
                                <strong>Tip:</strong> Click delete on any uploaded file to remove it and upload again.
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
                                    <div class="pill-group" id="materialGroup"></div>
                                    <!-- Material sub-type -->
                                    <div id="matSubWrap" class="mt-3">
                                        <p id="matSubHeading" class="quote-label-caps">
                                            Material Type</p>
                                        <div class="pill-group" id="matSubGroup">
                                            <!-- populated by JS -->
                                        </div>
                                    </div>
                                    <div id="colorWrap" class="mt-3 d-none">
                                        <p class="quote-label-caps">Color</p>
                                        <div class="pill-group" id="colorGroup"></div>
                                    </div>
                                    <div id="processWrap" class="mt-3 d-none">
                                        <p class="quote-label-caps">Process</p>
                                        <div class="pill-group" id="processGroup"></div>
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
                                        class="hint" id="surfaceHint">Select based on material</span></div>
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
                                        @foreach ($productCategories as $category)
                                            <optgroup label="{{ $category->name }}">
                                                @foreach ($category->children as $subcategory)
                                                    <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
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
        const QUOTE_CONFIG = @json($quoteConfig);
        const MAX_CAD_FILE_SIZE = 200 * 1024 * 1024;
        const MAX_CAD_FILES = 12;
        const ALLOWED_EXTENSIONS = ['step', 'stp', 'iges', 'igs', 'x_t', 'sldprt'];

        const state = {
            serviceKey: 'cnc',
            materialIndex: 0,
            typeIndex: 0,
            colorIndex: 0,
            processIndex: 0,
            finishIndex: 0,
            finishCategory: '',
            selectedFiles: [],
        };

        document.addEventListener('DOMContentLoaded', () => {
            setupRadioGroups();
            setupQty();
            setupTolerance();
            setupUnitGroup();
            setupServiceTabs();
            setupFinishModal();
            setupUploadZone();
            calcShipDate();
            initializeService();
        });

        function setupRadioGroups() {
            document.querySelectorAll('.radio-group').forEach((grp) => {
                grp.querySelectorAll('.radio-opt').forEach((opt) => {
                    opt.addEventListener('click', () => {
                        grp.querySelectorAll('.radio-opt').forEach((o) => o.classList.remove('active'));
                        opt.classList.add('active');
                    });
                });
            });
        }

        function setupQty() {
            const inp = document.getElementById('qtyInput');
            document.getElementById('qtyPlus').addEventListener('click', () => {
                inp.value = Math.min(10000, Number(inp.value || 1) + 1);
            });
            document.getElementById('qtyMinus').addEventListener('click', () => {
                inp.value = Math.max(1, Number(inp.value || 1) - 1);
            });
        }

        function setupTolerance() {
            document.querySelectorAll('input[name=tolerance]').forEach((radio) => {
                radio.addEventListener('change', () => {
                    document.getElementById('tightToleranceNotice').classList.toggle('d-none', radio.value !== 'tight');
                });
            });
        }

        function setupUnitGroup() {
            const unitGroup = document.getElementById('unitGroup');
            if (!unitGroup) {
                return;
            }

            unitGroup.querySelectorAll('.opt-pill').forEach((pill) => {
                pill.addEventListener('click', () => {
                    unitGroup.querySelectorAll('.opt-pill').forEach((item) => item.classList.remove('active'));
                    pill.classList.add('active');
                });
            });
        }

        function setupServiceTabs() {
            document.querySelectorAll('.svc-tab').forEach((tab) => {
                tab.addEventListener('click', () => {
                    document.querySelectorAll('.svc-tab').forEach((item) => item.classList.remove('active'));
                    tab.classList.add('active');
                    state.serviceKey = tab.dataset.svc;
                    resetSelectionState();
                    renderMaterialSection();
                    syncFilePartDetails();
                });
            });
        }

        function initializeService() {
            if (!QUOTE_CONFIG.cnc && QUOTE_CONFIG['3d']) {
                state.serviceKey = '3d';
                document.querySelectorAll('.svc-tab').forEach((tab) => {
                    tab.classList.toggle('active', tab.dataset.svc === '3d');
                });
            }
            renderMaterialSection();
        }

        function resetSelectionState() {
            state.materialIndex = 0;
            state.typeIndex = 0;
            state.colorIndex = 0;
            state.processIndex = 0;
            state.finishIndex = 0;
            state.finishCategory = '';
        }

        function getActiveServiceData() {
            return QUOTE_CONFIG[state.serviceKey] || { materials: [] };
        }

        function getActiveMaterial() {
            const serviceData = getActiveServiceData();
            return serviceData.materials[state.materialIndex] || null;
        }

        function getActiveType() {
            const material = getActiveMaterial();
            return material?.types?.[state.typeIndex] || null;
        }

        function renderMaterialSection() {
            renderMaterials();
            renderTypes();
            renderColors();
            renderProcesses();
            buildFinishDataFromMaterial();
            renderMaterialInfo();
        }

        function renderMaterials() {
            const group = document.getElementById('materialGroup');
            const serviceData = getActiveServiceData();
            group.innerHTML = '';

            serviceData.materials.forEach((material, index) => {
                const pill = createPill(material.name, index === state.materialIndex);
                pill.addEventListener('click', () => {
                    state.materialIndex = index;
                    state.typeIndex = 0;
                    state.colorIndex = 0;
                    state.processIndex = 0;
                    state.finishIndex = 0;
                    state.finishCategory = '';
                    renderMaterialSection();
                    syncFilePartDetails();
                });
                group.appendChild(pill);
            });
        }

        function renderTypes() {
            const material = getActiveMaterial();
            const wrap = document.getElementById('matSubWrap');
            const heading = document.getElementById('matSubHeading');
            const group = document.getElementById('matSubGroup');
            group.innerHTML = '';

            if (!material || !material.types || material.types.length === 0) {
                wrap.classList.add('d-none');
                return;
            }

            wrap.classList.remove('d-none');
            heading.textContent = `Type of ${material.name}`;

            material.types.forEach((type, index) => {
                const pill = createPill(type.name, index === state.typeIndex);
                pill.addEventListener('click', () => {
                    state.typeIndex = index;
                    state.colorIndex = 0;
                    state.processIndex = 0;
                    renderTypes();
                    renderColors();
                    renderProcesses();
                    renderMaterialInfo();
                    syncFilePartDetails();
                });
                group.appendChild(pill);
            });
        }

        function renderColors() {
            const type = getActiveType();
            const wrap = document.getElementById('colorWrap');
            const group = document.getElementById('colorGroup');
            group.innerHTML = '';

            const colors = type?.colors || [];
            if (!colors.length) {
                wrap.classList.add('d-none');
                return;
            }

            wrap.classList.remove('d-none');
            colors.forEach((color, index) => {
                const normalizedColor = normalizeColorCode(color.code, color.name);
                const pill = createPill(color.name, index === state.colorIndex, normalizedColor);
                pill.addEventListener('click', () => {
                    state.colorIndex = index;
                    renderColors();
                    syncFilePartDetails();
                });
                group.appendChild(pill);
            });
        }

        function renderProcesses() {
            const type = getActiveType();
            const wrap = document.getElementById('processWrap');
            const group = document.getElementById('processGroup');
            group.innerHTML = '';

            if (state.serviceKey !== '3d') {
                wrap.classList.add('d-none');
                return;
            }

            const processes = type?.processes || [];
            if (!processes.length) {
                wrap.classList.add('d-none');
                return;
            }

            wrap.classList.remove('d-none');
            processes.forEach((process, index) => {
                const pill = createPill(process.name, index === state.processIndex);
                pill.addEventListener('click', () => {
                    state.processIndex = index;
                    renderProcesses();
                    syncFilePartDetails();
                });
                group.appendChild(pill);
            });
        }

        function renderMaterialInfo() {
            const material = getActiveMaterial();
            const type = getActiveType();
            const label = type?.name || material?.name || 'N/A';
            document.getElementById('matInfoName').textContent = label;
        }

        let finishCategories = [];
        let activeFinish = '';

        function buildFinishDataFromMaterial() {
            const material = getActiveMaterial();
            const finishOptions = material?.surface_finishes || [];
            const grouped = finishOptions.reduce((accumulator, item) => {
                if (!accumulator[item.category]) {
                    accumulator[item.category] = [];
                }
                accumulator[item.category].push(item);
                return accumulator;
            }, {});

            finishCategories = Object.keys(grouped).map((category) => ({
                name: category,
                options: grouped[category],
            }));

            if (!finishCategories.length) {
                activeFinish = 'No finish options';
                document.getElementById('finishLabel').textContent = activeFinish;
                document.getElementById('surfaceHint').textContent = 'No surface finishes configured';
                return;
            }

            state.finishCategory = finishCategories[0].name;
            state.finishIndex = 0;
            activeFinish = finishCategories[0].options[0].name;
            document.getElementById('finishLabel').textContent = activeFinish;
            document.getElementById('surfaceHint').textContent = `${finishOptions.length} options available`;
            syncFilePartDetails();
        }

        function setupFinishModal() {
            const catList = document.getElementById('finishCatList');
            const optionsList = document.getElementById('finishOptionsList');

            const renderCategories = () => {
                catList.innerHTML = '';
                finishCategories.forEach((category) => {
                    const pill = document.createElement('div');
                    pill.className = `opt-pill mb-1 w-100 fs-12 justify-content-start ${
                        category.name === state.finishCategory ? 'active' : ''
                    }`;
                    pill.textContent = category.name;
                    pill.addEventListener('click', () => {
                        state.finishCategory = category.name;
                        state.finishIndex = 0;
                        renderCategories();
                        renderOptions();
                    });
                    catList.appendChild(pill);
                });
            };

            const renderOptions = () => {
                const selectedCategory = finishCategories.find((item) => item.name === state.finishCategory);
                optionsList.innerHTML = '';

                if (!selectedCategory) {
                    optionsList.innerHTML = '<p class="text-muted mb-0">No options available.</p>';
                    return;
                }

                optionsList.innerHTML = `<p class="quote-label-caps mb-2">${selectedCategory.name}</p>`;

                selectedCategory.options.forEach((option, index) => {
                    const row = document.createElement('div');
                    const isActive = option.name === activeFinish;
                    row.className = `radio-opt mb-2 ${isActive ? 'active' : ''}`;
                    row.innerHTML = `<input type="radio" name="finish" value="${option.name}" ${
                        isActive ? 'checked' : ''
                    }><div class="radio-opt-body"><strong>${option.name}</strong>${
                        option.description ? `<span>${option.description}</span>` : ''
                    }</div>`;
                    row.addEventListener('click', () => {
                        state.finishIndex = index;
                        activeFinish = option.name;
                        renderOptions();
                    });
                    optionsList.appendChild(row);
                });
            };

            document.getElementById('finishModal').addEventListener('show.bs.modal', () => {
                renderCategories();
                renderOptions();
            });

            document.getElementById('confirmFinish').addEventListener('click', () => {
                document.getElementById('finishLabel').textContent = activeFinish;
                syncFilePartDetails();
            });
        }

        function setupUploadZone() {
            const zone = document.getElementById('uploadZone');
            const input = document.getElementById('cadFile');

            zone.addEventListener('dragover', (event) => {
                event.preventDefault();
                zone.classList.add('dragover');
            });
            zone.addEventListener('dragleave', () => zone.classList.remove('dragover'));
            zone.addEventListener('drop', (event) => {
                event.preventDefault();
                zone.classList.remove('dragover');
                handleFiles(event.dataTransfer.files);
            });
            input.addEventListener('change', () => {
                handleFiles(input.files);
                input.value = '';
            });
        }

        function handleFiles(fileList) {
            const incomingFiles = Array.from(fileList || []);
            if (!incomingFiles.length) {
                return;
            }

            clearUploadError();

            for (const file of incomingFiles) {
                if (state.selectedFiles.length >= MAX_CAD_FILES) {
                    showUploadError(`Maximum ${MAX_CAD_FILES} files are allowed.`);
                    break;
                }

                const extension = file.name.split('.').pop()?.toLowerCase() || '';
                if (!ALLOWED_EXTENSIONS.includes(extension)) {
                    showUploadError(`Unsupported format: ${file.name}`);
                    continue;
                }

                if (file.size > MAX_CAD_FILE_SIZE) {
                    showUploadError(`${file.name} exceeds 200 MB.`);
                    continue;
                }

                state.selectedFiles.push(file);
            }

            renderSelectedFiles();
            renderPartsList();
        }

        function renderSelectedFiles() {
            const prompt = document.getElementById('uploadPrompt');
            const selectedList = document.getElementById('uploadSelectedList');
            selectedList.innerHTML = '';

            if (!state.selectedFiles.length) {
                prompt.classList.remove('d-none');
                selectedList.classList.add('d-none');
                return;
            }

            prompt.classList.add('d-none');
            selectedList.classList.remove('d-none');

            state.selectedFiles.forEach((file, index) => {
                const row = document.createElement('div');
                row.className = 'd-flex justify-content-between align-items-center border rounded-3 px-3 py-2 mb-2 bg-white';
                row.innerHTML = `<div class="small fw-semibold text-truncate pe-2">${file.name}</div>
                <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>`;
                row.querySelector('button').addEventListener('click', () => {
                    state.selectedFiles.splice(index, 1);
                    renderSelectedFiles();
                    renderPartsList();
                });
                selectedList.appendChild(row);
            });
        }

        function renderPartsList() {
            const partsList = document.getElementById('partsList');
            const partCount = document.getElementById('partCount');
            const submitBtn = document.getElementById('submitBtn');
            partsList.innerHTML = '';

            if (!state.selectedFiles.length) {
                partsList.innerHTML = `<div class="quote-empty-state"><i class="bi bi-cloud-upload fs-2 d-block mb-2"></i>Upload a CAD file to start</div>`;
                partCount.textContent = '0 added';
                submitBtn.disabled = true;
                return;
            }

            state.selectedFiles.forEach((file) => {
                const row = document.createElement('div');
                row.className = 'part-row';
                row.innerHTML = `<div>
                    <div class="part-name"><i class="bi bi-file-earmark-code text-primary me-1"></i>${file.name}</div>
                    <div class="part-detail">${buildPartDetailLabel()}</div>
                </div>
                <div class="part-price text-primary">RFQ</div>`;
                partsList.appendChild(row);
            });

            partCount.textContent = `${state.selectedFiles.length} ${state.selectedFiles.length === 1 ? 'part' : 'parts'}`;
            submitBtn.disabled = false;
        }

        function syncFilePartDetails() {
            if (state.selectedFiles.length) {
                renderPartsList();
            }
        }

        function buildPartDetailLabel() {
            const type = getActiveType();
            const colors = type?.colors || [];
            const processes = type?.processes || [];
            const selectedColor = colors[state.colorIndex]?.name;
            const selectedProcess = processes[state.processIndex]?.name;

            const base = [
                `Qty ${document.getElementById('qtyInput').value || 1}`,
                type?.name || getActiveMaterial()?.name || 'Material',
                activeFinish || 'Surface',
            ];

            if (selectedColor) {
                base.push(selectedColor);
            }
            if (state.serviceKey === '3d' && selectedProcess) {
                base.push(selectedProcess);
            }

            return base.join(' · ');
        }

        function createPill(label, isActive = false, colorCode = null) {
            const pill = document.createElement('div');
            pill.className = `opt-pill ${isActive ? 'active' : ''}`;
            const swatch = colorCode
                ? `<span class="color-swatch" style="background-color: ${colorCode}; width: 13px; height: 13px; display: inline-block; border: 1px solid #f2f2f2; margin: 0px 3px -2px 1px;"></span>`
                : '';
            pill.innerHTML = `<span class="pill-check"><i class="bi bi-check"></i></span> <span class="color-pill-label">${swatch}<span>${label}</span></span>`;
            return pill;
        }

        function normalizeColorCode(code, colorName) {
            const raw = String(code || '').trim();
            if (raw) {
                if (/^[0-9a-fA-F]{3}$|^[0-9a-fA-F]{6}$/.test(raw)) {
                    return `#${raw}`;
                }
                if (/^#[0-9a-fA-F]{3}$|^#[0-9a-fA-F]{6}$/.test(raw)) {
                    return raw;
                }
                return raw;
            }

            const fallbackByName = {
                black: '#000000',
                white: '#ffffff',
                red: '#ff0000',
                green: '#008000',
                blue: '#0000ff',
                yellow: '#ffff00',
                orange: '#ffa500',
                gray: '#808080',
                grey: '#808080',
                silver: '#c0c0c0',
                gold: '#ffd700',
                pink: '#ffc0cb',
                purple: '#800080',
                brown: '#8b4513',
            };

            const key = String(colorName || '').trim().toLowerCase();
            return fallbackByName[key] || '#d9d9d9';
        }

        function showUploadError(message) {
            const el = document.getElementById('uploadError');
            el.textContent = message;
            el.classList.remove('d-none');
        }

        function clearUploadError() {
            const el = document.getElementById('uploadError');
            el.textContent = '';
            el.classList.add('d-none');
        }

        // ─── Ship date ───
        function calcShipDate() {
            const d = new Date();
            let added = 0;
            while (added < 5) {
                d.setDate(d.getDate() + 1);
                if (d.getDay() !== 0 && d.getDay() !== 6) added++;
            }
            const opts = { day: 'numeric', month: 'short', year: 'numeric' };
            document.getElementById('shipDate').textContent = 'Est. shipment: ' + d.toLocaleDateString('en-IN', opts);
        }
    </script>

@endpush