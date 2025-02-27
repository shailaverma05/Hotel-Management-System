<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $check_in = htmlspecialchars($_POST['check-in']);
    $check_out = htmlspecialchars($_POST['check-out']);
    $room_type = htmlspecialchars($_POST['room-type']);
    $guests = htmlspecialchars($_POST['guests']);
    $special_requests = htmlspecialchars($_POST['special-requests']);

    // Basic validation
    if (empty($name) || empty($email) || empty($check_in) || empty($check_out)) {
        echo "All fields are required.";
        exit();
    }

    // Display the data
    echo "<h2>Booking Summary</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Check-in Date: " . $check_in . "<br>";
    echo "Check-out Date: " . $check_out . "<br>";
    echo "Room Type: " . $room_type . "<br>";
    echo "Number of Guests: " . $guests . "<br>";
    echo "Special Requests: " . $special_requests . "<br>";
}
?>
