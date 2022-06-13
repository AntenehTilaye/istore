<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SendEmailController;
use App\Mail\AccountMail;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    function dashboard(Request $request)
    {
        $store_count = count(DB::table('stores')->get());
        $product_count = count(DB::table('products')->get());
        $order_count = count(DB::table('orders')->get());
        $delivered_count = count(DB::table('orders')->where('status', 2)->get());
        $numOfOrdersByDay = DB::table('orders')
                                ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(created_at) as num'))
                                ->groupBy(DB::raw('cast(created_at AS DATE)'))
                                ->get();
        $numOfProductsByDay = DB::table('products')
                                ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(created_at) as num'))
                                ->groupBy(DB::raw('cast(created_at AS DATE)'))
                                ->get();
        // return $cats;
        return view('dashboard.admin.stats', ['numOfOrdersByDay'=>$numOfOrdersByDay,'numOfProductsByDay'=>$numOfProductsByDay,'store_count'=>$store_count, 'product_count'=>$product_count, 'order_count'=>$order_count, 'delivered_count'=>$delivered_count]);
    }


    function check(Request $request){
         //Validate Inputs
         $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email is not exists in admins table'
         ]);

         $creds = $request->only('email','password');

         if( Auth::guard('admin')->attempt($creds) ){
             return redirect()->route('admin.home');
         }else{
             return redirect()->route('admin.login')->with('fail','Incorrect credentials');
         }
    }

    function create(Request $request){
        $ranPass = Str::random(6);
        //Validate inputs
        $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:admins',
           'phone'=>'required|size:10',
           'address'=>'required',
        ]);

        $store = new Admin();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->address = $request->address;

        $store->password = Hash::make($ranPass);
        $save = $store->save();

        if( $save ){
            
            Mail::to($request->email)->send(new AccountMail($request->name, $request->email, $ranPass));
 
            if (Mail::failures()) {

                return redirect()->back()->with('success','The Admin is successfully registered, But can not send an Email.');

            }else{
                return redirect()->back()->with('success','The Admin is successfully registered and Email is Sent with Account Information');

               }

        }else{
            return redirect()->back()->with('fail','Something went Wrong, failed to register');
        }
  }

  
  function destroy(Admin $admin){
    $admin->delete();
    return redirect("/admin/admins")->with('success','The Admin is successfully Deleted');
  }

  function update(Admin $admin){
    //Validate inputs
    if(request()->email != $admin->email) {
        request()->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'phone'=>'required|size:10',
            'address'=>'required',
            ]);
    } else {
        request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|size:10',
            'address'=>'required',
            ]);
    }
    

    $data = [
    'name' => request()->name,
    'email' => request()->email,
    'phone' => request()->phone,
    'address' => request()->address
    ];

    $save = $admin->update($data);

    if( $save ){
        if(request()->email != $admin->email){

            Mail::to(request()->email)->send(new AccountMail(request()->name, request()->email, 'Your Password'));
    
            if (Mail::failures()) {
    
                return redirect()->back()->with('success','The Admin is successfully Updated, But can not send an Email.');
    
            }else{
                return redirect()->back()->with('success','The Admin is successfully Updated and Email is Sent with an Update');
    
               }
        } else {
            return redirect('/admin/admins')->with('success','The Admin is successfully Updated');
    
        }

    }else{
        return redirect()->back()->with('fail','Something went Wrong, failed to register');
    }
}


    function edit_admin(Admin $admin){
        // $admin = DB::table('admins')->where('id', '=', );
        return view('dashboard.admin.edit_admin', compact('admin'));
    }
  
    function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    function setting(Admin $admin){
        if(Auth::guard('admin')->user()->id == $admin->id){
            return view('dashboard.admin.setting', compact('admin'));
        } else {
            return redirect('/admin/home');
        }
   }

   function profile(Admin $admin){

        if(Auth::guard('admin')->user()->id == $admin->id){
            return view('dashboard.admin.profile', compact('admin'));
        } else {
            return redirect('/admin/home');
        }
    }

   function changepass(Admin $admin){
            //Validate inputs
            request()->validate([
            'oldpassword'=>'required|min:6|max:50',
            'password'=>'required|min:6|max:50',
            'cpassword'=>'required|min:6|max:50|same:password'
            ]);

            // check old pass is correct
        if(Hash::check(request()->oldpassword, $admin->password)) {


            $data = [
                'password' => Hash::make(request()->password),
                ];
            
                $save = $admin->update($data);
            
                if( $save ){
                    
                    return redirect()->back()->with('success','The Password is successfully Updated');
            
                } else{
                    return redirect()->back()->with('fail','Something went Wrong, failed to change the password');
                }
        } else {
            return redirect()->back()->with('fail','Old Password is incorrect!');
        }
}

    function stores(Request $request){
        $stores = Store::latest()->paginate(6);
        return view('dashboard.admin.store', compact('stores'))->with(request()->input('page'));
   }

   function admins(Request $request){
        $admins = Admin::latest()->paginate(6);
        return view('dashboard.admin.admin', compact('admins'))->with(request()->input('page'));
    }

    
}
