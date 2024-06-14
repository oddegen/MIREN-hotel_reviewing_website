<?php

use Core\Validator;

$type = Validator::sanitize($_GET["hotel"]) ? 1 : 0;

view("auth/session/create.php", [
    'type' => $type
]);