<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Authors;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    public function index()
    {
        $author = Authors::all();

        $res = [
            'data' => $author,
            'status' => 1
        ];

        return response()->json($res, 200);
    }

    public function show($id)
    {
        $author = Authors::where('id', $id)->get();

        $res = [
            'data' => $author,
            'status' => 1
        ];

        return response()->json($res, 200);
    }
}
