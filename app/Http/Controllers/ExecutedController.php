<?php

namespace App\Http\Controllers;

use App\Models\Executed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExecutedController extends Controller


{   
    public function index()
    {
        $executed = Executed::all();
        return response()->json($executed);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'total_orders' => 'required|numeric',
            'total_cost' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        try {
            $executed = Executed::create($request->all());
            return response()->json(['message' => 'Data saved successfully', 'executed_id' => $executed->id], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to save data: ' . $e->getMessage()], 500);
        }
    }
}
