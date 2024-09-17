<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\Auth\AuthService;


class AuthController extends Controller
{
    public function register(RegisterRequest $request, AuthService $authService)
    {
        return $authService->register($request);
    }

    /**
     * Login user
     */
    public function login(LoginRequest $request, AuthService $authService)
    {
        return $authService->login($request);
    }


}
