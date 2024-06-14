<?php

namespace Core;

use App\Models\User;
use Exception;

class Authenticator
{
    public function attempt($email, $password)
    {

        try {
            $user = (new User(App::resolve(Database::class)))->findByEmail($email);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email
                ]);

                return true;
            }
        }

        return false;
        } catch(Exception $e) {
            throw new Exception("Authenticator failed " .$e->getMessage());
        }
        
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }
}