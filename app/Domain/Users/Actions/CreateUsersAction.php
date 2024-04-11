<?php

namespace App\Domain\Users\Actions;

use App\Domain\Users\Models\Users;

class CreateUsersAction
{
    public function execute(array $fields): Users
    {
        $users = new Users();
        $users->fill($fields);
        $users->save();

        return $users;
    }
}