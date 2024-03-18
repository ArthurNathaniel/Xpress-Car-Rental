<?php
include 'db.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required form fields are set
    if (isset($_POST['car_id'], $_POST['pickup_location'], $_POST['pickup_date'], $_POST['return_date'])) {
        // Retrieve form data
        $car_id = $_POST['car_id'];
        $pickup_location = $_POST['pickup_location'];
        $desired_location = isset($_POST['desired_location']) ? $_POST['desired_location'] : null;
        $pickup_date = $_POST['pickup_date'];
        $return_date = $_POST['return_date'];

        // Validate pickup and return dates (e.g., check if return date is after pickup date)
        if ($pickup_date >= $return_date) {
            echo "Return date must be after pickup date.";
            exit();
        }

        // Check if the selected car is available for the specified period
        $sql = "SELECT id FROM bookings WHERE car_id = ? AND ((pickup_date BETWEEN ? AND ?) OR (return_date BETWEEN ? AND ?))";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("issss", $car_id, $pickup_date, $return_date, $pickup_date, $return_date);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "The selected car is not available for the specified period.";
            exit();
        }

        // Calculate total price based on rental duration and car price
        $sql = "SELECT price FROM cars WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $car_id);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the query was successful and data is retrieved
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $price = $row['price'];
            $total_days = (strtotime($return_date) - strtotime($pickup_date)) / (60 * 60 * 24);
            $total_price = $price * $total_days;

            // Insert booking into database
            $insert_sql = "INSERT INTO bookings (car_id, pickup_location, desired_location, pickup_date, return_date, total_price) 
                           VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($insert_sql);
            $stmt->bind_param("issssd", $car_id, $pickup_location, $desired_location, $pickup_date, $return_date, $total_price);
            if ($stmt->execute()) {
                // Retrieve the ID of the last inserted booking
                $booking_id = $stmt->insert_id;

                // Redirect to confirmation page
                // Redirect to confirmation page with booking details as URL parameters
                header("Location: confirmation.php?booking_id=$booking_id&car_id=$car_id&pickup_location=$pickup_location&desired_location=$desired_location&pickup_date=$pickup_date&return_date=$return_date&total_price=$total_price");
                exit();
            } else {
                echo "Error inserting booking: " . $conn->error;
            }
        } else {
            echo "Invalid car ID.";
        }
    } else {
        echo "One or more required fields are missing.";
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Car Rental Booking</title>
</head>

<body>
    <h2>Car Rental Booking</h2>
    <form method="post" action="">
        Pickup Location:
        <select name="pickup_location">
            <option value="main_office">Main Office</option>
            <option value="desired_location">Your Desired Location</option>
        </select>
        <br>
        <div id="desired_location_input" style="display: none;">
            Desired Location: <input type="text" name="desired_location"><br>
        </div>

        Pickup Date: <input type="date" name="pickup_date" min="<?php echo date('Y-m-d'); ?>" required><br>
        Return Date: <input type="date" name="return_date" min="<?php echo date('Y-m-d'); ?>" required><br>

        <?php
        $sql = "SELECT * FROM cars";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Select Car: <select name='car_id'>";
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['name'] . " (" . $row['model'] . " - " . $row['transmission'] . ")</option>";
            }
            echo "</select><br>";
        } else {
            echo "No cars available";
        }
        ?>

        <input type="submit" value="Submit Booking">
    </form>

    <script>
        document.querySelector("select[name=pickup_location]").addEventListener("change", function() {
            var desiredLocationInput = document.getElementById("desired_location_input");
            if (this.value === "desired_location") {
                desiredLocationInput.style.display = "block";
            } else {
                desiredLocationInput.style.display = "none";
            }
        });
    </script>
</body>

</html>