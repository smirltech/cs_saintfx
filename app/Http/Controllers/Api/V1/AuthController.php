<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Authenticate a Manager mobile user.
     */
    public function login(Request $request): JsonResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
            'device_name' => ['nullable', 'string', 'max:255'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Les identifiants sont incorrects.'],
            ]);
        }

        /*
         * Manager access verification should use the existing
         * application's role/permission system.
         *
         * Do not create a second authorization system here.
         */

        $deviceName = $credentials['device_name']
            ?? 'MasomoSoft Manager';

        $token = $user->createToken($deviceName)->plainTextToken;

        return response()->json([
            'data' => [
                'token' => $token,

                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $this->getUserRole($user),
                ],
            ],
        ]);
    }

    /**
     * Logout the current device/session.
     */
    public function logout(Request $request): JsonResponse
    {
        $request->user()
            ->currentAccessToken()
            ?->delete();

        return response()->json([
            'message' => 'Successfully logged out.',
        ]);
    }

    /**
     * Return the currently authenticated user.
     */
    public function me(Request $request): JsonResponse
    {
        $user = $request->user();

        return response()->json([
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $this->getUserRole($user),
            ],
        ]);
    }

    /**
     * Resolve the user's role from the existing authorization system.
     */
    private function getUserRole(User $user): ?string
    {
        /*
         * If the project uses Spatie Permission:
         *
         * return $user->getRoleNames()->first();
         *
         * Otherwise adapt this method to the existing User/Role
         * implementation.
         */

        if (method_exists($user, 'getRoleNames')) {
            return $user->getRoleNames()->first();
        }

        return $user->role ?? null;
    }
}
