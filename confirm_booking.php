<?php
include 'db.php'; // Include the db.php file to establish the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm_booking'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $booking_id = $_POST['booking_id'];

    // Perform validation on the user input if needed

    // Update booking status to 'Accepted' and store user information
    $update_sql = "UPDATE bookings SET name = '$name', phone = '$phone', email = '$email' WHERE id = $booking_id";
    if ($conn->query($update_sql) === TRUE) {
        // echo "";
        echo "<script>alert('Booking confirmed successfully!'); window.location.href = 'index.php';</script>";

    } else {
        echo "Error updating booking: " . $conn->error;
    }
} 
