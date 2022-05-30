<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;
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
        return response()->json([$stu, $isCorrect], 201);
    }

    public function getStudentInfo($id) {
        
        $data = Students::where('id', $id)->first();
        if($data) {
            $res = [
                'data' => $data,
                'status' => 1
            ];

            return response()->json($res, 200);
        } else {
            return response([
                'message' => "User doesn't not existed!!",
                'status' => 0
            ], 200);
        }
    }

    public function update(Request $request, $id) {
        if($id) {
            $id = Students::find('$id', $id);

            $data = $id->update($request->all());

            if($data) {
                $res = [
                    'data' => $data,
                    'message' => "Update user" . $data['username'] . "Successfully!!",
                    'status' => 1,
                ];

                return response()->json($res, 200);
            } else {
                return response()->json([
                    'data' => '',
                    'message' => 'No Data to update',
                    'status' => 0
                ], 200);
            }
        } else {
            return response()->json([
                'id' => '',
                'status' => 0
            ], 300);
        }
    }

    public function delete($id) {
        $data = Students::destroy($id);

        return response()->json([
            'data' => $data,
            'message' => 'You have deleted your account successfully',
            'status' => 1
        ], 200);
    }
}
