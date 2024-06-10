<?php

use Core\App;
use Core\Validator;
use Core\Authenticator;
use Core\Database;

$db = App::resolve(Database::class);

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];


$errors = [];

if (!Validator::username($username)) {
    $errors['username'] = 'Please provide a valid username (allowed characters are alpha-numeric (a-z, A-Z, 0-9) and underscores, and the length must be at least four characters long.)';
}

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password, 8, 255)) {
    $errors['password'] = 'Please provide a password of at least eight characters.';
}

if (!Validator::equals($password, $confirm_password)) {
    $errors['current_password'] = 'Please make sure your password match.';
}

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    $errors["email"] = 'A user account with this email already exists';
}

if (!empty($errors)) {
    return view('auth/registration/create.php', [
        'errors' => $errors
    ]);
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

try {
    $user = $db->query(
        'INSERT INTO users(email, password, username, role_id) SELECT :email, :password, :username, r.role_id FROM roles r WHERE r.role_name=:role_name',
        [
            'email' => $email,
            'password' => $hashed_password,
            'username' => $username,
            'role_name' => 'Individual_User'
        ],
    );

    (new Authenticator)->login(['email' => $email]);

    redirect("/");
} catch (PDOException $e) {
    error_log("Error:" . $e);
    abort(500);
}
