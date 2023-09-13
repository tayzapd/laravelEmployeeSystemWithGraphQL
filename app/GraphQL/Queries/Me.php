<?php
namespace App\GraphQL\Queries;


use GraphQL\Error\Error;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Me
{

    public function __invoke($_, array $args)
    {
        /** @var \App\User $user */
        $user = Auth::user();
        return [
            "id" => "Hello"
        ];
        if (null === $user) {
            throw new Error('User unauthenticated.');
        }

        return [
            'id'=>"helo"
        ];
    }
}
