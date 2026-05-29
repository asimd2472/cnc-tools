<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        
        $query = Orders::with('userDetails')->orderBy('id', 'desc');

        
        if ($request->from_date && $request->to_date) {
            $query->whereBetween('created_at', [
                $request->from_date . ' 00:00:00',
                $request->to_date . ' 23:59:59'
            ]);
        }

        
        if ($request->customer_name) {
            $query->whereHas('userDetails', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->customer_name . '%');
            });
        }

        
        if ($request->status) {
            $query->where('status', $request->status);
        }

        
        if ($request->payment_status) {
            $query->where('payment_status', $request->payment_status);
        }

       
        if ($request->ajax()) {

            return DataTables::of($query)

                ->addColumn('order_number', function ($row) {
                    return '<a href="'.route('admin.orders_details', $row->order_number).'"> #'.$row->order_number.' </a>';
                })

                ->addColumn('created_at', function ($row) {
                    return \Carbon\Carbon::parse($row->created_at)->format('M d, Y');
                })

                ->addColumn('users_details', function ($row) {
                    $image = $row->userDetails->profile_image 
                        ? asset('storage/images/'.$row->userDetails->profile_image)
                        : asset('images/default-profile.jpg');

                    return '
                        <div class="d-flex align-items-center gap-2">
                            <div class="avatar">
                                <img src="'.$image.'" class="rounded-circle" width="40" height="40">
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fw-semibold mb-0">'.$row->userDetails->name.'</span>
                                <small class="text-muted">'.$row->userDetails->email.'</small>
                            </div>
                        </div>
                    ';
                })

                ->addColumn('payment_status', function ($row) {

                    if ($row->payment_status == 'pending') {
                        return '<h6 class="mb-0 d-flex text-warning">
                            Pending
                        </h6>';
                    }

                    if ($row->payment_status == 'paid') {
                        return '<h6 class="mb-0 d-flex text-success">
                            Paid
                        </h6>';
                    }

                    if ($row->payment_status == 'failed') {
                        return '<h6 class="mb-0 d-flex text-danger">
                            Failed
                        </h6>';
                    }

                    if ($row->payment_status == 'refunded') {
                        return '<h6 class="mb-0 d-flex text-secondary">
                            Refunded
                        </h6>';
                    }

                })

                ->addColumn('status', function ($row) {

                    if ($row->status == 'pending') {
                        return '<span class="badge bg-warning text-dark">Pending</span>';
                    }

                    if ($row->status == 'confirmed') {
                        return '<span class="badge bg-primary">Confirmed</span>';
                    }

                    if ($row->status == 'processing') {
                        return '<span class="badge bg-info text-dark">Processing</span>';
                    }

                    if ($row->status == 'shipped') {
                        return '<span class="badge bg-secondary">Shipped</span>';
                    }

                    if ($row->status == 'delivered') {
                        return '<span class="badge bg-success">Delivered</span>';
                    }

                    if ($row->status == 'cancelled') {
                        return '<span class="badge bg-danger">Cancelled</span>';
                    }

                })

                ->addColumn('action', function ($row) {

                    return '
                        <div class="dropdown">
                            <div class="actionList" data-bs-toggle="dropdown">
                                <svg style="cursor:pointer" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="4" y1="21" x2="4" y2="14"></line>
                                    <line x1="4" y1="10" x2="4" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12" y2="3"></line>
                                    <line x1="20" y1="21" x2="20" y2="16"></line>
                                    <line x1="20" y1="12" x2="20" y2="3"></line>
                                </svg>
                            </div>
                            <div class="dropdown-menu">
                                <a class="dropdown-item text-danger" href="javascript:void(0)" onclick="deleteOrder('.$row->id.')">
                                    Delete
                                </a>
                            </div>
                        </div>
                    ';
                })

                ->rawColumns(['action', 'users_details', 'payment_status', 'status', 'order_number'])
                ->make(true);
        }

        $totalOrder = Orders::count();
        $pendingOrder = Orders::where('status', 'pending')->count();
        $cancelOrder = Orders::where('status', 'cancelled')->count();
        $deliveredOrder = Orders::where('status', 'delivered')->count();
        $pendingPayment = Orders::where('payment_status', 'pending')->sum('total');
        $completePayment = Orders::where('payment_status', 'paid')->sum('total');

        return view('admin.order.index', compact(
            'totalOrder',
            'pendingOrder',
            'cancelOrder',
            'deliveredOrder',
            'pendingPayment',
            'completePayment'
        ));
    }

    public function orders_details(Request $request, $order_number){

        $orderDetails = Orders::where('order_number', $order_number)->first();
        if($orderDetails){
            return view('admin.order.details', compact('orderDetails'));
        }else{
            return redirect(route('admin.orders'));
        }

        
    }

    public function deleteOrder(Request $request){
        $id = $request->orderId;
        Orders::where('id', $id)->delete();
        return response()->json([
            'status' => 1,
            'msg' => 'order Deleted successfully',
        ]);
    }

    public function updateSummary(Request $request)
    {
        $order = Orders::findOrFail($request->order_id);
        
        $order->payment_status = $request->payment_status;
        $order->subtotal = $request->subtotal;
        $order->discount = $request->discount;
        $order->shipping_charge = $request->shipping_charge;

        // auto calculate
        $subtotal = $request->subtotal - $request->discount;
        $total = $subtotal + $request->shipping_charge;

        
        $order->total = $total;

        $order->save();

        return response()->json([
            'success' => true,
            'msg' => 'Price update successfully',
        ]);
    }

    public function orderStatusUpdate(Request $request){
        $order = Orders::findOrFail($request->order_id);
        $order->status = $request->status;
        if($request->status == 'processing'){
            $order->subtotal = $request->subtotal;
            $order->discount = $request->discount;
            $order->shipping_charge = $request->shipping_charge;

            // auto calculate
            $subtotal = $request->subtotal - $request->discount;
            $total = $subtotal + $request->shipping_charge;

            
            $order->total = $total;

            $order->save();
        }

        return response()->json([
            'success' => true,
            'msg' => 'Status update successfully',
        ]);
    }
}
