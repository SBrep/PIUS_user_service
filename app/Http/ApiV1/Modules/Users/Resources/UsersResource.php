<?php

namespace App\Http\ApiV1\Modules\Users\Resources;

use App\Domain\Users\Models\Users;
use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin Users
 */
class UsersResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'nickname' => $this->nickname,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];
    }
}