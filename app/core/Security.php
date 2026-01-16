<?php

namespace App\Core;

class Security
{
    public static function generateCsrfToken(): string
    {
        if (Session::has('csrf_token')) {
            Session::set('csrf_token', bin2hex(random_bytes(32)));
        }

        return Session::get('csrf_token');
    }

    public static function verifyCsrfToken(?string $token): bool
    {
        return Session::has('csrf_token') && hash_equals(Session::get('csrf_token'), $token);
    }

    public static function hashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function verifyPassword(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }

}
