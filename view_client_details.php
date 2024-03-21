<?php
include 'db.php';
        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit;
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Client Details</title>
    <?php include 'cdn.php'; ?>
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/admin.css">
    <style>
        /* Custom CSS for DataTable */
        #clientDetailsTable {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
            margin-top: 20px;
        }

        #clientDetailsTable th,
        #clientDetailsTable td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        #clientDetailsTable th {
            background-color: #f2f2f2;
            text-align: left;
        }

        #clientDetailsTable tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #clientDetailsTable tbody tr:hover {
            background-color: #ddd;
        }

        .admin_all{
            margin-block: 70px;
            overflow-x: scroll;
        }
    </style>
</head>

<body>
    <?php include 'sidebar.php'; ?>
    <div class="admin_all">
        <?php
        // SQL query to fetch data from the database
        $sql = "SELECT * FROM client_details";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Output table header
            echo "<table id='clientDetailsTable' border='1'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Recipient Name</th>";
            echo "<th>Date</th>";
            echo "<th>Driving License Number</th>";
            echo "<th>Contact Number</th>";
            echo "<th>Duration</th>";
            echo "<th>Ghana Card ID</th>";
            echo "<th>Destination</th>";
            echo "<th>Car Registration</th>";
            echo "<th>Amount</th>";
            echo "<th>Guarantor</th>";
            echo "<th>Location (Guarantor)</th>";
            echo "<th>Ghana Card No (Guarantor)</th>";
            echo "<th>Contact (Guarantor)</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["recipient_name"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["driving_license_number"] . "</td>";
                echo "<td>" . $row["contact_number"] . "</td>";
                echo "<td>" . $row["duration"] . "</td>";
                echo "<td>" . $row["ghana_card_id"] . "</td>";
                echo "<td>" . $row["destination"] . "</td>";
                echo "<td>" . $row["car_registration"] . "</td>";
                echo "<td>" . $row["amount"] . "</td>";
                echo "<td>" . $row["guarantor"] . "</td>";
                echo "<td>" . $row["location_guarantor"] . "</td>";
                echo "<td>" . $row["ghana_card_id_guarantor"] . "</td>";
                echo "<td>" . $row["contact_guarantor"] . "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>
    </div>
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- Include Buttons JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <!-- Include JSZip for Excel export -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- Include PDFMake for PDF export -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <!-- Include Buttons HTML5 export -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <!-- Include Buttons Print -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

    <script>
        // Initialize DataTable with Buttons and Print
        $(document).ready(function() {
            $('#clientDetailsTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5',
                    // 'pdfHtml5',
                    // 'print'
                ]
            });
        });
    </script>
    <script src="../js/sidebar.js"></script>

</body>

</html>