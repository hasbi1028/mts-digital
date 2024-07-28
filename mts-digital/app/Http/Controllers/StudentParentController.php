<?php

namespace App\Http\Controllers;

use App\Models\StudentParent;
use Illuminate\Http\Request;

class StudentParentController extends Controller
{
    public function index()
    {
        return response()->json(StudentParent::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            // Validasi lainnya sesuai dengan field yang ada di tabel student_parents
        ]);

        $studentParent = StudentParent::create($request->all());
        return response()->json($studentParent, 201);
    }

    public function show($id)
    {
        $studentParent = StudentParent::find($id);
        if (is_null($studentParent)) {
            return response()->json(['message' => 'StudentParent not found'], 404);
        }
        return response()->json($studentParent, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'sometimes|required|exists:students,id',
            // Validasi lainnya sesuai dengan field yang ada di tabel student_parents
        ]);

        $studentParent = StudentParent::find($id);
        if (is_null($studentParent)) {
            return response()->json(['message' => 'StudentParent not found'], 404);
        }
        $studentParent->update($request->all());
        return response()->json($studentParent, 200);
    }

    public function destroy($id)
    {
        $studentParent = StudentParent::find($id);
        if (is_null($studentParent)) {
            return response()->json(['message' => 'StudentParent not found'], 404);
        }
        $studentParent->delete();
        return response()->json(null, 204);
    }
}
