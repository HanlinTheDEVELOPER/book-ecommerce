<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function createCategory(Request $request)
    {
        $request_data = [
            'name' => $request->name
        ];
        $data = Category::create($request_data);
        return response()->json($data, 200);
    }
}