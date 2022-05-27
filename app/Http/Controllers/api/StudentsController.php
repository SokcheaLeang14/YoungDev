<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentsController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $image = null;

        $data = Students::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'department' => $request->input('department'),
            'image' => $image,
            'telephone' => $request->input('telephone'),
            'status' => $request->input('status')
        ]);

        $token = $data->createToken('token')->plainTextToken;

        $res = [
            'data' => $data,
            'message' => "User created successfully",
            'status' => 1,
            'token' => $token
        ];
        return response()->json($res, 200);
    }

    public function login(Request $request)
    {
        $stu = Students::where('email', $request->input('email'))->first();
        $isCorrect = Hash::check($request->input('password'), $stu['password']);
        return response()->json([$stu, $isCorrect], 200);
    }
}
