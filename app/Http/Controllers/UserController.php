<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use JWTAuth;


class UserController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display the specified resource.
     */
    public function getUser(Request $request)
    {
        try {
            $token = $request->bearerToken();
            if (!$token) {
                return response()->json(['error' => 'Token Not Found'], 401);
            }
            $user = JWTAuth::setToken($token)->toUser(); //user for token 
            if (!$user) {
                return response()->json(['error' => 'User not found'], 404);
            }
            $user->load('contacts'); //contacts of user
            return response()->json(['user' => $user]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error', 'details' => $e->getMessage()], 500);
        }
    }
}
