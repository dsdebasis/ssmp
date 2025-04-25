<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // 1. Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'gender' => 'required|string|m|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // If validation fails, return error response
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // 2. Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // 3. Optionally, you can generate an API token for the user here
        $token = $user->createToken('auth_token')->plainTextToken;

        // 4. Return a success response
        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user,
            'token' => $token, // Include the token if generated
        ], 201);
    }
}