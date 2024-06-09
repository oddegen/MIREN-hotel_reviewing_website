<?php

use Core\Authenticator;


$router->get("/", 'index.php');

$router->get("/search", 'hotels/search.php');

//auth
$router->get("/register", "auth/registration/create.php")->only('guest');
$router->post("/register", "auth/registration/store.php")->only('guest');

$router->get("/login", "auth/session/create.php")->only('guest');
$router->post("/login", "auth/session/store.php")->only('guest');
$router->delete("/logout", "auth/session/destroy.php")->only('auth');

$router->get("/forgot-password", "auth/forgot-password/create.php");