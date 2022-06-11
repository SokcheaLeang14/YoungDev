<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();

        $res = [
            'data' => $categories,
            'status' => 1
        ];

        return response()->json($res, 200);
    }
}
