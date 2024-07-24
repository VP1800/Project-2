<?php

use Illuminate\Support\Facades\Route;


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