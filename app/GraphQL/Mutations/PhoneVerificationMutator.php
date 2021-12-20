<?php

namespace App\GraphQL\Mutations;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\TwilioService\VerifyServiceInterface;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use Symfony\Component\HttpFoundation\Response;

/**
 * GraphQL User Mutation
 */
class PhoneVerificationMutator
{

    public function __construct(protected VerifyServiceInterface $verifyService)
    {
    }

    /**
     * Send One Time Password code to the given phone number.
     * @param $rootValue
     * @param array $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return array
     */
    public function sendOTP($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo): array
    {
        return $this->verifyService->sendOTP($args['phone_no']);
    }

    /**
     * verify the given code against the code associated with the given phone number.
     * @param $rootValue
     * @param array $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return array
     */
    public function verifyOTP($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo): array
    {
        return $this->verifyService->verifyOTP($args);
    }
}
