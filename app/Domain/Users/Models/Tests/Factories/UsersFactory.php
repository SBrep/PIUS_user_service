<?php

namespace App\Domain\Users\Models\Tests\Factories;

use App\Domain\Users\Models\Users;
use Ensi\LaravelTestFactories\BaseModelFactory;

class UsersFactory extends BaseModelFactory
{
    protected $model = Users::class;

    public function definition(): array
    {
        return [
            'email' => $this->faker->email(),
            'nickname' => $this->faker->text(),
        ];
    }
}