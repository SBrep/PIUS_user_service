<?php

namespace App\Domain\Users\Models;

use App\Domain\Users\Models\Tests\Factories\UsersFactory;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 *
 * @property string $email Заголовок новости
 * @property string $nickname Текст новости
 *
 * @property CarbonInterface|null $created_at
 * @property CarbonInterface|null $updated_at
 */
class Users extends Model
{
    protected $table = 'users';

    // Поля, которые можно заполнять методом fill
    protected $fillable = ['email', 'nickname'];

    public static function factory(): UsersFactory
    {
        return UsersFactory::new();
    }
}