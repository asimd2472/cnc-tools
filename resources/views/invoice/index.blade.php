<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            color: #333;
            font-size: 12px;
            line-height: 1.5;
        }

        .container {
            width: 100%;
        }

        .header {
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .company-name {
            font-size: 24px;
            font-weight: bold;
            color: #0d6efd;
        }

        .invoice-title {
            font-size: 28px;
            font-weight: bold;
            text-align: right;
        }

        .address-table {
            width: 100%;
            margin-bottom: 20px;
        }

        .address-table td {
            vertical-align: top;
            width: 50%;
        }

        .section-title {
            background: #f4f6f9;
            padding: 8px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .product-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .product-table th {
            background: #0d6efd;
            color: #fff;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .product-table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .text-right {
            text-align: right;
        }

        .summary {
            width: 40%;
            margin-left: auto;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .summary td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .total-row {
            background: #0d6efd;
            color: #fff;
            font-weight: bold;
            font-size: 14px;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            border-top: 1px solid #ddd;
            padding-top: 15px;
            color: #777;
        }
    </style>
</head>

<body>

<div class="container">

    <table width="100%" class="header">
        <tr>
            <td>
                <div class="company-name">
                    {{$setting->company_name}}
                </div>
                <div>

                    {{$setting->email}}<br>
                    {{$setting->phone}}<br>
                    GSTIN: {{$setting->gst}}
                </div>
            </td>

            <td class="text-right">
                <div class="invoice-title">INVOICE</div>
                <strong>Invoice #:</strong> INV-0{{$payment->id}}<br>
                <strong>Order Date:</strong>
                {{ $orderDetails->created_at->format('d M Y') }}<br>

                <strong>Invoice Date:</strong>
                {{ $payment->created_at->format('d M Y') }}<br>
                <strong>Order ID:</strong> {{$orderDetails->order_number}}
            </td>
        </tr>
    </table>

    <table class="address-table">
        <tr>
            @if($orderDetails->shippingAddress)
            <td>
                <div class="section-title">Bill To</div>

                <strong>{{ucfirst($orderDetails->shippingAddress->name)}}</strong><br>
                {{$orderDetails->shippingAddress->address}}<br>
                {{$orderDetails->shippingAddress->landmark}}<br>
                {{$orderDetails->shippingAddress->city}}, {{$orderDetails->shippingAddress->pincode}}, {{$orderDetails->shippingAddress->state}}
                <br>
                Phone: {{$orderDetails->shippingAddress->phone}}
            </td>

            <td>
                <div class="section-title">Ship To</div>

                <strong>{{ucfirst($orderDetails->shippingAddress->name)}}</strong><br>
                {{$orderDetails->shippingAddress->address}}<br>
                {{$orderDetails->shippingAddress->landmark}}<br>
                {{$orderDetails->shippingAddress->city}}, {{$orderDetails->shippingAddress->pincode}}, {{$orderDetails->shippingAddress->state}}
                <br>
                Phone: {{$orderDetails->shippingAddress->phone}}
            </td>
            @endif
        </tr>
    </table>

    <table class="product-table">
        <thead>
        <tr>
            <th width="10%">#</th>
            <th width="50%">Product</th>
            <th width="15%">Qty</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($orderDetails->details as $key => $order)
                <tr>
                    <td>{{($key+1)}}</td>
                    <td>{{$order->manufacturingTypes->name}}</td>
                    <td class="text-right">1</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="summary">
        <tr>
            <td>Subtotal</td>
            <td class="text-right">₹{{$orderDetails->subtotal}}</td>
        </tr>

        <tr>
            <td>Discount</td>
            <td class="text-right">- ₹{{$orderDetails->discount}}</td>
        </tr>

        <tr>
            <td>Shipping Charge</td>
            <td class="text-right">₹{{$orderDetails->shipping_charge}}</td>
        </tr>

        <tr class="total-row">
            <td>TOTAL</td>
            <td class="text-right">₹{{$orderDetails->total}}</td>
        </tr>
    </table>

    <div class="footer">
        <strong>Thank You For Your Purchase!</strong><br>
        If you have any questions about this invoice, please contact us at {{$setting->email}}.
    </div>

</div>

</body>
</html>