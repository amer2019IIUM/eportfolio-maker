<?php

namespace App\GraphQL\Mutations;

use App\Models\Message;
use App\Models\User;

class MarkAsRead
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function chat($_, array $args): int
    {
        return Message::markChatAsRead($args['to_id'], $args['from_id']);
    }

    public function comments($_, array $args): int
    {
        return User::markCommentsAsRead($args['user_id']);
    }

    public function reviews($_, array $args): int
    {
        return User::markReviewsAsRead($args['user_id']);
    }
}
