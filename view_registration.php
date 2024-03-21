<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
// Establish database connection
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "car_rental";

include 'db.php';

// Query to retrieve registration details
$sql = "SELECT * FROM registrations";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Registrations</title>
    <?php include 'cdn.php'; ?>
    <!-- <link rel="stylesheet" href="./css/base.css"> -->
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/admin.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .admin_all{
            margin-top: 70px;
        }
    </style>
</head>

<body>
    <?php include 'sidebar.php'; ?>
    <div class="admin_all">

        <h2>Registration Details</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Driving Class</th>
                <th>Package</th>
                <th>Registration Date</th>
            </tr>
            <?php
            // Check if there are any registrations
            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["student_name"] . "</td>";
                    echo "<td>" . $row["contact_number"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["driving_class"] . "</td>";
                    echo "<td>" . $row["package"] . "</td>";
                    echo "<td>" . $row["registration_date"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No registrations found</td></tr>";
            }
            ?>
        </table>
    </div>
    <script src="../js/sidebar.js"></script>
</body>

</html>

<?php
// Close database connection
mysqli_close($conn);
?>