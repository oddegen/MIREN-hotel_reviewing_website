<?php

namespace App\Models;

use Core\Database;
use PDO;

class User {
    protected Database $_db;

    public function __construct(protected Database $db) {
        $this->_db = $db;
    }

    public function findByEmail($email) {
        $user = $this->_db->query('SELECT * FROM users WHERE email = :email', [
            'email' => $email
        ])->find();
        return $user;
    }

    public function createUser($email, $hashed_password, $username, $role_name = 'Individual_User') {
        $this->_db->query(
            'INSERT INTO users(email, password, username, role_id) 
             SELECT :email, :password, :username, r.role_id 
             FROM roles r WHERE r.role_name = :role_name',
            [
                'email' => $email,
                'password' => $hashed_password,
                'username' => $username,
                'role_name' => $role_name
            ]
        );
    }

    public function updatePassword($token, $hashed_password) {
        $user_id = $this->_db->query('SELECT user_id FROM password_reset_tokens WHERE token=:token', [
            'token' => $token
        ])->find(PDO::FETCH_COLUMN);

        $this->db->query(
            'UPDATE users SET password = :password WHERE user_id = :id',
            [
                'password' => $hashed_password,
                'id' => $user_id
            ]
        );
    }

    public function askedReset($email): bool {
        $exists = !!$this->_db->query("SELECT u.user_id FROM users u JOIN password_reset_tokens pr ON pr.user_id=u.user_id WHERE u.email=:email AND pr.expires_at > NOW()", [
            'email' => $email,
        ])->find(PDO::FETCH_COLUMN);

        return $exists;
    }
}