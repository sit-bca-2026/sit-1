<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::latest()->get();

        return view('pages.students', compact('students'));
    }


    public function create()
    {
        return view('pages.add-student');
    }


    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required',
            'class' => 'required',
            'roll' => 'required|numeric',
            'email' => 'nullable|email',
            'birth_date' => 'required|date',
            'gender' => 'required'
        ]);

        Student::create([
            'student_name' => $request->student_name,
            'class' => $request->class,
            'roll' => $request->roll,
            'email' => $request->email,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'status' => $request->status ?? 1
        ]);

        return redirect()->route('student.list')
            ->with('success', 'Student Added Successfully');
    }


    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('pages.edit-student', compact('student'));
    }


    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update([
            'student_name' => $request->student_name,
            'class' => $request->class,
            'roll' => $request->roll,
            'email' => $request->email,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'status' => $request->status
        ]);

        return redirect()->route('student.list')
            ->with('success', 'Student Updated');
    }


    public function destroy($id)
    {
        Student::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Student Deleted');
    }
}
