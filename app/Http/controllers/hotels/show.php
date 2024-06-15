<?php

use App\Models\Review;
use Core\App;
use Core\Database;

$reviews = (new Review(App::resolve(Database::class)))->getReviews();


view("hotels/show.view.php", [
    'reviews' => $reviews
]);