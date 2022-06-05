<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    function add_order(Request $request)
    {

        request()->validate([
            'name' => 'required|regex:/[a-zA-Z0-9\s]+/|max:250',
            'address' => 'required|regex:/[a-zA-Z0-9\s]+/|max:250',
            'phone' => 'required|size:10',
            'store_id' => 'required',
        ]);

        $order = new Order();
        $order->name = $request->name;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->storeId = $request->store_id;
        DB::beginTransaction();
        $save = $order->save();
        
        $success_count = 0;
        $all_count = 0;
        if ($save) {
            $orderId = $order->id;

            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);

            foreach ($cart_data as $data){
                $orderproduct = new OrderProduct();
                $orderproduct->orderId = $orderId;
                $orderproduct->productId = $data["item_id"];
                $orderproduct->price = $data["item_price"];
                $orderproduct->quantity = $data["item_quantity"];
                $orderproduct->product_name = $data["item_name"];
                $orderproduct->product_image = $data["item_image"];
                $orderproduct->save();
                $save2 = $order->save();
                if($save2){
                    $success_count += 1;
                }
                $all_count += 1;
            }

            if($success_count == $all_count ){
                DB::commit();
                Cookie::queue(Cookie::forget('shopping_cart'));
                return redirect()->back()->with('success', 'Your Order is successfully Placed');

            } else {
                DB::rollBack();
                return redirect()->back()->with('fail', 'Something went Wrong, failed to place your Order');
            }

        } else {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Something went Wrong, failed to place your Order');
        }
        
    }

   function orders(Request $request){
        $orders = DB::table('orders')->where('storeId', Auth::guard('store')->user()->id)->paginate(6);
        return view('dashboard.store.orders', compact('orders'))->with(request()->input('page'));
   }

   function detail (Order $order){
        $ordered = OrderProduct::where('order_products.orderId', $order->id)->get();
        return view('dashboard.store.order_detail', ['theOrder'=>$order, 'ordered'=>$ordered])->with(request()->input('page'));
    }

   
   function destroy(Order $order)
   {
        
    
        $ordered = OrderProduct::where('order_products.orderId', $order->id)->delete();
       $order->delete();
       return redirect("/store/orders")->with('success', 'The Order is successfully Deleted');
   }
    
}
