<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Payments;
use App\Models\Setting;
use App\Models\UserShippingAddress;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Razorpay\Api\Api;

class UserOrderController extends Controller
{
    public function index()
    {   
        $order = Orders::with('userDetails')->orderBy('id', 'desc')->where('user_id', Auth::user()->id)->get();
        return view('user.order.index', compact('order'));
    }  
    
    // public function orders_details(Request $request, $order_number){


    //     $orderDetails = Orders::where('order_number', $order_number)->first();
    //     if($orderDetails){
    //         $order_id = '';
    //         if($orderDetails->status=='processing'){
    //             $api = new Api(
    //                 config('razorpay.key'),
    //                 config('razorpay.secret')
    //             );

    //             $order = $api->order->create([
    //                 'receipt' => $orderDetails->order_number,
    //                 'amount' => ($orderDetails->total)*100,
    //                 'currency' => 'INR'
    //             ]);

    //             $order_id = $order['id'];
    //             session([
    //                 'order_id' => $orderDetails->order_number,
    //             ]);
    //         }

    //         return view('user.order.details', compact('orderDetails', 'order_id'));
    //     }else{
    //         return redirect(route('admin.my_order'));
    //     }

        
    // }

    public function orders_details(Request $request, $order_number)
    {
        $orderDetails = Orders::where(
            'order_number',
            $order_number
        )->first();

        if($orderDetails){

            $address = UserShippingAddress::where('user_id', Auth::user()->id)->first();
        
            return view(
                'user.order.details',
                compact('orderDetails', 'address')
            );

        }else{

            return redirect(route('admin.my_order'));

        }
    }

    public function cancelOrder(Request $request)
    {
        $order_id = $request->orderId;
        $order = Orders::where('id', $order_id)->first();
        if($order){
            $order->status = 'cancelled';
            $order->save();
            return response()->json(['status' => 'success', 'message' => 'Order cancelled successfully']);
        }else{
            return response()->json(['status' => 'error', 'message' => 'Order not found']);
        }
    }

    public function invoice(Request $request, $order_id)
    {
        $today = Carbon::today()->format('Y-m-d');
        $order_id = Crypt::decrypt($order_id);

        $orderDetails = Orders::where('id', $order_id)->first();
        $payment = Payments::where('order_id', $orderDetails->order_number)->first();
        $setting = Setting::first();

        $pdf = Pdf::loadView('invoice.index', compact('payment', 'setting', 'orderDetails'));
        $pdf->setOptions(['isRemoteEnabled' => true]);

        // return $pdf->stream('invoice_'.$today.'.pdf');
        return $pdf->download('invoice_'.$today.'.pdf');

    }

    public function order_success(Request $request)
    {
        $order_id = $request->order_id;
        return view('user.order.success', compact('order_id'));
    }

}
