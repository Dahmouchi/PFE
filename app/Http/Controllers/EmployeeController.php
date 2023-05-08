<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{

    public function update($id,Request $request)
    {
        $emp=Employee::findorFail($id);
        $emp->FullName=$request->fullname;
        $emp->date=$request->date;
        $emp->email=$request->email;
        $emp->gender=$request->gender;
        $emp->joind=$request->joind;
        $emp->save();
        return redirect()->back();

    }
    public function store(Request $request)
    {
        $emp = new Employee();
        $emp->FullName=$request->fullname;
        $emp->date=$request->date;
        $emp->email=$request->email;
        $emp->gender=$request->gender;
        $emp->joind=$request->joind;
        $file=$request->image;
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('images/EmployeeImage/',$filename);
        $emp->image=$filename;
        $emp->save();
        return redirect()->back();
    }
    public function show()
    {
        $emp=Employee::all();
        return view('dashboard.employee',compact('emp'));
    }
    public function destroyEmp($id)
    {
        Employee::destroy($id);
        return redirect()->back();
    }
}
