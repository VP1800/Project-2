<?php
// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('registerCategory');
    }
    public function registerCategory(Request $request)
    {
        // Validate the input data
        // print_r($request->all());
        $request->validate([
            'category'=>'required'
        ]);

        $category = new Category;
        $category->c_id = mt_rand(11111,99999);
        $category->name = $request['category'];
        $category->save();  //orm method without query
        return redirect('viewCategory');
        // or below uncommented
        // Redirect back to the form with a success message
        // return redirect('viewCategory')->back()->with('success', 'Category created successfully!');
    }
    public function view_category(){
        $category = Category::all();
        // $data = compact('employee','model2');
        $data = compact('category');
        return view('view-category')->with($data);
    }
}