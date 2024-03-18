<?php
// Retrieve booking details from URL parameters
$booking_id = $_GET['booking_id'];
$car_id = $_GET['car_id'];
$pickup_location = $_GET['pickup_location'];
$desired_location = $_GET['desired_location'];
$pickup_date = $_GET['pickup_date'];
$return_date = $_GET['return_date'];
$total_price = $_GET['total_price'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Booking Confirmation</title>
</head>

<body>
    <h2>Booking Confirmation</h2>
    <h3>Booking Details:</h3>
    <p>Car ID: <?php echo $car_id; ?></p>
    <p>Pickup Location: <?php echo $pickup_location; ?></p>
    <p>Desired Location: <?php echo $desired_location; ?></p>
    <p>Pickup Date: <?php echo $pickup_date; ?></p>
    <p>Return Date: <?php echo $return_date; ?></p>
    <p>Total Price: <?php echo $total_price; ?></p>

    <!-- Additional form for user information and confirmation -->
    <h3>Enter Your Information to Confirm Booking:</h3>
    <form method="post" action="confirm_booking.php">
        Name: <input type="text" name="name" required><br>
        Phone: <input type="text" name="phone" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="hidden" name="booking_id" value="<?php echo $booking_id; ?>">
        <input type="submit" name="confirm_booking" value="Confirm Booking">
    </form>
</body>

</html>