<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["register-username"];
    $email = $_POST["register-email"];
    $password = $_POST["register-password"];
    $confirmPassword = $_POST["confirm-password"];

    // Validate form data (for example, check if passwords match)
    if ($password !== $confirmPassword) {
        echo "Passwords do not match. Please try again.";
        exit;
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    // Connect to the database
    $conn = new mysqli("localhost", "root", "remi3721", "login-registration");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query to insert user data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        // Registration successful
        echo "Registration successful. You can now log in.";
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}
?>
