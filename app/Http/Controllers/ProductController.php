<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    function newproduct()
    {
        $cats = DB::table('categories')->where('store_id', Auth::guard('store')->user()->id)->get();
        // return $cats;
        return view('dashboard.store.newproduct', compact('cats'));
    }

    function create(Request $request)
    {

        //Validate inputs
        $request->validate([
            'name' => 'required|max:250|regex:/[a-zA-Z0-9\s]+/',
            'product_detail' => 'required|regex:/[a-zA-Z0-9\s]+/',
            'price' => 'required|numeric',
            'amount' => 'required|numeric',
            'category_id' => 'required|numeric',
            'picture' => 'required|file|mimes:jpg,png',
        ]);

        $filepath = $request->file('picture')->store('public/images');
        if ($filepath) {
            $pathArr = explode('/', $filepath);
            $filename = end($pathArr);

            $product = new Product();
            $product->name = $request->name;
            $product->product_detail = $request->product_detail;
            $product->price = $request->price;
            $product->amount = $request->amount;
            $product->category_id = $request->category_id;
            $product->picture = $filename;
            $product->store_id = Auth::guard('store')->user()->id;

            $save = $product->save();

            if ($save) {
                return redirect()->back()->with('success', 'The Product is successfully registered.');
            } else {
                return redirect()->back()->with('fail', 'Something went Wrong, failed to register');
            }
        } else {
            return redirect()->back()->with('fail', 'Something went Wrong, Can not upload the file selected');
        }
    }


    function destroy(Product $product)
    {
        $product->delete();
        return redirect("/store/products")->with('success', 'The Product is successfully Deleted');
    }

    function update(Product $product)
    {
        if (request()->hasFile('picture')) {

            request()->validate([
                'name' => 'required|regex:/[a-zA-Z0-9\s]+/|max:250',
                'product_detail' => 'required|regex:/[a-zA-Z0-9\s]+/',
                'price' => 'required|numeric',
                'amount' => 'required|numeric',
                'category_id' => 'required|numeric',
                'picture' => 'required|file|mimes:jpg,png',
            ]);

            $filepath = request()->file('picture')->store('public/images');

            if ($filepath) {
                $pathArr = explode('/', $filepath);
                $filename = end($pathArr);

                $data = [
                    'name' => request()->name,
                    'product_detail' => request()->product_detail,
                    'price' => request()->price,
                    'amount' => request()->amount,
                    'category_id' => request()->category_id,
                    'picture' => $filename
                ];

                $save = $product->update($data);

                if ($save) {
                    return redirect()->back()->with('success', 'The Product is successfully Updated.');
                } else {
                    return redirect()->back()->with('fail', 'Something went Wrong, failed to update');
                }
            } else {
                return redirect()->back()->with('fail', 'Something went Wrong, Can not upload the file selected');
            }
        } else {

            request()->validate([
                'name' => 'required|regex:/[a-zA-Z0-9\s]+/|max:250',
                'product_detail' => 'required|regex:/[a-zA-Z0-9\s]+/',
                'price' => 'required|numeric',
                'amount' => 'required|numeric',
                'category_id' => 'required|numeric',
            ]);


            $data = [
                'name' => request()->name,
                'product_detail' => request()->product_detail,
                'price' => request()->price,
                'amount' => request()->amount,
                'category_id' => request()->category_id,
            ];

            $save = $product->update($data);

            if ($save) {
                return redirect()->back()->with('success', 'The Product is successfully updated.');
            } else {
                return redirect()->back()->with('fail', 'Something went Wrong, failed to update');
            }
        }
    }

    function edit_product(Product $product)
    {
        $cats = DB::table('categories')->where('store_id', '=', Auth::guard('store')->user()->id)->get();
        return view('dashboard.store.edit_product', ['product' => $product, 'cats' => $cats]);
    }


    function show(Product $product)
    {

        return view('dashboard.store.show_product', compact('product'));
    }

    function products(Request $request){
        $products = Product::latest()->paginate(6);
        return view('dashboard.store.product', compact('products'))->with(request()->input('page'));
   }


}
