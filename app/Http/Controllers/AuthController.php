<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use JWTAuth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => 'Error de validación', 'details' => $validator->errors()], 400);
            }
            
            $credentials = $request->only('email', 'password');
            //return $credentials;

            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Credenciales inválidas'], 401);
            }

            return response()->json(compact('token'));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error interno del servidor', 'details' => $e->getMessage()], 500);
        }
    }
}
