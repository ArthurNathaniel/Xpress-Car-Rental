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
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="hero_bg">
            <h5>XPRESS CAR RENTAL</h5>
            <h1>Booking Confirmation
            </h1>
        </div>
    </section>

    <style>
        .amt span {
            color: red;
            font-weight: 900;
        }

        .forms span {
            color: red;
        }
    </style>
    <div class="admin_all">
        <br>
        <br>
        <h2>Booking Confirmation</h2>
        <br>
        <h3>Booking Details:</h3>
      
        <p>Pickup Location: <?php echo $pickup_location; ?></p>
        <p>Desired Location: <?php echo $desired_location; ?></p>
        <p>Pickup Date: <?php echo $pickup_date; ?></p>
        <p>Return Date: <?php echo $return_date; ?></p>
        <p class="amt">Total Price: <span><?php echo $total_price; ?></span></p>

        <br>

        <h3>Enter Your Information to Confirm Booking:</h3>
        <br>
        <form method="post" action="confirm_booking.php">
            <div class="forms">
                <label>Name: <span>*</span></label>
                <input type="text" placeholder="Enter your name" name="name" required>
            </div>
            <div class="forms">
                <label>Phone: <span>*</span></label>
                <input type="number" placeholder="Enter your phone number" name="phone" required>
            </div>
            <div class="forms">
                <label>Email: </label>
                <input type="email" placeholder="Enter your email address"  name="email">
            </div>
            <div class="forms">
                <input type="hidden" name="booking_id" value="<?php echo $booking_id; ?>">
            </div>
            <div class="forms">
                <button type="submit" name="confirm_booking">CONFIRM BOOKING</button>
            </div>
            <!-- <input type="submit" name="confirm_booking" value="Confirm Booking"> -->
        </form>
    </div>
    <?php include 'footer.php' ?>
    <script src="./js/navbar.js"></script>
</body>

</html>