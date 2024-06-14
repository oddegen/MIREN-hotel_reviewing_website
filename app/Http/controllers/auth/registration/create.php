<?php

use Core\Validator;

$type = Validator::sanitize($_GET["hotel"]) ? 1 : 0;

view("auth/registration/create.php", [
    'type' => $type
]);