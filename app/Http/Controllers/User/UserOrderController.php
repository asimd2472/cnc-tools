<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\UserShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
}
