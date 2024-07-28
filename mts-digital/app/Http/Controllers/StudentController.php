<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return response()->json(Student::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'nislokal' => 'required|string|unique:students,nislokal|max:255',
        ]);

        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    public function show($id)
    {
        $student = Student::find($id);
        if (is_null($student)) {
            return response()->json(['message' => 'Student not found'], 404);
        }
        return response()->json($student, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fullname' => 'sometimes|required|string|max:255',
            'nislokal' => 'sometimes|required|string|unique:students,nislokal,' . $id . '|max:255',
        ]);

        $student = Student::find($id);
        if (is_null($student)) {
            return response()->json(['message' => 'Student not found'], 404);
        }
        $student->update($request->all());
        return response()->json($student, 200);
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if (is_null($student)) {
            return response()->json(['message' => 'Student not found'], 404);
        }
        $student->delete();
        return response()->json(null, 204);
    }
}
