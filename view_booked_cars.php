<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Booked Cars</title>
    <?php include 'cdn.php'; ?>
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
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .admin_all {
            margin-top: 60px;
        }
    </style>
</head>

<body>
    <?php include 'sidebar.php'; ?>
    <div class="admin_all">
        <h2>Booked Cars</h2>
        <table>
            <tr>
                <th>Booking ID</th>
                <th>Car Name</th>
                <th>Model</th>
                <th>Transmission</th>
                <th>Color</th>
                <th>Pickup Date</th>
                <th>Return Date</th>
                <th>Booking Name</th>
                <th>Phone Number</th>
                <th>Email Address</th>
            </tr>
            <?php
            include 'db.php';
            $sql = "SELECT bookings.id, cars.car_name, cars.model, cars.transmission, cars.color, bookings.pickup_date, bookings.return_date, bookings.name, bookings.phone,bookings.email
                FROM bookings 
                INNER JOIN cars ON bookings.car_id = cars.id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["car_name"] . "</td>";
                    echo "<td>" . $row["model"] . "</td>";
                    echo "<td>" . $row["transmission"] . "</td>";
                    echo "<td>" . $row["color"] . "</td>";
                    echo "<td>" . $row["pickup_date"] . "</td>";
                    echo "<td>" . $row["return_date"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>"; // Fixed typo here
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No booked cars</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
    <script src="../js/sidebar.js"></script>
</body>

</html>