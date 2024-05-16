<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email and password from the login form
    $email = $_POST["login-email"];
    $password = $_POST["login-password"];

    // Validate user credentials (against the information stored in the database)
    // Connect to the database
    $conn = new mysqli("localhost", "root", "remi3721", "login-registration");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query to retrieve user information based on email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Password matches, login successful
            // Set session variables
            $_SESSION["email"] = $email;
            // Redirect to the home page
            header("Location: Home page/home.html");
            exit();
        } else {
            // Password does not match
            echo "Invalid email or password. Please try again.";
        }
    } else {
        // User not found
        echo "Invalid email or password. Please try again.";
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}
?>
