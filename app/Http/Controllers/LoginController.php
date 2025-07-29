<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'اطلاعات کاربر صحیح نیست',
            ], 401);
        }
        $token = $user->createToken('app-token')->plainTextToken;
        return response()->json([
            'token' => $token,
            'message' => 'شما با موفقیت وارد شدید'
        ]);
    }

    public function logout(Request $request)
    {
        // $request->user()->currentAccessToken()->delete();
        $request->user()->tokens()->delete();
        return response()->json([
            'message' => 'با موفقیت خارج شدید'
        ]);
    }
}
