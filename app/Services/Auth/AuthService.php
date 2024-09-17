<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\API\BaseController as BaseController;

/**
 * Class AuthService.
 */
class AuthService extends BaseController
{
    public function register($request)
    {
        $userData = $request->validated();

        $userData['email_verified_at'] = now();
        $user = User::create($userData);

        $token = $user->createToken('Myapp')->accessToken;

        $user['token'] = $token;

        return $this->sendResponse($user, 'Usuario registrado exitosamente.');
    }


    public function login($request)
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $this->sendResponse([
            "user" => $user,
            'token' => $user->createToken('Myapp')->accessToken,
        ], '');
    }

}
