<?php
include 'db.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $recipient_name = $_POST['recipient_name'];
    $date = $_POST['date'];
    $driving_license_number = $_POST['driving_license_number'];
    $contact_number = $_POST['contact_number'];
    $duration = $_POST['duration'];
    $ghana_card_id = $_POST['ghana_card_id'];
    $destination = $_POST['destination'];
    $car_registration = $_POST['car_registration'];
    $amount = $_POST['amount'];
    $guarantor = $_POST['guarantor'];
    $location_guarantor = $_POST['location_guarantor'];
    $ghana_card_id_guarantor = $_POST['ghana_card_id_guarantor'];
    $contact_guarantor = $_POST['contact_guarantor'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO client_details (recipient_name, date, driving_license_number, contact_number, duration, ghana_card_id, destination, car_registration, amount, guarantor, location_guarantor, ghana_card_id_guarantor, contact_guarantor)
            VALUES ('$recipient_name', '$date', '$driving_license_number', '$contact_number', '$duration', '$ghana_card_id', '$destination', '$car_registration', '$amount', '$guarantor', '$location_guarantor', '$ghana_card_id_guarantor', '$contact_guarantor')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully!";
        echo "<script>alert('Record inserted successfully!'); window.location.href = 'client_details.php';</script>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
