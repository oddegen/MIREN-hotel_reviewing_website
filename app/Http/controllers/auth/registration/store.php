<?php

use App\Models\User;
use Core\App;
use Core\Validator;
use Core\Authenticator;
use Core\Database;

$username = Validator::sanitize($_POST["username"]);
$email = Validator::sanitize($_POST["email"]);
$password = Validator::sanitize($_POST["password"]);
$confirm_password = Validator::sanitize($_POST["confirm_password"]);


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

$db = App::resolve(Database::class);
$user = new User($db);



if ($user->findByEmail($email)) {
    $errors["email"] = 'A user account with this email already exists';
}

if (!empty($errors)) {
    return view('auth/registration/create.php', [
        'errors' => $errors,
        'type' => $_POST["_type"] == "Hotel" ? 1 : 0
    ]);
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

try {
    if ($_POST["_type"] == "Hotel") {
        $user->createUser($email, $hashed_password, $username, 'Hotel_User');
    } else {
        $user->createUser($email, $hashed_password, $username);
    }

    (new Authenticator)->login(['email' => $email]);


    if ($_POST["_type"] == "Hotel") {
        $id = $user->findByEmail($email)['uuid'];
        redirect("/hotels/hotel/{$id}");
    }

    redirect("/");
} catch (PDOException $e) {
    error_log("Error:" . $e);
    abort(500);
}
