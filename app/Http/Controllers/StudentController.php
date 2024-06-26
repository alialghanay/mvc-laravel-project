<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'age' => 'required|integer',
        ]);

        Student::create($request->only(['name', 'address', 'age']));


        return redirect('/')->with('success', 'Student added successfully.');
    }

    public function deleteAll(){
        try {
            Student::truncate();
            return response()->json(['success' => true, 'message' => 'Database has been cleaned.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to delete students.'], 500);
        }
    }
}
