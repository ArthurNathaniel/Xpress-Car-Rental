<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Invoice</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./invoices_css/base.css">
    <style>

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
    include 'db.php';
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

    // Retrieve invoice ID from URL parameter
    $invoice_id = $_GET['id'];

    // Retrieve invoice details from database
    $sql = "SELECT * FROM invoices WHERE id = $invoice_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<div class='whole_invoice'>";
        echo "<h2>Invoice ID: " . $row["id"] . "</h2>";
        echo "<p>Billed to: " . $row["billed_to"] . "</p>";
        echo "<p>Contact Number: " . $row["contact_number"] . "</p>";
        echo "<p>Date: " . date('Y-m-d') . "</p>";

        echo "<br> <br>";

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
            echo "<tr><td colspan='3' align='right'><strong>Subtotal:</strong></td><td><p> " . $row["sub_total"] . "</p></td></tr>";
            echo "<tr><td colspan='3' align='right'><strong>Total:</strong></td><td><h1> GHC " . number_format($row["total"], 2) . "</h1></td></tr>";

            echo "</table>";
        } else {
            echo "No service details found for this invoice";
        }

        echo "</div>";
    } else {
        echo "Invoice not found";
    }
    $conn->close();
    ?>

    <div class="last_footer">
        <div class="payment_info">
            <h2>PAYMENT INFO:</h2>
            <p><strong>Momo Mobile Number:</strong> 0246046910</p>
            <p><strong>Momo Account Name:</strong> IX Xpress Advertising</p>
        </div>
        <div class="location">
            <h2>FIND US:</h2>
            <p> <i class="fa-solid fa-phone"></i> 020 985 5332 </p>
            <p> <i class="fa-solid fa-phone"></i> 024 604 6910 </p>
            <p> <i class="fa-solid fa-location"></i> Asafo, Near Ahmadiyya Mosque

            </p>
        </div>
    </div>
    <br>
    <br>
    <div class="invoice_navbar">
        <div class="logo_invoice"></div>
        <div class="invoice_nav">

            <h1>TERMS</h1>
        </div>
    </div>
    <div class="about_aall">
        <h1>Xpress Car Rental Terms and Conditions</h1>
        <p>
            Welcome to Xpress Car Rental! Before proceeding with your reservation, please take a moment to review our terms and conditions outlined below. These terms are designed to ensure a smooth and enjoyable rental experience for all our customers. If you have any questions or concerns, our dedicated team is here to assist you. Thank you for choosing Xpress Car Rental.
        </p>
        <br>
        <br>
        <ol>
            <li>The Recipient must provide eligible <strong>GHANA DRIVING LICENSE</strong></li>
            <li>The Recipient must provide a grantee his/her credibility of the vehicle.</li>
            <li>The Recipient must take full responsibilities of all cost, incase any damages cause to the vechile.</li>
            <li>The Recipient must take responsibility of any illegal issue if the use vehicle overload passenger or transport any illegal drugs.</li>
            <li>The Recipient must keep the vehicle clean as it was pick</li>
            <li>The Recipient must inform the company before touching any mechanical fault of the vehicle</li>
            <li>The Recipient must return the vehicle with a full tank of fuel (Shell V-Power) as it was provided
                before leaving the garage.
            </li>
            <li>The Recipient must pay an amount of <strong>HUNDRED GHANA CEDIS (100.00)
                </strong>as driver's pay. <br> Recipient is also responsibile for driver's accomodation. (This implies to clients who calls in for drivers services)</li>

        </ol>


        <p><strong>NOTE:</strong>
            <br>
            Recipients are to return rented vehicles to the garage by 8AM on the due date. Should the car
            be returned late, a penalty fee equivalent to the daily rental cost of the car will apply.
            <br>
            <strong>THANK YOU!</strong>
        </p>
    </div>


    <div class="last_footer">
        <div class="payment_info">
            <h2>PAYMENT INFO:</h2>
            <p><strong>Momo Mobile Number:</strong> 0246046910</p>
            <p><strong>Momo Account Name:</strong> IX Xpress Advertising</p>
        </div>
        <div class="location">
            <h2>FIND US:</h2>
            <p> <i class="fa-solid fa-phone"></i> 020 985 5332 </p>
            <p> <i class="fa-solid fa-phone"></i> 024 604 6910 </p>
            <p> <i class="fa-solid fa-location"></i> Asafo, Near Ahmadiyya Mosque

            </p>
        </div>
    </div>
    <button onclick="window.print()">Print Invoice</button>

</body>

</html>