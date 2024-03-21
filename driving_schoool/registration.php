<?php
// Establish database connection
include 'db.php';
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $student_name = $_POST['student_name'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
    $driving_class = $_POST['driving_class'];
    $package = $_POST['package'];

    // Check if the student is already registered
    $check_sql = "SELECT * FROM registrations WHERE student_name = '$student_name' AND contact_number = '$contact_number'";
    $check_result = mysqli_query($conn, $check_sql);
    if (mysqli_num_rows($check_result) > 0) {
        // Student is already registered
        echo "<script>alert('You have already registered!');</script>";
    } else {
        // Insert form data into database
        $sql = "INSERT INTO registrations (student_name, contact_number, address, driving_class, package) 
                VALUES ('$student_name', '$contact_number', '$address', '$driving_class', '$package')";

        if (mysqli_query($conn, $sql)) {
            // Redirect to payment details page

            echo "<script>alert('Registration successful! Click OK to see payment details.'); window.location.href = 'payment_details.php';</script>";

            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Register for driving lessons with Xpress Driving School. Sign up for our forklift operation training or regular vehicle driving instruction. Located at Asafo, Near Ahmadiyya Mosque.">
    <meta name="keywords" content="registration, driving school registration, forklift training registration, driving lesson sign up, Xpress Driving School, Asafo, Ahmadiyya Mosque">
    <meta name="author" content="Xpress Driving School">
    <title>Registration - Xpress Driving School</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/all.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="about_bg">
            <h3>Xpress Driving School</h3>
            <h1>Registration</h1>
        </div>
    </section>

    <section>
        <div class="registration_all">
            <div class="register_title">
                <h1>Registration</h1>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="forms">
                    <label>Student Name:</label>
                    <input type="text" name="student_name" placeholder="Enter your name" required>
                </div>
                <div class="forms">
                    <label>Contact Number:</label>
                    <input type="number" name="contact_number" placeholder="Enter your contact number" required>
                </div>
                <div class="forms">
                    <label>Address:</label>
                    <input type="text" name="address" placeholder="Enter your address" required>
                </div>
                <div class="forms">
                    <label>Driving Class:</label>
                    <select name="driving_class" required>
                        <option value="" selected hidden> Select Driving Class</option>
                        <option value="normal_driving">Normal Driving</option>
                        <option value="forklift_driving">Forklift Driving</option>
                    </select>
                </div>
                <div class="forms">
                    <label>Packages:</label>
                    <select name="package" required>
                        <option value="" selected hidden> Select Packages</option>
                        <option value="Regular without license - 6 weeks">Regular without license - 6 Weeks</option>
                        <option value="Regular with standard license - 6 weeks">Regular with standard license - 6 weeks</option>
                        <option value="Regular with premium license - 6 weeks">Regular with premium license - 6 weeks</option>
                        <option value="Express without license - 3 weeks">Express without license - 3 weeks</option>
                    </select>
                </div>

                <div class="forms">
                    <button type="submit">Register now!</button>
                </div>

            </form>
        </div>
    </section>
    <?php include 'footer.php' ?>
    <script src="./js/navbar.js"></script>
    <script src="./js/swiper.js"></script>
</body>

</html>