<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $user = User::where('mobile', $request->mobile)->first();
        if (!$user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'اطلاعات کاربر صحیح نیست',
            ], 401);
        }
        auth()->login($user);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
