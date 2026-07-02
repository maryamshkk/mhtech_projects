<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('Student.index', compact('students'));
    }
    public function create()
    {
        return view('Student.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required|nullable',
            'email' => 'required|email|unique:students,email',
            'phone_number' =>'required|numeric',
            'gender' =>'required',
            'semester'=>'required|numeric',
            'department' =>'required',
            'address' =>'required',
        ]);

        Student::create($request->all());
        return redirect()->route('student.index');
    }

    public function show(Student $student)
    {
        return view('Student.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('Student.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required|nullable',
            'email' => 'required|email',
            'phone_number' =>'required|numeric',
            'gender' =>'required',
            'semester'=>'required|numeric',
            'department' =>'required',
            'address' =>'required',
        ]);
        $student->update($request->all());
        return redirect()->route('student.index');
    }
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }
}
