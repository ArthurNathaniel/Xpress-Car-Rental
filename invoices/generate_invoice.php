<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $customer_name = $_POST["customer_name"];
    $contact_no = $_POST["contact_no"];
    $services = $_POST["services"];
    $days = $_POST["day"]; // changed to plural form
    $prices = $_POST["price"]; // changed to plural form
    $payment_info = $_POST["payment_info"];

    // Generate invoice number (You can implement your own logic here)
    $invoice_no = "INV-" . date("YmdHis");

    // Insert invoice details into the database (Assuming you have a MySQL database set up)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "car_rental";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO invoices (invoice_no, customer_name, contact_no, services, day, price, payment_info) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("sssssss", $invoice_no, $customer_name, $contact_no, $service, $day, $price, $payment_info);

    // Insert each service into the database
    for ($i = 0; $i < count($services); $i++) {
        $service = $services[$i];
        $day = $days[$i];
        $price = $prices[$i];

        // Execute the statement
        $stmt->execute();
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    // Redirect to invoice page with invoice number
    header("Location: view_invoice.php?invoice_no=$invoice_no");
    exit();
}
