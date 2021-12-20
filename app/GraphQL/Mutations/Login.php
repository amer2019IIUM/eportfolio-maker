<?php

namespace App\GraphQL\Mutations;

use GraphQL\Error\Error;
use GraphQL\Type\Definition\ResolveInfo;
use Illuminate\Support\Facades\Auth;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class Login
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     * @throws Error
     */
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
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

        return [
            'access_token' => $token,
            'token_type' => 'Bearer',
        ];
    }
}
