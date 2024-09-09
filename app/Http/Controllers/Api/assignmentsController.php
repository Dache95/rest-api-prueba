<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Requests;
use App\Models\Assignments;
use Illuminate\Support\Facades\Validator;

class assignmentsController extends Controller
{
    public function index() {
        $assignments = Assignments::all();

        return $assignments->isNotEmpty()
            ? response()->json($assignments, 200)
            : response()->json(['message' => 'No se encontraron asignaciones'], 404);
    }

    public function assign(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'usuario' => 'required|exists:user,id',    
            'assign_method' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Error al validar',
                'errors' => $validator->errors(),
                'status' => 400
            ], 400);
        }

        $requestInstance = Requests::find($id);
        
        if (!$requestInstance) {
            return response()->json(['message' => 'Solicitud no encontrada'], 404);
        }

        $assignment = Assignments::create([
            'request' => $requestInstance->id,      
            'usuario' => $request->input('usuario'),      
            'assign_method' => $request->input('assign_method')
        ]);

        return $assignment
            ? response()->json(['assignment' => $assignment, 'status' => 201], 201)
            : response()->json(['message' => 'Error al crear la asignación'], 500);
    }



}
