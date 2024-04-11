<?php

use App\Domain\Users\Models\Users;
use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');

test('POST /api/v1/users/users create success', function () {
    $request = [
        'email' => 'Test email',
        'nickname' => 'test nickname',
    ];

    postJson('/api/v1/users/users', $request)
        ->assertStatus(201)
        ->assertJsonPath('data.email', $request['email'])
        ->assertJsonPath('data.nickname', $request['nickname']);

    assertDatabaseHas(Users::class, [
        'email' => $request['email'],
    ]);
});

test('GET /api/v1/users/users/{id} get users success', function () {
    /** @var Users $users */
    $users = Users::factory()->create();

    getJson("/api/v1/users/users/{$users->id}")
        ->assertStatus(200)
        ->assertJsonPath('data.email', $users->email)
        ->assertJsonPath('data.nickname', $users->nickname);
});