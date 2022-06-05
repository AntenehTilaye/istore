<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Mail\AccountMail;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    function create(Request $request)
    {
        //Validate inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:stores,email',
            'password' => 'required|min:6|max:50',
            'cpassword' => 'required|min:6|max:50|same:password'
        ]);

        $store = new Store();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->password = Hash::make($request->password);
        $save = $store->save();

        if ($save) {
            return redirect()->back()->with('success', 'You are now registered successfully as Store');
        } else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to register');
        }
    }

    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'email' => 'required|email|exists:stores,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists in stores table'
        ]);

        // $creds = $request->only('email', 'password');
        $creds = [
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1
        ];
        
        // array_push($creds, );
        if (Auth::guard('store')->attempt($creds)) {
            return redirect()->route('store.home');
        } else {
            return redirect()->route('store.login')->with('fail', 'Incorrect Credentials');
        }
    }

    function logout()
    {
        Auth::guard('store')->logout();
        return redirect('/');
    }

    function destroy(Store $store)
    {
        $store->delete();
        return redirect("/admin/stores")->with('success', 'The Store is successfully Deleted');
    }

    function store_category_product($storeId, $catId, $productId)
    {
        if($catId == 'all_categories'){
        $store = DB::table('stores')->where('store_id', $storeId)->first();
        $product = DB::table('products')->where('id', $productId)->first(); 
        $cat = new Category();
        $cat->name = "All Categories";
        $cat->link_name = "all_categories";
        $products = DB::table('products')->where('store_id', $store->id)->where('category_id', $cat->id)->get();
        
  
        return view('front.product', ['store'=>$store, 'products'=>$products, 'product'=>$product ]);
        } else {
            $store = DB::table('stores')->where('store_id', $storeId)->first();
            $product = DB::table('products')->where('id', $productId)->first(); 
            $cat = DB::table('categories')->where('link_name', $catId)->first();
            $products = DB::table('products')->where('store_id', $store->id)->where('category_id', $cat->id)->get();
            
            return view('front.product', ['store'=>$store, 'products'=>$products, 'product'=>$product ]);
         
        }
    }

    function store_category($storeId, $catId)
    {
        if($catId == 'all_categories'){

            $store = DB::table('stores')->where('store_id', $storeId)->first();
            $categorys = DB::table('categories')->where('store_id', $store->id)->get();
            $cat = new Category();
            $cat->name = "All Categories";
            $cat->link_name = "all_categories";
            $products = DB::table('products')->where('store_id', $store->id)->paginate(6);
            
            return view('front.category', ['store'=>$store, 'categorys'=>$categorys, 'products'=>$products, 'cat'=>$cat])->with(request()->input('page'));
              
        } else {

            $store = DB::table('stores')->where('store_id', $storeId)->first();
            $categorys = DB::table('categories')->where('store_id', $store->id)->get();
            $cat = DB::table('categories')->where('link_name', $catId)->first();
            $products = DB::table('products')->where('store_id', $store->id)->where('category_id', $cat->id)->paginate(6);;
            
            return view('front.category', ['store'=>$store, 'categorys'=>$categorys, 'products'=>$products, 'cat'=>$cat, ])->with(request()->input('page'));
              
        }
         
    }

    function store_product($storeId, $productId)
    {
        
        $store = DB::table('stores')->where('store_id', $storeId)->first();
        $product = DB::table('products')->where('id', $productId)->first();
        $products = DB::table('products')->limit(6)->get();
  
        return view('front.product', ['store'=>$store, 'products'=>$products, 'product'=>$product ]);
          
    }

    function store($storeId)
    {
        $store = DB::table('stores')->where('store_id', $storeId)->first();
        $categorys = DB::table('categories')->where('store_id', $store->id)->get();
        $products = DB::table('products')->where('store_id', $store->id)->limit(8)->get();
        
        return view('front.store', ['store'=>$store, 'categorys'=>$categorys, 'products'=>$products]);
        
    }

    function update(Store $store)
    {
        if (request()->hasFile('logo')) {

            if (request()->email != $store->email) {
                request()->validate([
                    'name' => 'required|regex:/[a-zA-Z0-9\s]+/|max:250',
                    'email' => 'required|email|unique:stores',
                    'phone' => 'required|size:10',
                    'address' => 'required|max:250',
                    'store_name' => 'required|max:50',
                    'store_id' => 'required|max:30|unique:stores',
                    'store_detail' => 'required|regex:/[a-zA-Z0-9\s]+/',
                    'logo' => 'required|file|mimes:jpg,png',
                ]);
            } else {
                request()->validate([
                    'name' => 'required|regex:/[a-zA-Z0-9\s]+/|max:250',
                    'email' => 'required|email',
                    'phone' => 'required|size:10',
                    'address' => 'required|max:250',
                    'store_name' => 'required|max:50',
                    'store_id' => 'required|max:30|unique:stores',
                    'store_detail' => 'required|regex:/[a-zA-Z0-9\s]+/',
                    'logo' => 'required|file|mimes:jpg,png',
                ]);
            }

            $filepath = request()->file('logo')->store('public/images');

            if ($filepath) {
                $pathArr = explode('/', $filepath);
                $filename = end($pathArr);

                $data = [
                    'name' => request()->name,
                    'email' => request()->email,
                    'phone' => request()->phone,
                    'address' => request()->address,
                    'store_name' => request()->store_name,
                    'store_id' => request()->store_id,
                    'logo' => $filename,
                    'store_detail' => request()->store_detail
                ];

                $save = $store->update($data);

                if ($save) {
                    return redirect()->back()->with('success', 'The Product is successfully Updated.');
                } else {
                    return redirect()->back()->with('fail', 'Something went Wrong, failed to update');
                }
            } else {
                return redirect()->back()->with('fail', 'Something went Wrong, Can not upload the file selected');
            }
        } else {

            if (request()->email != $store->email) {
                request()->validate([
                    'name' => 'required|regex:/[a-zA-Z0-9\s]+/|max:250',
                    'email' => 'required|email|unique:stores',
                    'phone' => 'required|size:10',
                    'address' => 'required|max:250',
                    'store_name' => 'required|max:50',
                    'store_id' => 'required|max:30|unique:stores',
                    'store_detail' => 'required|regex:/[a-zA-Z0-9\s]+/'
                ]);
            } else {
                request()->validate([
                    'name' => 'required|regex:/[a-zA-Z0-9\s]+/|max:250',
                    'email' => 'required|email',
                    'phone' => 'required|size:10',
                    'address' => 'required|max:250',
                    'store_name' => 'required|max:50',
                    'store_id' => 'required|max:30|unique:stores',
                    'store_detail' => 'required|regex:/[a-zA-Z0-9\s]+/'
                ]);
            }


            $data = [
                'name' => request()->name,
                'email' => request()->email,
                'phone' => request()->phone,
                'address' => request()->address,
                'store_name' => request()->store_name,
                'store_id' => request()->store_id,
                'store_detail' => request()->store_detail
            ];

            $save = $store->update($data);

            if ($save) {
                return redirect()->back()->with('success', 'The Product is successfully updated.');
            } else {
                return redirect()->back()->with('fail', 'Something went Wrong, failed to update');
            }
        }
    }

    

    function edit_store(Store $store)
    {
        // $store = DB::table('stores')->where('id', '=', );
        return view('dashboard.store.edit_store', compact('store'));
    }


    function setting(Store $store)
    {
        if (Auth::guard('store')->user()->id == $store->id) {
            return view('dashboard.store.setting', compact('store'));
        } else {
            return redirect('/store/home');
        }
    }

    function profile(Store $store)
    {

        if (Auth::guard('store')->user()->id == $store->id) {
            return view('dashboard.store.profile', compact('store'));
        } else {
            return redirect('/store/home');
        }
    }

    function changepass(Store $store)
    {
        //Validate inputs
        request()->validate([
            'oldpassword' => 'required|min:6|max:50',
            'password' => 'required|min:6|max:50',
            'cpassword' => 'required|min:6|max:50|same:password'
        ]);

        // check old pass is correct
        if (Hash::check(request()->oldpassword, $store->password)) {


            $data = [
                'password' => Hash::make(request()->password),
            ];

            $save = $store->update($data);

            if ($save) {

                return redirect()->back()->with('success', 'The Password is successfully Updated');
            } else {
                return redirect()->back()->with('fail', 'Something went Wrong, failed to change the password');
            }
        } else {
            return redirect()->back()->with('fail', 'Old Password is incorrect!');
        }
    }


    function deactivate_store(Store $store)
    {
            $data = [
                'status' => 2,
            ];

            $save = $store->update($data);

            if ($save) {
                return redirect()->back()->with('success', 'The Store is successfully Deactivated.');
            } else {
                return redirect()->back()->with('fail', 'Something went Wrong, failed to Deactivate');
            }
        
    }

    function activate_store(Store $store)
    {
            $data = [
                'status' => 1,
            ];

            $save = $store->update($data);

            if ($save) {
                return redirect()->back()->with('success', 'The Store is successfully Activated.');
            } else {
                return redirect()->back()->with('fail', 'Something went Wrong, failed to Activate');
            }
        
    }

}
