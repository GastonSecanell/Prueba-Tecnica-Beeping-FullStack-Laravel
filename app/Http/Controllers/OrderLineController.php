<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderLine;

class OrderLineController extends Controller
{
    public function index()
    {
        $orderLines = OrderLine::all();
        return response()->json($orderLines);
    }
}
