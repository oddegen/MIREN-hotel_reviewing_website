<?php

use Core\App;
use Core\Validator;
use Core\Authenticator;
use Core\Database;

$db = App::resolve(Database::class);

$email = Validator::sanitize($_POST["email"]);
$password = Validator::sanitize($_POST["password"]);


$errors = [];
if (!Validator::email($email)) {
   $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password, 8, 255)) {
    $errors['password'] = 'Please provide a password of at least eight characters.';
}

try {    
    $isSignedin = (new Authenticator)->attempt($email, $password);
    if(!$isSignedin) {
        $errors['_'] = 'Login failed; Invalid email or password."';
    }
} catch (Exception $e) {
    error_log("Error: ". $e);
    abort(500);
}

if (!empty($errors)) {
    return view('auth/session/create.php', [
        'errors' => $errors
    ]);
}


redirect("/");