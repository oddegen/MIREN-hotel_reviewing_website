<?php

use Core\App;
use Core\Database;

$faqs = App::resolve(Database::class)->query("SELECT question, answer FROM faqs")->get();

view("faq.view.php", [
    'faqs' => $faqs
]);