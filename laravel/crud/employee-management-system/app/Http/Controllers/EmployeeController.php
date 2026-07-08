<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('Employee.index', compact('employees')); 
    }

    public function create()
    {
        return view('Employee.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'phone_number' => 'required',
            'department' => 'required',
            'position' => 'required',
            'salary' => 'required|numeric',
            'joining_date' => 'required|date',
            'address' => 'required',
        ]);
        Employee::create($request->all());
        return redirect()->route('employee.index');
    }
    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'department' => 'required',
            'position' => 'required',
            'salary' => 'required|numeric',
            'joining_date' => 'required|date',
            'address' => 'required',
        ]);
        $employee->update($request->all());
        return redirect()->route('employee.index');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }

}