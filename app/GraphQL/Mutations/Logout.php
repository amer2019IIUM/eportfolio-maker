<?php

namespace App\GraphQL\Mutations;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use RuntimeException;

class Logout
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO: Laravel Sanctum
        $user = $this->getAuthenticatedUser();

        $guard = Auth::guard(config('sanctum.guard', 'web'));

        $guard->logout();

        return [
            'status'  => 'TOKEN_REVOKED',
            'message' => 'Your session has been terminated',
        ];

    }

    /**
     * @return Authenticatable
     * @throws RuntimeException
     */
    protected function getAuthenticatedUser(): User
    {
        // Laravel Sanctum:
        $guard = Auth::guard(config('sanctum.guard', 'web'));

        /** @var \App\Models\User|null $user */
        $user = $guard->user();

        if (! $user) {
            throw new RuntimeException('Unable to detect current user.');
        }

        return $user;
    }
}
