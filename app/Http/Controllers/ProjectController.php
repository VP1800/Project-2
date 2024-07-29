<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Architect;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function create()
{
    $category = Category::all(); 
    $project = Architect::all();
    return view('registerproject', ['category' => $category, 'architect' => $project]);
}
    public function index()
    {
        return $this->create(); // Call the create method from the index method
    }
    public function registerProject(Request $request)
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

        $project = new Project();
        $project->c_id = $request['category_id'];
        $project->a_id = $request['architect_id'];
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('app/public/img'), $imageName);
        
        $project->image = $imageName;
        $project->save();
        return redirect('viewProject');
        
    }
    public function view_project(){
        $project = Project::select('project.*', 'category.name as c_name', 'architects.name as a_name')
                    ->join('category', 'project.c_id', '=', 'category.id')
                    ->join('architects', 'project.a_id', '=', 'architects.id')
                    ->get();
        $data = compact('project');
        return view('view-project')->with($data);
    }
}
