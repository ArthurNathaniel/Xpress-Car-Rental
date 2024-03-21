<?php
session_start(); // Start the session
include 'db.php';
// If the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize user input to prevent SQL Injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Fetch user from database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // Check if query executed successfully
    if ($result) {
        // Check if user exists
        if (mysqli_num_rows($result) == 1) {
            // User exists, log them in
            $_SESSION['username'] = $username;
            header("Location: admin.php");
            exit();
        } else {
            // User doesn't exist, show error message
            $error = "Invalid username or password";
        }
    } else {
        // Error executing query
        $error = "Error: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Xpress Car Rental</title>
    <!-- Include any CSS files here -->
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="page_all">
        <div class="login_swiper"></div>
        <div class="login_form">
            <!-- Form for login -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="forms_head">
                    <h1>Xpress Car Rental</h1>
                </div>
                <?php if (isset($error)) { ?>
                    <p><?php echo $error; ?></p>
                <?php } ?>

                <div class="forms">
                    <label>Username:</label>
                    <input type="text" name="username" placeholder="Enter your username">
                </div>
                <div class="forms">
                    <label>Password:</label>
                    <input type="password" name="password" placeholder="Enter your password" id="passwordField" required>
                    <i class="fas fa-eye" id="togglePassword"></i>
                </div>
                <div class="forms">
                    <!-- Submit button for login -->
                    <button type="submit" name="login">Login</button>
                </div>
                <div class="forms">
                    <p>
                        Return to homepage <a href="index.php">Click here ....</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Script to toggle password visibility
            $("#togglePassword").on("click", function() {
                const passwordField = $("#passwordField");
                const icon = $("#togglePassword");

                const type =
                    passwordField.attr("type") === "password" ? "text" : "password";
                passwordField.attr("type", type);

                const newIconClass =
                    type === "password" ? "fas fa-eye" : "fas fa-eye-slash";
                icon.attr("class", newIconClass);
            });
        });
    </script>
</body>

</html>