<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

$new_password = $_POST["new_password"];
$confirm_password = $_POST["confirm_password"];


$errors = [];

if (!Validator::string($new_password, 8, 255)) {
    $errors['new_password'] = 'Please provide a password of at least eight characters.';
}

if (!Validator::equals($new_password, $confirm_password)) {
    $errors['confirm_password'] = 'Please make sure your password match.';
}

if (!empty($errors)) {
    return view('auth/reset-password/create.php', [
        'id' => $id,
        'errors' => $errors
    ]);
}

$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

try {
    $user = $db->query(
        'UPDATE users SET password=:password WHERE md5(`user_id`)=:id',
        [
            'password' => $hashed_password,
            'id' => $id
        ],
    );

    redirect("/login");
} catch (PDOException $e) {
    error_log("Error:" . $e);
    abort(500);
}
