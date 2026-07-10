@extends('user.layouts.user')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="text-center">
        <div class="success-animation mb-4">
            <svg width="120" height="120" viewBox="0 0 120 120">
                <circle cx="60" cy="60" r="54" fill="#e6f9ed" stroke="#34c759" stroke-width="4"/>
                <polyline points="40,65 55,80 85,50" fill="none" stroke="#34c759" stroke-width="6" stroke-linecap="round" stroke-linejoin="round">
                    <animate attributeName="points" dur="0.6s" values="40,65 55,80 55,80; 40,65 55,80 85,50" fill="freeze"/>
                </polyline>
            </svg>
        </div>
        <h2 class="text-success">Order Successful!</h2>
        <p>Your order was placed successfully.</p>
        @if($order_id!= null)
            <p><strong>Order ID:</strong> <span id="payment-id">{{ $order_id }}</span></p>
        @endif
        <a href="{{route('user.my_order')}}" class="btn btn-success mt-3">Go to Order</a>
    </div>
</div>

<style>
.success-animation {
    animation: pop-in 0.7s cubic-bezier(.68,-0.55,.27,1.55) both;
}
@keyframes pop-in {
    0% { transform: scale(0.5); opacity: 0; }
    80% { transform: scale(1.1); opacity: 1; }
    100% { transform: scale(1); }
}
</style>
@endsection
