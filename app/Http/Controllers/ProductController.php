<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $orderLines = Product::all();
        return response()->json($orderLines);
    }
}
