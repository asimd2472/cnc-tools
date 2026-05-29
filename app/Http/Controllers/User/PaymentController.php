<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Payments;
use App\Models\UserShippingAddress;
use Illuminate\Http\Request;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
    // public function payment(Request $request)
    // {   
    //     $api = new Api(
    //         config('razorpay.key'),
    //         config('razorpay.secret')
    //     );

    //     try {

    //         $attributes = [
    //             'razorpay_order_id' => $request->razorpay_order_id,
    //             'razorpay_payment_id' => $request->razorpay_payment_id,
    //             'razorpay_signature' => $request->razorpay_signature
    //         ];

    //         $api->utility->verifyPaymentSignature($attributes);

    //         Payments::create([
    //             'order_id' => session('order_id'),
    //             'razorpay_order_id' => $request->razorpay_order_id,
    //             'payment_id' => $request->razorpay_payment_id,
    //             'signature' => $request->razorpay_signature,
    //             'amount' => $request->amount,
    //             'status' => 'success'
    //         ]);

    //         Orders::where('order_number', session('order_id'))->update(['payment_status' => 'paid', 'status' => 'confirmed']);

    //         return redirect()->route('user.payment.success', ['razorpay_payment_id' => $request->razorpay_payment_id]);
    

    //     } catch (\Exception $e) {

    //         return redirect()->back()->with('error', $e->getMessage());
    //     }
    // }

    public function payment(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | Save Address
        |--------------------------------------------------------------------------
        */

        $address = UserShippingAddress::create([

            'user_id' => auth()->id(),

            'name' => $request->name,

            'phone' => $request->phone,

            'address' => $request->address,

            'city' => $request->city,

            'state' => $request->state,

            'pincode' => $request->pincode,

            'landmark' => $request->landmark,

            'address_type' => $request->address_type

        ]);

        /*
        |--------------------------------------------------------------------------
        | Get Order
        |--------------------------------------------------------------------------
        */

        $order = Orders::where(
            'order_number',
            $request->order_number
        )->firstOrFail();

        /*
        |--------------------------------------------------------------------------
        | Update Order Address
        |--------------------------------------------------------------------------
        */

        $order->shipping_address = $address->id;
        $order->save();

        /*
        |--------------------------------------------------------------------------
        | Create Razorpay Order
        |--------------------------------------------------------------------------
        */

        $api = new Api(
            config('razorpay.key'),
            config('razorpay.secret')
        );

        $razorpayOrder = $api->order->create([

            'receipt' => $order->order_number,

            'amount' => $order->total * 100,

            'currency' => 'INR'

        ]);

        /*
        |--------------------------------------------------------------------------
        | Save Razorpay Order ID
        |--------------------------------------------------------------------------
        */

        // $order->razorpay_order_id = $razorpayOrder['id'];

        // $order->save();

        /*
        |--------------------------------------------------------------------------
        | Return JSON
        |--------------------------------------------------------------------------
        */

        return response()->json([

            'success' => true,

            'key' => config('razorpay.key'),

            'amount' => $order->total * 100,

            'razorpay_order_id' => $razorpayOrder['id'],

            'order_number' => $order->order_number,

            'name' => $request->name,

            'email' => auth()->user()->email,

            'phone' => $request->phone

        ]);
    }

    // public function paymentSuccess($razorpay_payment_id)
    // {
    //     return view('user.payment.success', compact('razorpay_payment_id'));
    // }

    public function paymentSuccess(Request $request)
    {
        $api = new Api(
            config('razorpay.key'),
            config('razorpay.secret')
        );

        try {

            $attributes = [

                'razorpay_order_id'
                    => $request->razorpay_order_id,

                'razorpay_payment_id'
                    => $request->razorpay_payment_id,

                'razorpay_signature'
                    => $request->razorpay_signature

            ];

            $api->utility
                ->verifyPaymentSignature($attributes);

            /*
            |--------------------------------------------------------------------------
            | Get Order
            |--------------------------------------------------------------------------
            */

            $order = Orders::where(
                'order_number',
                $request->order_number
            )->firstOrFail();

            /*
            |--------------------------------------------------------------------------
            | Save Payment
            |--------------------------------------------------------------------------
            */

            Payments::create([

                'order_id' => $order->order_number,

                'razorpay_order_id'
                    => $request->razorpay_order_id,

                'payment_id'
                    => $request->razorpay_payment_id,

                'signature'
                    => $request->razorpay_signature,

                'amount'
                    => $order->total,

                'status'
                    => 'success'

            ]);

            /*
            |--------------------------------------------------------------------------
            | Update Order
            |--------------------------------------------------------------------------
            */

            $order->update([

                'payment_status' => 'paid',

                'status' => 'confirmed',

            ]);

            // return redirect()->route(
            //     'user.payment.success',
            //     [
            //         'razorpay_payment_id'
            //             => $request->razorpay_payment_id
            //     ]
            // );

            return redirect()->route(
                'user.payment.success.page',
                [
                    'razorpay_payment_id'
                        => $request->razorpay_payment_id
                ]
            );

        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }

    public function success($razorpay_payment_id)
    {
        return view(
            'user.payment.success',
            compact('razorpay_payment_id')
        );
    }

    public function webhook(Request $request)
    {
        $webhookSecret = config('razorpay.webhook_secret');

        $payload = $request->getContent();
        $signature = $request->header('X-Razorpay-Signature');

        try {

            $api = new Api(
                config('razorpay.key'),
                config('razorpay.secret')
            );

            $api->utility->verifyWebhookSignature(
                $payload,
                $signature,
                $webhookSecret
            );

            $data = json_decode($payload, true);

            $event = $data['event'];

            if ($event == 'payment.captured') {

                $paymentId = $data['payload']['payment']['entity']['id'];

                // Update order status here

            }

            return response()->json([
                'status' => true
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 400);
        }
    }
}
