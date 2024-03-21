<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Invoice</title>
    <link rel="stylesheet" href="./css/base.css">
    <style>
        .invoice-container {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "car_rental";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve invoices from database
    $sql = "SELECT * FROM invoices";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="invoice-container" id="invoice_' . $row["id"] . '">';
            echo "<h2>Invoice ID: " . $row["id"] . "</h2>";
            echo "<p>Billed to: " . $row["billed_to"] . "</p>";
            echo "<p>Contact Number: " . $row["contact_number"] . "</p>";
            echo "<button onclick='printInvoice(" . $row["id"] . ")'>Print Invoice</button>";
            echo "</div>";
        }
    } else {
        echo "No invoices found";
    }

    $conn->close();
    ?>

    <script>
        function printInvoice(invoice_id) {
            var printWindow = window.open('print_template.php?id=' + invoice_id, '_blank');
            printWindow.onload = function() {
                printWindow.print();
            }
        }
    </script>
</body>

</html>