<?php

use Core\App;
use Core\Validator;
use Core\Authenticator;
use Core\Database;

$db = App::resolve(Database::class);

$email = $_POST["email"];
$password = $_POST["password"];


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
        $errors['_'] = 'No matching account found for that email address and password.';
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