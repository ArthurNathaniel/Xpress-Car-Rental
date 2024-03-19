<!DOCTYPE html>
<html>

<head>
    <title>Car Rental Invoice</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="company-details">
            <!-- Company details (default) -->
            Company Name<br>
            Address<br>
            City, State, Zip<br>
            Phone: xxx-xxx-xxxx<br>
            Email: info@example.com
        </div>
        <div class="logo">
            <!-- Company Logo -->
            <img src="company_logo.png" alt="Company Logo">
        </div>
        <div class="invoice-form">
            <h2>Car Rental Invoice</h2>
            <form method="post" action="generate_invoice.php">
                <label for="customer_name">Billed To:</label>
                <input type="text" name="customer_name" placeholder="Customer Name"><br>
                <label for="contact_no">Contact No:</label>
                <input type="text" name="contact_no" placeholder="Customer Contact No"><br>
                <label for="services">Services:</label>
                <input type="text" name="services" placeholder="Services"><br>
                <label for="day">Day:</label>
                <input type="text" name="day" placeholder="Number of Days"><br>
                <label for="price">Price:</label>
                <input type="text" name="price" placeholder="Price per Day"><br>
                <label for="payment_info">Payment Info:</label>
                <input type="text" name="payment_info" placeholder="Payment Info"><br>
                <input type="submit" value="Generate Invoice">
            </form>
        </div>
        <div class="payment-info">
            <!-- Payment Info (default) -->
            Payment Info:<br>
            Bank Name: XYZ Bank<br>
            Account Number: XXXXXXX<br>
            IFSC Code: XXXX1234
        </div>
    </div>
</body>

</html>