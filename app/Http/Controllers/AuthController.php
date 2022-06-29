<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:api', ['except' => ['login']]);
	}

	/**
	 * Register user with given credentials
	 */
	public function register(RegisterRequest $request): JsonResponse
	{
		User::create([
			'email'    => $request->email,
			'password' => Hash::make($request->password),
		]);

		return response()->json('User successfuly registered!', 200);
	}

	/**
	 * Get a JWT via given credentials.
	 */
	public function login(): JsonResponse
	{
		$credentials = request(['email', 'password']);

		if (!$token = auth()->attempt($credentials))
		{
			return response()->json(['error' => 'Unauthorized'], 401);
		}

		return $this->respondWithToken($token);
	}

	/**
	 * Get the authenticated User.
	 */
	public function authorisedUser(): JsonResponse
	{
		return response()->json(auth()->user(), 200);
	}

	/**
	 * Log the user out (Invalidate the token).
	 */
	public function logout(): JsonResponse
	{
		auth()->logout();

		return response()->json(['message' => 'Successfully logged out']);
	}

	/**
	 * Refresh a token.
	 */
	public function refresh(): JsonResponse
	{
		return $this->respondWithToken(auth()->refresh());
	}

	/**
	 * Get the token array structure.
	 */
	protected function respondWithToken(string $token): JsonResponse
	{
		return response()->json([
			'access_token' => $token,
			'token_type'   => 'bearer',
			'expires_in'   => auth()->factory()->getTTL() * 60,
		]);
	}
}