<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display a listing of students
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Show the form for creating a new student
    public function create()
    {
        return view('students.create');
    }

    // Store a newly created student in the database
    public function store(Request $request)
    {
        $request->validate([
            'std_number' => 'required|unique:students',
            'name' => 'required',
            'family_name' => 'required',
            'dt_birth' => 'required|date',
            'level' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $student = new Student($request->except('picture'));

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('students', 'public');
            $student->picture = $path;
        }

        $student->save();
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    // Display the specified student
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // Show the form for editing the specified student
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Update the specified student in the database
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'std_number' => 'required|unique:students,std_number,' . $student->id,
            'name' => 'required',
            'family_name' => 'required',
            'dt_birth' => 'required|date',
            'level' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $student->fill($request->except('picture'));

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('students', 'public');
            $student->picture = $path;
        }


        $student->save();
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    // Remove the specified student from the database
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
