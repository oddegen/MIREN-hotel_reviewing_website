<?php

use Core\App;
use Core\Database;
use Core\Session;
use Core\Validator;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;


$email = $_POST['email'];

$errors = [];
if (!Validator::email($email)) {
   $errors['email'] = 'Please provide a valid email address.';
}

$user = App::resolve(Database::class)->query('select * from users where email = :email', [
    'email' => $email
])->find();

if (!$user) {
    $errors["_"] = 'A user account with this email doesn\'t exist';
}

if (!empty($errors)) {
    return view('auth/forgot-password/create.php', [
        'errors' => $errors
    ]);
}

$id = $user['user_id'];

date_default_timezone_set('Etc/UTC');

$google_email = $_ENV['EMAIL'];
$oauth2_clientId = $_ENV['GMAIL_CLIENT_ID'];
$oauth2_clientSecret = $_ENV['GMAIL_CLIENT_SECRET'];
$oauth2_refreshToken = $_ENV['REFRESH_TOKEN'];

$mail = new PHPMailer(TRUE);
try {

    $mail->isSendmail();
    $mail->setFrom($google_email, 'Miren');
    $mail->addAddress($email);
    $mail->addReplyTo('noreply@example.com');

    $template = '';
    ob_start();
    include('./email_template/reset.php');
    $template = ob_get_clean();

    $mail->msgHTML($template, BASE_PATH . "/public/email_template");
    $mail->Subject = 'Reset Password Link';


    $mail->AltBody = `Reset Password Link: http://localhost:8080/reset-password/{$id}`;

    $mail->isSMTP();
    $mail->Port = 587;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'tls';

    $mail->Host = 'smtp.gmail.com';

    $mail->AuthType = 'XOAUTH2';

    $provider = new Google(
        [
            'clientId' => $oauth2_clientId,
            'clientSecret' => $oauth2_clientSecret,
        ]
    );

    $mail->setOAuth(
        new OAuth(
            [
                'provider' => $provider,
                'clientId' => $oauth2_clientId,
                'clientSecret' => $oauth2_clientSecret,
                'refreshToken' => $oauth2_refreshToken,
                'userName' => $google_email,
            ]
        )
    );

    $mail->send();
} catch (Exception $e) {
    error_log($e->errorMessage());
    abort(500);
} catch (\Exception $e) {
    error_log($e->getMessage());
    abort(500);
}

Session::flash("email_confirmation", "A reset link is sent to your email.");
redirect("/forgot-password");
