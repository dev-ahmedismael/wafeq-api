<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\LogoutRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Stancl\Tenancy\Database\Models\Domain;

class AuthController extends Controller
{
    // Register
    public function register(Request $request)
    {
        $tenant = Tenant::create();
        $tenant->update(['email' => $request->email]);

        tenancy()->initialize($tenant);

        $user = User::create($request->all());
        // $user->addMedia('images/unknown-user.png')
        //     ->usingName($user->email)
        //     ->toMediaCollection('user');

        $token = $user->createToken('auth')->plainTextToken;

        return response()->json(['tenant' => $tenant, 'token' => $token], 201);
    }

    // Set Profile Information
    public function set_profile_information(Request $request)
    {
        $tenant = $request->tenant_id;
        tenancy()->initialize($tenant);
        $user = User::latest()->first();
        $user->update($request->all());
        $user['profile_information_filled'] = 1;
        return response()->json(['t' => $tenant, 'user' => $user]);
    }

    // Set Company Information
    public function set_company_information(Request $request)
    {
        $tenant_id = $request->tenant_id;
        tenancy()->initialize($tenant_id);
        $is_domain_exists = Domain::where('domain', $request->slug)->first();
        if ($is_domain_exists) {
            return response()->json(['message' => 'الرابط مستخدم من قبل شركة أخرى، يرجى استخدام رابط آخر.'], 422);
        }

        $domain = tenant()->domains()->create(['domain' => $request->slug]);
        $tenant = Tenant::find($tenant_id);
        $tenant->update($request->all());
        return response()->json(['message' => 'Success']);
    }

    // Login
    public function login(LoginRequest $request)
    {

        $user = User::where('email', $request->email)->first();

        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة',
            ], 401);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $token = $user->createToken('auth')->plainTextToken;

            return response()->json([
                'token' => $token,
                'user' => $user,
            ], 200);
        }
    }

    // Logout
    public function logout(LogoutRequest $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->tokens()->delete();
        return response(['message' => 'تم تسجيل الخروج بنجاح'], 200);
    }
}
