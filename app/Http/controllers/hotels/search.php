<?php

use App\Models\Hotel;
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$amenities = $db->query("SELECT name FROM amenities")->get(PDO::FETCH_COLUMN);
$nightly_rate = [
    "Under $50",
    "$50-$100",
    "$100-$150",
    "$150 and above"
];

$guest_satisfaction = [
    "Any rating",
    "Excellent rating",
    "Very Good rating",
    "Good rating"
];

$location = "";
$check_in_date = "";
$check_out_date = "";
$number_of_guests = "";
$selected_amenities = $_GET["amenities"] ?? [];
$selected_nightly_rate = $_GET["nightly_rate"] ?? [];
$selected_guest_satisfaction = $_GET["guest_satisfaction"] ?? [];

$errors = [];

if (!empty($_GET)) {
    $location = Validator::sanitize($_GET['location']);
    $check_in_date = Validator::sanitize($_GET['check_in_date']);
    $check_out_date = Validator::sanitize($_GET['check_out_date']);
    $number_of_guests = Validator::sanitize($_GET['number_of_guests']);
    $selected_amenities = array_map('Core\Validator::sanitize', $selected_amenities);
    $selected_nightly_rate = array_map('Core\Validator::sanitize', $selected_nightly_rate);
    $selected_guest_satisfaction = array_map('Core\Validator::sanitize', $selected_guest_satisfaction);

    if (!Validator::exists($location)) {
        $errors['location']['required'] = "required.";
    }

    if (!Validator::exists($check_in_date)) {
        $errors['check_in_date']['required'] = "required.";
    }

    if (!Validator::exists($check_out_date)) {
        $errors['check_out_date']['required'] = "required.";
    }

    if (!Validator::exists($number_of_guests)) {
        $errors['number_of_guests']['required'] = "required.";
    }

    if (!Validator::string($location, 1, 100)) {
        $errors['location']['length'] = "must be between 1 and 100 characters.";
    }

    if (!Validator::date($check_in_date, 'Y-m-d')) {
        $errors['check_in_date']['format'] = "must be a valid date in mm-dd-yyyy format.";
    }

    if (!Validator::date($check_out_date, 'Y-m-d')) {
        $errors['check_out_date']['format'] = "must be a valid date in mm-dd-yyyy format.";
    }

    if (Validator::greaterThandate($check_in_date, $check_out_date, 'Y-m-d')) {
        $errors['check_in_date']['logic'] = "must be a date before check out date.";
    }

    if (!Validator::number($number_of_guests, 1, 20)) {
        $errors['number_of_guests']['length'] = "should be a number between 1 and 20.";
    }

    if (!Validator::checkbox($selected_amenities, $amenities)) {
        $errors['amenities'][] = "invalid amenity selected.";
    }

    if (!Validator::checkbox($selected_nightly_rate, $nightly_rate)) {
        $errors['amenities'][] = "invalid nightly rate selected";
    }

    if (!Validator::checkbox($selected_guest_satisfaction, $guest_satisfaction)) {
        $errors['amenities'][] = "invalid guest satisfaction selected";
    }
}

if (!empty($errors)) {
    return view("hotels/search.php", [
        'location' => $location,
        'check_in_date' => $check_in_date,
        'check_out_date' => $check_out_date,
        'number_of_guests' => $number_of_guests,
        'selected_amenities' => $selected_amenities,
        'selected_nightly_rate' => $selected_nightly_rate,
        'selected_guest_satisfaction' => $selected_guest_satisfaction,

        'amenities' => $amenities,
        'nightly_rate' => $nightly_rate,
        'guest_satisfaction' => $guest_satisfaction,

        'errors' => $errors
    ]);
}

$hotel = new Hotel($db);

$current_page = Validator::number($_COOKIE['page']) ? intval($_COOKIE['page']) : 1;
$total_no_results = $hotel->countHotelsByLocation($location);
$num_of_results_per_page = 5;

$hotels = $hotel->getHotels($location, $num_of_results_per_page, $current_page);


view("hotels/search.php", [
    'location' => $location,
    'check_in_date' => $check_in_date,
    'check_out_date' => $check_out_date,
    'number_of_guests' => $number_of_guests,
    'selected_amenities' => $selected_amenities,
    'selected_nightly_rate' => $selected_nightly_rate,
    'selected_guest_satisfaction' => $selected_guest_satisfaction,

    'amenities' => $amenities,
    'nightly_rate' => $nightly_rate,
    'guest_satisfaction' => $guest_satisfaction,

    'hotels' => $hotels,
    'total_no_results' => $total_no_results,
    'num_of_results_per_page' => $num_of_results_per_page,
    'current_page' => $current_page,
]);
