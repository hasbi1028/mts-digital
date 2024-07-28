<?php

namespace App\Http\Controllers;

use App\Models\StudentDetail;
use Illuminate\Http\Request;

class StudentDetailController extends Controller
{
    public function index()
    {
        return response()->json(StudentDetail::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            // Validasi lainnya sesuai dengan field yang ada di tabel student_details
        ]);

        $studentDetail = StudentDetail::create($request->all());
        return response()->json($studentDetail, 201);
    }

    public function show($id)
    {
        $studentDetail = StudentDetail::find($id);
        if (is_null($studentDetail)) {
            return response()->json(['message' => 'StudentDetail not found'], 404);
        }
        return response()->json($studentDetail, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'sometimes|required|exists:students,id',
            // Validasi lainnya sesuai dengan field yang ada di tabel student_details
        ]);

        $studentDetail = StudentDetail::find($id);
        if (is_null($studentDetail)) {
            return response()->json(['message' => 'StudentDetail not found'], 404);
        }
        $studentDetail->update($request->all());
        return response()->json($studentDetail, 200);
    }

    public function destroy($id)
    {
        $studentDetail = StudentDetail::find($id);
        if (is_null($studentDetail)) {
            return response()->json(['message' => 'StudentDetail not found'], 404);
        }
        $studentDetail->delete();
        return response()->json(null, 204);
    }
}
