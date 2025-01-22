<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function create(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), 
        [
            'username' =>'required|string|max:50',
            'email' =>'required|email',
            'password' =>'required|string|min:6',
           
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $user = User::create(
           $request->all()
        );
        $success['token'] = $user->createToken('Token')->plainTextToken;
        $success['message'] =  $user;
        return response()->json($success, 201);

    }
    public function login(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('Token')->plainTextToken; 
            $success['name'] = $user->name;

            return response()->json(['success' => $success], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

}
