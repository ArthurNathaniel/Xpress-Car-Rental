<?php
// Establish database connection
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
// Retrieve invoices from database
// $sql = "SELECT * FROM invoices";
$sql = "SELECT * FROM invoices ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Invoice ID: " . $row["id"] . "<br>";
        echo "Billed to: " . $row["billed_to"] . "<br>";
        echo "Contact Number: " . $row["contact_number"] . "<br>";

        // Retrieve service details for this invoice
        $invoice_id = $row["id"];
        $sql_details = "SELECT * FROM invoice_details WHERE invoice_id = $invoice_id";
        $result_details = $conn->query($sql_details);

        if ($result_details->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>Service</th><th>Day</th><th>Price</th><th>Amount</th></tr>";
            while ($row_details = $result_details->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row_details["service"] . "</td>";
                echo "<td>" . $row_details["day"] . "</td>";
                echo "<td>" . $row_details["price"] . "</td>";
                echo "<td>" . $row_details["amount"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No service details found for this invoice";
        }

        echo "Subtotal: " . $row["sub_total"] . "<br>";
        echo "Total: " . $row["total"] . "<br><br>";
    }
} else {
    echo "No invoices found";
}

$conn->close();
?>

    <button onclick="window.print()">Print Invoice</button>
