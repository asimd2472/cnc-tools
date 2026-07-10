@extends('user.layouts.user')

@section('content')

<div class="app-content-header">
    <div class="container-fluid">
    <div class="row">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 gap-6">
            <div class="d-flex flex-column justify-content-center">
            <div class="d-flex align-items-center mb-1">
                <h5 class="mb-0">Order #{{$orderDetails->order_number}}</h5>
                @if($orderDetails->payment_status=='pending')
                    <h6 class="mb-0 align-items-center d-flex w-px-100 text-warning me-2 ms-2">
                        Pending
                    </h6>
                @elseif($orderDetails->payment_status=='paid')
                    <h6 class="mb-0 align-items-center d-flex w-px-100 text-success me-2 ms-2">
                        Paid
                    </h6>
                @elseif($orderDetails->payment_status=='failed')
                    <h6 class="mb-0 align-items-center d-flex w-px-100 text-danger me-2 ms-2">
                        Failed
                    </h6>
                @elseif($orderDetails->payment_status=='refunded')
                    <h6 class="mb-0 align-items-center d-flex w-px-100 text-secondary me-2 ms-2">
                        Refunded
                    </h6>
                @endif

                @if($orderDetails->status=='pending')
                    <span class="badge bg-warning text-dark">Pending</span>
                @elseif($orderDetails->status=='confirmed')
                    <span class="badge bg-primary">Confirmed</span>
                @elseif($orderDetails->status=='processing')
                    <span class="badge rounded-pill bg-info text-dark">Processing</span>
                @elseif($orderDetails->status=='delivered')
                    <span class="badge rounded-pill bg-success">Delivered</span>
                @elseif($orderDetails->status=='cancelled')
                    <span class="badge rounded-pill bg-danger">Cancelled</span>
                @elseif($orderDetails->status=='shipped')
                    <span class="badge rounded-pill bg-secondary">Pending</span>
                @endif
            </div>
            <p class="mb-0">{{ \Carbon\Carbon::parse($orderDetails->created_at)->format('M d, Y') }}</p>
            </div>

            <div class="d-flex align-content-center flex-wrap gap-2">
                @if($orderDetails->status=='processing')
                    <button class="btn btn-success waves-effect" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</button>
                @endif
                @if($orderDetails->status=='processing' || $orderDetails->status=='pending')
                    <button class="btn btn-warning waves-effect" onclick="cancelOrder('{{$orderDetails->id}}')">Cancel order</button>
                @endif
                @if($orderDetails->status=='cancelled')
                    <button class="btn btn-warning waves-effect">Cancelled</button>
                @endif
            </div>

            <!-- Payment Modal -->
            <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="paymentModalLabel">Enter Address Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- <form id="razorpay-address-form" action="{{ route('user.payment') }}" method="POST"> --}}
                        <form id="razorpay-address-form" action="{{ route('user.payment') }}" method="POST">
                            @csrf
                            <input type="hidden"
                                name="order_number"
                                value="{{ $orderDetails->order_number }}">

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{@$address->name}}" required>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{@$address->phone}}" required>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" value="{{@$address->address}}" required>
                                    </div>
                                    
                                    <div class="col-6 mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city" value="{{@$address->city}}" required>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" name="state" value="{{@$address->state}}" required>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="pincode" class="form-label">Pincode</label>
                                        <input type="text" class="form-control" id="pincode" name="pincode" value="{{@$address->pincode}}" required>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="landmark" class="form-label">Landmark</label>
                                        <input type="text" class="form-control" id="landmark" value="{{@$address->landmark}}" name="landmark">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="address_type" class="form-label">Address Type</label>
                                        <select class="form-select" id="address_type" name="address_type" required>
                                            <option value="home" {{@$address->address_type=='home' ? 'selected' : ''}}>Home</option>
                                            <option value="office" {{@$address->address_type=='office' ? 'selected' : ''}}>Office</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Razorpay Script -->
                                {{-- <div id="razorpay-script-container" style="display:none;">
                                    <script
                                        src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="{{ config('razorpay.key') }}"
                                        data-amount="{{ ($orderDetails->total)*100 }}"
                                        data-currency="INR"
                                        data-order_id="{{ $order_id }}"
                                        data-buttontext="Pay Now"
                                        data-name="My Website"
                                        data-description="Order Payment"
                                        data-image="https://your-logo-url.com/logo.png"
                                        data-theme.color="#3399cc">
                                    </script>
                                </div> --}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                {{-- <button type="submit" class="btn btn-success">Proceed to Pay</button> --}}
                                <button type="submit"
                                        class="btn btn-success"
                                        id="payBtn">

                                    <span id="payBtnText">
                                        Proceed To Pay
                                    </span>

                                    <span id="payBtnLoader"
                                        class="spinner-border spinner-border-sm d-none"
                                        role="status">
                                    </span>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- <form action="{{ route('user.payment') }}" method="POST">
                @csrf

                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="{{ config('razorpay.key') }}"
                    data-amount="{{ ($orderDetails->total)*100 }}"
                    data-currency="INR"
                    data-order_id="{{ $order_id }}"
                    data-buttontext="Pay Now"
                    data-name="My Website"
                    data-description="Order Payment"
                    data-image="https://your-logo-url.com/logo.png"
                    data-theme.color="#3399cc">
                </script>
            </form> --}}
        </div>
    </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary mb-4">
                            <div class="card-body">
                                <h6 class="mb-3 fw-semibold text-uppercase text-muted">Order details</h6>
                                        
                                @foreach ($orderDetails->details as $key => $order)
                                    <div class="">
                                        <h4 class="mb-6"> {{($key+1)}} {{$order->manufacturingTypes->name}}</h4>

                                        <hr>

                                        <!-- Basic Info -->
                                        <div class="row mb-4">
                                            <div class="col-md-3"><strong>Quantity:</strong></div>
                                            <div class="col-md-9">{{ $order->quantity }}</div>

                                            <div class="col-md-3"><strong>Design Units:</strong></div>
                                            <div class="col-md-9">{{ $order->design_units }}</div>

                                            <div class="col-md-3"><strong>Material:</strong></div>
                                            <div class="col-md-9">{{ $order->material }}</div>

                                            <div class="col-md-3"><strong>Material Type:</strong></div>
                                            <div class="col-md-9">{{ $order->material_type }}</div>

                                            <div class="col-md-3"><strong>Color:</strong></div>
                                            <div class="col-md-9"><em style="width: 13px; height: 13px; display: inline-block; background-color: {{ $order->color_code }}"></em> {{ $order->color }}</div>

                                            <div class="col-md-3"><strong>Process:</strong></div>
                                            <div class="col-md-9">{{ $order->process ?? 'N/A' }}</div>

                                            <div class="col-md-3"><strong>Infill:</strong></div>
                                            <div class="col-md-9">{{ $order->infill ?? 'N/A' }}</div>
                                        </div>

                                        <hr>

                                        <!-- Files -->
                                        <div class="row mb-4">
                                            <div class="col-md-3"><strong>CAD File:</strong></div>
                                            <div class="col-md-9">
                                                @if($order->cad_file)
                                                    <a href="{{ asset('storage/'.$order->cad_file) }}" target="_blank" class="btn btn-sm btn-outline-primary">View File</a>
                                                @else
                                                    <span class="text-muted">N/A</span>
                                                @endif
                                            </div>

                                            <div class="col-md-3 mt-2"><strong>Technical Drawing:</strong></div>
                                            <div class="col-md-9 mt-2">
                                                @if($order->technical_drawing_file)
                                                    <a href="{{ asset('storage/'.$order->technical_drawing_file) }}" target="_blank" class="btn btn-sm btn-outline-primary">View File</a>
                                                @endif
                                            </div>
                                        </div>

                                        <hr>

                                        <!-- Manufacturing Options -->
                                        <div class="row mb-4">
                                            <div class="col-md-3"><strong>Threads & Holes:</strong></div>
                                            <div class="col-md-9">
                                                {{ $order->threads_and_tapped_holes }} 

                                            </div>

                                            <div class="col-md-3 mt-2"><strong>Inserts:</strong></div>
                                            <div class="col-md-9 mt-2">
                                                {{ $order->inserts }}
                                                
                                            </div>

                                            <div class="col-md-3"><strong>Tolerance:</strong></div>
                                            <div class="col-md-9">{{ $order->tolerance ?? 'N/A' }}</div>

                                            <div class="col-md-3"><strong>Surface Roughness:</strong></div>
                                            <div class="col-md-9">{{ $order->surface_roughness ?? 'N/A' }}</div>

                                            <div class="col-md-3 mt-2"><strong>Part Marking:</strong></div>
                                            <div class="col-md-9 mt-2">
                                                {{ $order->part_marking ?? 'N/A' }}
                                                
                                            </div>

                                            <div class="col-md-3 mt-2"><strong>Parts Assembly:</strong></div>
                                            <div class="col-md-9 mt-2">
                                                {{ $order->parts_assembly }}
                                            </div>

                                            <div class="col-md-3 mt-2"><strong>Printing risk:</strong></div>
                                            <div class="col-md-9 mt-2">
                                                {{-- <span class="badge bg-info">{{ $order->printing_risk ?? 'N/A' }}</span> --}}
                                                @php
                                                    $risks = json_decode($order->printing_risk, true);

                                                    $riskLabels = collect($risks ?? [])
                                                        ->filter(fn($value) => $value)
                                                        ->keys()
                                                        ->map(fn($key) => ucfirst($key))
                                                        ->implode(', ');
                                                @endphp

                                                <span class="badge bg-info">
                                                    {{ $riskLabels ?: 'N/A' }}
                                                </span>
                                            </div>

                                            <div class="col-md-3"><strong>Finished Appearance:</strong></div>
                                            <div class="col-md-9">
                                                {{ $order->finished_appearance ?? 'N/A' }}
                                            </div>
                                        </div>

                                        <hr>

                                        <!-- Inspection -->
                                        <div class="row mb-4">
                                            <div class="col-md-3"><strong>Inspection:</strong></div>
                                            <div class="col-md-9">
                                                {{ $order->inspection ?? 'N/A' }}
                                            </div>
                                        </div>

                                        <hr>

                                        <!-- Description -->
                                        <div class="row mb-4">
                                            <div class="col-md-4"><strong>Product Description:</strong></div>
                                            <div class="col-md-8">{{ $order->product_desc }}</div>

                                            <div class="col-md-4 mt-2"><strong>Special Request:</strong></div>
                                            <div class="col-md-8 mt-2">
                                                <div class="border rounded p-2 bg-light">
                                                    {{ $order->Other_special_request }}
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="col-md-12">
                    <div class="card order-summary-card shadow-sm card-primary mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="mb-0 fw-semibold text-uppercase text-muted">
                                    Price deytails
                                </h6>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Order Price</span>
                                <span class="fw-semibold">₹{{$orderDetails->subtotal}}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Discount</span>
                                <span class="text-danger fw-semibold">- ₹{{$orderDetails->discount}}</span>
                            </div>
                            <hr class="my-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Subtotal</span>
                                <span class="fw-semibold">₹{{($orderDetails->subtotal-$orderDetails->discount)}}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Shipping Charge</span>
                                <span class="fw-semibold">₹{{$orderDetails->shipping_charge}}</span>
                            </div>
                            <hr class="my-3">
                            <div class="d-flex justify-content-between align-items-center total-row">
                                <span class="fw-bold fs-6">Total</span>
                                <span class="fw-bold fs-5 text-primary">₹{{$orderDetails->total}}</span>
                            </div>

                            @if($orderDetails->payment_status=='paid')

                            <div class="text-center mt-4">
                                <a class="btn btn-outline-success waves-effect px-4 py-2"
                                href="{{ route('user.invoice', ['order_id' => Crypt::encrypt($orderDetails->id), 'type' => 'download']) }}"
                                target="_blank">
                                    <i class="fa-solid fa-download me-2"></i>
                                    Download Invoice
                                </a>
                            </div>

                            @endif

                        </div>
                    </div>
                </div>
                @if($orderDetails->payment_status=='paid')
                <div class="col-md-12">
                    <div class="card card-primary mb-3">
                        <div class="card-body">
                            <h6 class="mb-3 fw-semibold text-uppercase text-muted">Delivery details</h6>
                            @if($orderDetails->shippingAddress)
                            <p> <strong><i class="{{$orderDetails->shippingAddress->address_type == 'home' ? 'bi bi-house' : 'bi bi-building'}}"></i> {{ucfirst($orderDetails->shippingAddress->address_type)}} </strong> {{$orderDetails->shippingAddress->address}}, {{$orderDetails->shippingAddress->landmark}}, {{$orderDetails->shippingAddress->city}}, {{$orderDetails->shippingAddress->pincode}}, {{$orderDetails->shippingAddress->state}}</p>
                            <p> <strong><i class="bi bi-person"></i> {{ucfirst($orderDetails->shippingAddress->name)}} </strong> {{$orderDetails->shippingAddress->phone}}</p>
                            @endif
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="card card-primary mb-3">
                        <div class="card-body">
                            <h6 class="mb-3 fw-semibold text-uppercase text-muted">Payment Method</h6>
                            <p>Online (Razorpay)</p>
                        </div>
                    </div>
                </div>
                @endif
            </div>

                
        </div>
    </div>
