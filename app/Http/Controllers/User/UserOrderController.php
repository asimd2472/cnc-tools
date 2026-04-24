<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    public function index()
    {   
        $order = Orders::with('userDetails')->orderBy('id', 'desc')->get();
        return view('user.order.index', compact('order'));
    }  
    
    public function orders_details(Request $request, $order_number){

        $orderDetails = Orders::where('order_number', $order_number)->first();
        if($orderDetails){
            return view('user.order.details', compact('orderDetails'));
        }else{
            return redirect(route('admin.my_order'));
        }

        
    }
}
