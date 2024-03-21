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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Confirm your car rental booking with Xpress Car Rental. Review and finalize your reservation details before completing the booking process.">
    <meta name="keywords" content="confirm booking, car rental booking, Xpress Car Rental, reservation confirmation, finalize booking">
    <meta name="author" content="Xpress Car Rental">
    <title>Confirm Booking - Xpress Car Rental</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/style.css">

    <!-- Include EmailJS SDK -->
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script>
        // Initialize EmailJS with your user ID
        emailjs.init("pTaqTZOS5Laa7Bddx");

        // Function to send email
        function sendEmail() {
            // Get the form data
            var name = document.getElementById('name').value;
            var phone = document.getElementById('phone').value;
            var email = document.getElementById('email').value;

            // Disable the button and change text to "Please Wait..."
            var confirmButton = document.getElementById('confirmButton');
            confirmButton.disabled = true;
            confirmButton.textContent = "Please Wait...";

            // Prepare the email parameters
            var templateParams = {
                booking_id: <?php echo $booking_id; ?>,
                car_id: <?php echo $car_id; ?>,
                pickup_location: "<?php echo $pickup_location; ?>",
                desired_location: "<?php echo $desired_location; ?>",
                pickup_date: "<?php echo $pickup_date; ?>",
                return_date: "<?php echo $return_date; ?>",
                total_price: <?php echo $total_price; ?>,
                name: name,
                phone: phone,
                email: email
            };

            // Send the email
            emailjs.send('service_zm0ml4s', 'template_k2ke9yz', templateParams)
                .then(function(response) {
                    console.log('Email sent successfully:', response);
                    // Show success alert
                    alert("Booking details sent successfully!");
                }, function(error) {
                    console.error('Email sending failed:', error);
                    // Add error handling here
                })
                .finally(function() {
                    // Re-enable the button and change text back to "CONFIRM BOOKING"
                    confirmButton.disabled = false;
                    confirmButton.textContent = "CONFIRM BOOKING";
                });
        }
    </script>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="hero_bg">
            <h5>XPRESS CAR RENTAL</h5>
            <h1>Booking Confirmation</h1>
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
        <p class="amt">Total Price: <strong>GHC </strong> <span><?php echo $total_price; ?>.00</span></p>

        <br>

        <h3>Enter Your Information to Confirm Booking:</h3>
        <br>
        <form onsubmit="sendEmail(); return false;">
            <div class="forms">
                <label>Name: <span>*</span></label>
                <input type="text" placeholder="Enter your name" id="name" required>
            </div>
            <div class="forms">
                <label>Phone: <span>*</span></label>
                <input type="number" placeholder="Enter your phone number" id="phone" required>
            </div>
            <div class="forms">
                <label>Email: </label>
                <input type="email" placeholder="Enter your email address" id="email">
            </div>
            <div class="forms">
                <input type="hidden" name="booking_id" value="<?php echo $booking_id; ?>">
            </div>
            <div class="forms">
                <button type="submit" id="confirmButton" name="confirm_booking">CONFIRM BOOKING</button>
            </div>
        </form>
    </div>
    <?php include 'footer.php' ?>
    <script src="./js/navbar.js"></script>
</body>

</html>