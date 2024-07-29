<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Http\Controllers\CategoryController;
use App\Models\Architect;
use App\Http\Controllers\ArchitectController;
use App\Models\Project;
use App\Http\Controllers\ProjectController;

// Route::get("home", function () {
//     return "Hello Laravel Route";
// });
// Route::get("hello/bye", function () {
//     return view('home');
// });


// Route::get("Youtube/heavy-coding", function () {
//     return view('home');
// });

// Route::view('hello','home');

Route::view('about-php','about');

//parameter route
// Route::get('parameter/{id}',function($id=""){
//     return $id;
// })->whereNumber('id');

// Route::get('parameter/{name?}',function($name=''){
//     return "This is ".$name;
// });

// Route::get('parameter/{name}',function($name=null){
//     return "This is ".$name;
// })->whereAlpha('name');

// Route::get('parameter/{common}',function($common=null){
//     return "This is ".$common;
// })->whereAlphaNumeric('common');

// Route::get('parameter/{common?}',function($common=null){
//     return "This is ".$common;
// })->where('common','[a-z0-9-]+');

// Route::get('parameter/{name}',function($name=null){
//     return "This is ".$name;
// })->whereIn('name',['youtube','you-tube']);

Route::get('/',function(){
    return "Hello Laravel Routes";
});
Route::get("home/introduction-about-company", function () {
        return view('home');
})->name('about');
Route::get("home/about", function () {
    return view('home');
})->name('about');
Route::get("home/information", function () {
    return view('home');
})->name('about');
Route::post('/categories', 'CategoryController@store');
Route::get('/test',function(){
    $emp = Employee::all();

    echo"<pre>";
    print_r($emp);
});
//demo
Route::get('/form',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);
Route::get('/view',[RegisterController::class,'view_employee']);
//Add Category
Route::get('/AddCategory',[CategoryController::class,'index']);
Route::post('/store',[CategoryController::class,'registerCategory']);
Route::get('/viewCategory',[CategoryController::class,'view_category']);
//Add Architect
Route::get('/AddArchitect',[ArchitectController::class,'index']);
Route::post('/storearchitect',[ArchitectController::class,'registerArchitect']);
Route::get('/viewArchitect',[ArchitectController::class,'view_architect']);
//Add photos
Route::get('/AddProject',[ProjectController::class,'index']);
Route::post('/storeproject',[ProjectController::class,'registerProject']);
Route::get('/viewProject',[ProjectController::class,'view_project']);