</div>


@endsection

@push('scripts')
{{-- <script>
    // Show Razorpay script after address form validation
    document.getElementById('razorpay-address-form').addEventListener('submit', function(e) {
        // Optionally, add client-side validation here
        // Show Razorpay script container so the script is included in the form
        document.getElementById('razorpay-script-container').style.display = 'block';
    });
</script> --}}

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>

document.getElementById('razorpay-address-form')
.addEventListener('submit', function(e){

    e.preventDefault();

    /*
    |--------------------------------------------------------------------------
    | Button Loader Start
    |--------------------------------------------------------------------------
    */

    let payBtn = document.getElementById('payBtn');

    let payBtnText = document.getElementById('payBtnText');

    let payBtnLoader = document.getElementById('payBtnLoader');

    payBtn.disabled = true;

    payBtnText.innerText = 'Processing...';

    payBtnLoader.classList.remove('d-none');

    let formData = new FormData(this);

    fetch("{{ route('user.payment') }}", {

        method: "POST",

        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },

        body: formData

    })

    .then(response => response.json())

    .then(data => {

        if(data.success){

            var options = {

                "key": data.key,

                "amount": data.amount,

                "currency": "INR",

                "name": "My Website",

                "description": "Order Payment",

                "order_id": data.razorpay_order_id,

                "handler": function (response){

                    let form = document.createElement('form');

                    form.method = 'POST';

                    form.action = "{{ route('user.payment.success') }}";

                    form.innerHTML = `
                        @csrf

                        <input type="hidden"
                               name="razorpay_payment_id"
                               value="${response.razorpay_payment_id}">

                        <input type="hidden"
                               name="razorpay_order_id"
                               value="${response.razorpay_order_id}">

                        <input type="hidden"
                               name="razorpay_signature"
                               value="${response.razorpay_signature}">

                        <input type="hidden"
                               name="order_number"
                               value="${data.order_number}">
                    `;

                    document.body.appendChild(form);

                    form.submit();
                },

                "modal": {

                    "ondismiss": function(){

                        /*
                        |--------------------------------------------------------------------------
                        | Reset Button If User Closes Razorpay
                        |--------------------------------------------------------------------------
                        */

                        payBtn.disabled = false;

                        payBtnText.innerText =
                            'Proceed To Pay';

                        payBtnLoader.classList.add('d-none');
                    }

                },

                "prefill": {

                    "name": data.name,

                    "email": data.email,

                    "contact": data.phone

                },

                "theme": {

                    "color": "#3399cc"

                }

            };

            var rzp1 = new Razorpay(options);

            rzp1.open();

        }else{

            payBtn.disabled = false;

            payBtnText.innerText = 'Proceed To Pay';

            payBtnLoader.classList.add('d-none');

            alert('Something went wrong');

        }

    })

    .catch(error => {

        payBtn.disabled = false;

        payBtnText.innerText = 'Proceed To Pay';

        payBtnLoader.classList.add('d-none');

        alert('Server Error');

    });

});

</script>

@endpush