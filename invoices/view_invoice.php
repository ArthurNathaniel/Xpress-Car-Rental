<?php
// Retrieve invoice number from URL parameter
$invoice_no = $_GET["invoice_no"];

// Fetch invoice details from the database (Assuming you have a MySQL database set up)
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

// Prepare and execute the SELECT statement
$sql = "SELECT * FROM invoices WHERE invoice_no = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $invoice_no);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Close statement and connection
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Invoice - <?php echo $invoice_no; ?></title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="invoice_all">
        <div class="invoice_nav">
            <div class="logo">

                <h1>OGAZY CAR RENTAL</h1>
            </div>


            <div class="big_amt">
                <p>Amount Due(GHS) </p>
                <h1><?php echo $row['day'] * $row['price']; ?>.00</h1>
            </div>

        </div>
        <div class="invoice-details">
            <div class="invoice_grid">
                <div class="one_details">
                    <strong>Billed To:</strong>

                    <p><?php echo $row['customer_name']; ?></p>
                    <strong>Contact No:</strong>
                    <p><?php echo $row['contact_no']; ?></p>
                </div>
                <div class="two_details">
                    <p>Invoice - <?php echo $invoice_no; ?></p>
                    <p>Date: <?php echo date('Y-m-d'); ?></p>
                </div>
            </div>


            <table>
                <tr>
                    <th>Services</th>
                    <th>Day</th>
                    <th>Price</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td><?php echo $row['services']; ?></td>
                    <td><?php echo $row['day']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['day'] * $row['price']; ?>.00</td>
                </tr>
                <tr>
                    <td colspan="3" align="right"><strong>Subtotal:</strong></td>
                    <td><?php echo $row['day'] * $row['price']; ?>.00</td>
                </tr>
                <tr>
                    <td colspan="3" align="right"><strong>Total:</strong></td>
                    <td><?php echo $row['day'] * $row['price']; ?>.00</td> <!-- Total equals the subtotal in this case -->
                </tr>
                <!-- <tr>
                    <td colspan="3" align="right"><strong>Amount Due:</strong></td>
                    <td><?php echo $row['price']; ?></td>
                </tr> -->
            </table>


        </div>
        <div class="last">
            <div class="company_details">
                OGAZY CAR RENTAL<br>
                Airport Roundabout opposite DVLA Office <br>
                PC42+MM2, Eastern By-Pass<br>
                Kumasi, Ghana<br>
                Phone: +233 24 910 3331<br>
                Email: info@ogazycarrental.com
            </div>

            <div class="payment-info">
                Payment Info:<br>
                Bank Name: XYZ Bank<br>
                Account Number: XXXXXXX<br>
                IFSC Code: XXXX1234
            </div>
        </div>

        <div class="invoice_nav">
            <div class="logo">

                <h1>OGAZY CAR RENTAL</h1>
            </div>


            <div class="big_amt">
                <p>Amount Due(GHS) </p>
                <h1><?php echo $row['price']; ?></h1>
            </div>

        </div>
        <div class="terms">
            <h2>Notes/ Terms</h2>
            <ol>
                <li>Reservations subject to availability, made online or via phone.</li>
                <li>Valid driver's license and payment required at pickup.</li>
                <li>Security deposit may apply.</li>
                <li>Cancellation policy enforced.</li>
                <li>Basic insurance included; additional options available.</li>
                <li>Vehicle return as agreed; late returns may incur fees.</li>
                <li>No smoking or pets allowed.</li>
                <li>Prompt reporting of damages or issues required.</li>
                <li>Ogazy not liable for personal belongings.</li>
                <li>Additional terms may apply.</li>
            </ol>
        </div>
        <div class="last">
            <div class="company_details">
                OGAZY CAR RENTAL<br>
                Airport Roundabout opposite DVLA Office <br>
                PC42+MM2, Eastern By-Pass<br>
                Kumasi, Ghana<br>
                Phone: +233 24 910 3331<br>
                Email: info@ogazycarrental.com
            </div>

            <div class="payment-info">
                Payment Info:<br>
                Bank Name: XYZ Bank<br>
                Account Number: XXXXXXX<br>
                IFSC Code: XXXX1234
            </div>
        </div>

        <button onclick="window.print()">Print Invoice</button>

    </div>


</body>

</html>