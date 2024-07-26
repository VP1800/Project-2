<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }
    public function register(Request $request){
        
        print_r($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'doj'=>'required',
            'gender'=>'required'
        ]);

        $employee = new Employee;

        $employee->emp_id = mt_rand(11111,99999);
        $employee->name = $request['name'];
        $employee->email = $request['email'];
        $employee->address = $request['address'];
        $employee->doj = $request['doj'];
        $employee->gender = $request['gender'];
        $employee->status = 1;
        $employee->save();  //orm method without query
        return redirect('view');
    }
    public function view_employee(){
        $employee = Employee::all();
        // $data = compact('employee','model2');
        $data = compact('employee');
        return view('view-data')->with($data);
    }
}
