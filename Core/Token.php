<?php

namespace Core;

use DateTime;

class Token {
    public static function add($token, $user_id) {
        App::resolve(Database::class)->query("INSERT INTO password_reset_tokens(token, expires_at, user_id) VALUES(:token, :expires_at, :user_id)", [
            'token' => $token,
            'expires_at' => (new DateTime('+24 hours'))->format('Y-m-d H:i:s'),
            'user_id' => $user_id
        ]);
    }

    public static function validate($token): bool {
        $exists = !!App::resolve(Database::class)->query("SELECT user_id FROM password_reset_tokens WHERE token=:token AND expires_at > NOW()", [
            'token' => $token,
        ])->find();

        return $exists;
    }

    public static function regenerate($token, $user_id) {
        App::resolve(Database::class)->query("UPDATE password_reset_tokens SET token=:token, expires_at=:expires_at WHERE user_id=:user_id", [
            'token' => $token,
            'expires_at' => (new DateTime('+24 hours'))->format('Y-m-d H:i:s'),
            'user_id' => $user_id
        ]);
    }  
}

