<?php
include 'db.php';

// Delete car if delete button is clicked
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $car_id = $_GET['id'];
    $sql = "DELETE FROM cars WHERE id = $car_id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Car deleted successfully');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Edit car
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_car'])) {
    $car_id = $_POST['car_id'];
    $name = $_POST['name'];
    $model = $_POST['model'];
    $transmission = $_POST['transmission'];
    $price = $_POST['price'];
    $color = $_POST['color'];

    $sql = "UPDATE cars SET name='$name', model='$model', transmission='$transmission', price=$price, color='$color' WHERE id=$car_id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Car updated successfully');</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
</head>

<body>
    <!-- <h2>Add New Car</h2>
    <form method="post" action="">
        Car Name: <input type="text" name="name" required><br>
        Model: <input type="text" name="model" required><br>
        Transmission:
        <select name="transmission" required>
            <option value="automatic">Automatic</option>
            <option value="manual">Manual</option>
        </select><br>
        Price: <input type="text" name="price" required><br>
        Color: <input type="text" name="color" required><br>
        <input type="submit" value="Add Car">
    </form> -->

    <h2>Delete Car</h2>
    <table border="1">
        <tr>
            <!-- <th>ID</th> -->
            <th>Name</th>
            <th>Model</th>
            <th>Transmission</th>
            <th>Price</th>
            <th>Color</th>
            <th>Actions</th>
        </tr>
        <?php
        $sql = "SELECT * FROM cars";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                // echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['transmission'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['color'] . "</td>";
                echo "<td>
                       
                        <a href='?action=delete&id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No cars found</td></tr>";
        }
        ?>
    </table>
</body>

</html>