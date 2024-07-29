<?php
// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Architect;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;


class ArchitectController extends Controller
{
    public function create()
    {
        $category = Category::all(); // or any other method to retrieve a single category
        return view('registerarchitect', ['category' => $category]);
    }

    public function index()
    {
        return $this->create(); // Call the create method from the index method
    }
    public function registerArchitect(Request $request)
    {
        echo"<pre>";
        print_r($request->toArray());
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required|string|max:255',
            'image' => 'required|max:2048|image'
        ]);

        if ($validator->fails()) {
            echo"<pre>";
            print_r($request->toArray());
        }

        $architects = new Architect();
        $architects->c_id = $request['category_id'];
        $architects->name = $request['name'];
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('app/public/img'), $imageName);
        
        $architects->image = $imageName;
        $architects->save();
        return redirect('viewArchitect');
        
    }
    public function view_architect(){
        $architect = Architect::join('category', 'architects.c_id', '=', 'category.id')
                                ->select('architects.*', 'category.name as c_name')
                                ->get();
        $data = compact('architect');
        return view('view-architect')->with($data);
    }
}