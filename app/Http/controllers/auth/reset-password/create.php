<?php

use Core\Token;

if (!Token::validate($id)) {
    abort(403);
}

view('auth/reset-password/create.php', [
    'id' => $id
]);