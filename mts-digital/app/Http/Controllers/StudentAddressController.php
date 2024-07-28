<?php

namespace App\Http\Controllers;

use App\Models\StudentAddress;
use Illuminate\Http\Request;

class StudentAddressController extends Controller
{
    public function index()
    {
        return response()->json(StudentAddress::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            // Validasi lainnya sesuai dengan field yang ada di tabel student_addresses
        ]);

        $studentAddress = StudentAddress::create($request->all());
        return response()->json($studentAddress, 201);
    }

    public function show($id)
    {
        $studentAddress = StudentAddress::find($id);
        if (is_null($studentAddress)) {
            return response()->json(['message' => 'StudentAddress not found'], 404);
        }
        return response()->json($studentAddress, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'sometimes|required|exists:students,id',
            // Validasi lainnya sesuai dengan field yang ada di tabel student_addresses
        ]);

        $studentAddress = StudentAddress::find($id);
        if (is_null($studentAddress)) {
            return response()->json(['message' => 'StudentAddress not found'], 404);
        }
        $studentAddress->update($request->all());
        return response()->json($studentAddress, 200);
    }

    public function destroy($id)
    {
        $studentAddress = StudentAddress::find($id);
        if (is_null($studentAddress)) {
            return response()->json(['message' => 'StudentAddress not found'], 404);
        }
        $studentAddress->delete();
        return response()->json(null, 204);
    }
}
