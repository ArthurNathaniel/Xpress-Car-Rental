<?php
// // Establish database connection
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "car_rental";

// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
include 'db.php';
// Retrieve data from form
$billed_to = $_POST['billed_to'];
$contact_number = $_POST['contact_number'];
$services = $_POST['service'];
$days = $_POST['day'];
$prices = $_POST['price'];
$amounts = $_POST['amount'];
$sub_total = $_POST['subtotal'];
$total = $_POST['total'];

// Insert invoice data into database
$sql = "INSERT INTO invoices (billed_to, contact_number, sub_total, total)
        VALUES ('$billed_to', '$contact_number', '$sub_total', '$total')";

if ($conn->query($sql) === TRUE) {
    $invoice_id = $conn->insert_id;

    // Insert service details into database
    for ($i = 0; $i < count($services); $i++) {
        $service = $services[$i];
        $day = $days[$i];
        $price = $prices[$i];
        $amount = $amounts[$i];

        $sql = "INSERT INTO invoice_details (invoice_id, service, day, price, amount)
                VALUES ('$invoice_id', '$service', '$day', '$price', '$amount')";

        $conn->query($sql);
    }

    echo "Invoice created successfully";
    echo "<script>alert('Invoice created successfully'); window.location.href = 'single.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
