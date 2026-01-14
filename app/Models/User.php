<?php 

namespace App\Models;

use App\core\Model;

class User extends Model
{
    public static function all(): array
    {
        $stmt = self::$db -> query("SELECT * FROM users");
        return $stmt -> fetchAll(\PDO::FETCH_ASSOC);
    }
}