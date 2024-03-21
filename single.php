<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Invoice</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./invoices_css/base.css">
    <link rel="stylesheet" href="../css/sidebar.css">

</head>

<body>
    <!-- <div class="sidebar_all">
        <div class="logo"></div>
        <div class="links">
            <a href="./admin.php" class="ll"><i class="fas fa-plus"></i> Add Car</a>
            <a href="./delete_car.php"><i class="fas fa-trash"></i>Delete Car</a>
            <a href="./view_booked_cars.php"><i class="fas fa-list"></i> Booked Cars</a>
            <a href="">Clients Details</a>
            <a href="./create_invoice.php">Create an Invoice</a>
            <a href="./single.php">View all Invoice</a>
            <a href="./logout.php" class="log"><i class="fas fa-sign-out-alt"></i> Logout</a>

        </div>

    </div>
    <button id="toggleButton">
        <i class="fa-solid fa-bars-staggered"></i>
    </button> -->
    <?php include 'sidebar.php'; ?>
  
    <div class="all__grid">
        <?php
        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit;
        }
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
        include 'db.php';
        // Retrieve invoices from database in descending order
        $sql = "SELECT * FROM invoices ORDER BY id DESC";
     
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="invoice-container" id="invoice_' . $row["id"] . '">';
                echo "<h2>Invoice ID: " . $row["id"] . "</h2>";
                echo "<p>Billed to: " . $row["billed_to"] . "</p>";
                echo "<p>Contact Number: " . $row["contact_number"] . "</p>";
                echo "<button onclick='printInvoice(" . $row["id"] . ")'>Print Invoice</button>";
                echo "</div>";
            }
        } else {
            echo "No invoices found";
        }

        $conn->close();
        ?>
    </div>

    <script>
        function printInvoice(invoice_id) {
            var printWindow = window.open('print_template.php?id=' + invoice_id, '_blank');
            printWindow.onload = function() {
                printWindow.print();
            }
        }
    </script>

    <script>
        // Get the button and sidebar elements
        var toggleButton = document.getElementById("toggleButton");
        var sidebar = document.querySelector(".sidebar_all");
        var icon = toggleButton.querySelector("i");

        // Add click event listener to the button
        toggleButton.addEventListener("click", function() {
            // Toggle the visibility of the sidebar
            if (sidebar.style.display === "none" || sidebar.style.display === "") {
                sidebar.style.display = "block";
                icon.classList.remove("fa-bars-staggered");
                icon.classList.add("fa-xmark");
            } else {
                sidebar.style.display = "none";
                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars-staggered");
            }
        });
    </script>
</body>

</html>