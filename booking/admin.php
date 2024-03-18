<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $model = $_POST['model'];
    $transmission = $_POST['transmission'];
    $price = $_POST['price'];
    $color = $_POST['color'];

    $sql = "INSERT INTO cars (name, model, transmission, price, color) VALUES ('$name', '$model', '$transmission', $price, '$color')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New car added successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
</head>

<body>
    <h2>Add New Car</h2>
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
    </form>
</body>

</html>