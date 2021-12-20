<?php

namespace App\GraphQL\Mutations;

use GraphQL\Error\Error;
use Illuminate\Support\Facades\Auth;

class LoginAdmin
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // Laravel Sanctum
        $guard = Auth::guard(config('sanctum.guard', 'web'));

        $credentials = array_filter($args, function($key) {
            return in_array($key, ['password', 'email']);
        },ARRAY_FILTER_USE_KEY);

        if (!$guard->attempt($credentials)) {
            throw new Error('Invalid credentials.');
        }

        /**
         * Since we successfully logged in, this can no longer be `null`.
         *
         * @var \App\Models\User $user
         */
        $user = $guard->user();

        $token =  $user->createToken('auth_token')->plainTextToken;

        if($user->isAdmin != true) {
            return [
                'access_token' => $token,
                'token_type' => 'Bearer',
                'isAdmin' => false
            ];
        }

        return [
            'access_token' => $token,
            'token_type' => 'Bearer',
            'isAdmin' => true
        ];
    }
}
