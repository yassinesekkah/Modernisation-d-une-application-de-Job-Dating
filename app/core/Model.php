<?php

namespace App\Core;

abstract class Model 
{
    protected static \PDO $db;

    public static function setDatabase(\PDO $pdo): void
    {
        self::$db = $pdo;
    }
}