<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Invoice</title>
    <link rel="stylesheet" href="./invoices_css/base.css">
    <style>
        .invoice-container {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .invoice_navbar {
            background-color: rgb(240, 197, 65);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10%;
        }

        .logo_invoice{
            width: 150px;
            height: 100px;
            border: 2px solid;
        }
    </style>
</head>

<body>
    <div class="invoice_navbar">
        <div class="logo_invoice"></div>
        <div class="invoice_nav">

            <h1>INVOICE</h1>
        </div>
    </div>
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

    // Retrieve invoice ID from URL parameter
    $invoice_id = $_GET['id'];

    // Retrieve invoice details from database
    $sql = "SELECT * FROM invoices WHERE id = $invoice_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Invoice ID: " . $row["id"] . "</h2>";
        echo "<p>Billed to: " . $row["billed_to"] . "</p>";
        echo "<p>Contact Number: " . $row["contact_number"] . "</p>";

        // Retrieve service details for this invoice
        $sql_details = "SELECT * FROM invoice_details WHERE invoice_id = $invoice_id";
        $result_details = $conn->query($sql_details);

        if ($result_details->num_rows > 0) {
            echo "<table>";
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

        echo "<p>Subtotal: " . $row["sub_total"] . "</p>";
        echo "<p>Total: " . $row["total"] . "</p>";
    } else {
        echo "Invoice not found";
    }

    $conn->close();
    ?>

    <button onclick="window.print()">Print Invoice</button>

</body>

</html>