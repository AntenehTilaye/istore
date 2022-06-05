<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    function create(Request $request)
    {

        //Validate inputs
        $request->validate([
            'category_name' => 'required|regex:/[a-zA-Z0-9\s]+/|max:250|unique:categories,name',
        ]);

        
        $cats = explode(' ', $request->category_name);
        $category = new Category();
        $category->name = $request->category_name;
        $category->link_name = Auth::guard('store')->user()->store_id.'_'.implode('_', $cats);
        $category->store_id = Auth::guard('store')->user()->id;

        $save = $category->save();

        if ($save) {
            return redirect()->back()->with('success', 'The Category is successfully registered.');
        } else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to register');
        }
        
    }


    function destroy(Category $category)
    {
        $category->delete();
        return redirect("/store/categorys")->with('success', 'The Category is successfully Deleted');
    }

    function update(Category $category)
    {

            request()->validate([
                'category_name' => 'required|regex:/[a-zA-Z0-9\s]+/|max:50'
            ]);

            $cats = explode(' ', request()->category_name);
            $link_name = implode('-', $cats);

            $data = [
                'name' => request()->category_name,
                'link_name' => $link_name
            ];


            $save = $category->update($data);

            if ($save) {
                return redirect()->back()->with('success', 'The Category is successfully updated.');
            } else {
                return redirect()->back()->with('fail', 'Something went Wrong, failed to update');
            }
        
    }

    function edit_category(Category $category)
    {
        // $category = DB::table('categorys')->where('id', '=', );
        return view('dashboard.store.edit_category', compact('category'));
    }

    
   function categorys(Request $request){
        $categorys = Category::latest()->paginate(5);
        return view('dashboard.store.category', compact('categorys'))->with(request()->input('page'));
    }

}
