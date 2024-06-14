<?php

use App\Models\Hotel;
use Core\App;
use Core\Database;
use Core\Validator;

$errors = [];

$hotelname = '';
$description = '';
$location = '';
$street_address = '';
$img_upload = '';


$hotelname = Validator::sanitize($_POST['hotelname'] ?? '');
$description = Validator::sanitize($_POST['description'] ?? '');
$location = Validator::sanitize($_POST['location'] ?? '');
$street_address = Validator::sanitize($_POST['street-address'] ?? '');
$img_upload = $_FILES['img-upload'];

if (!Validator::exists($hotelname)) {
    $errors['hotelname']['required'] = "Hotel name is required.";
}

if (!Validator::string($hotelname, 1, 255)) {
    $errors['hotelname']['length'] = "Hotel name must be between 1 and 255 characters.";
}

if (!Validator::exists($description)) {
    $errors['description']['required'] = "Description is required.";
}

if (!Validator::exists($location)) {
    $errors['location']['required'] = "Location is required.";
}

if (!Validator::exists($street_address)) {
    $errors['street-address']['required'] = "Street address is required.";
}

if (isset($img_upload) && $img_upload['error'] === UPLOAD_ERR_OK) {

    $allowedfileExtensions = array('jpg', 'png');
    if (!Validator::fileType($img_upload, $allowedfileExtensions)) {
        $errors['img-upload']['type'] = "Upload failed. Allowed file types: " . implode(',', $allowedfileExtensions);
    }

    $maxFileSize = 10 * 1024 * 1024;
    if (!Validator::fileSize($img_upload, $maxFileSize)) {
        $errors['img-upload']['size'] = "Upload failed. Maximum file size is 10MB.";
    }
} else {
    $errors['img-upload']['upload'] = "No image uploaded or there was an error during the upload.";
}

if (!empty($errors)) {
    return view("hotels/hotel/create.php", [
        'errors' => $errors,
        'id' => $id,
        'hotelname' => $hotelname,
        'description' => $description,
        'location' => $location,
        'street_address' => $street_address
    ]);
}

$hotel = new Hotel(App::resolve(Database::class));
$hotel->createHotel($hotelname, $location, $description, $img_upload["full_path"]);

redirect("/hotels/hotel/{$id}");
