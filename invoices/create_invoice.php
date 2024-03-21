<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Invoice</title>
    <link rel="stylesheet" href="./invoices_css/base.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border:none;
          
        }

        th {
            padding: 10px;
            border-left: 1px solid;
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <div class="create_invoice_all">
        <h2>Create Invoice</h2>
        <form action="save_invoice.php" method="post">
            <div class="forms">
                <label>Billed to:</label>
                <input type="text" name="billed_to" required>
            </div>
            <div class="forms">
                <label>Contact Number:</label>
                <input type="text" name="contact_number" required>
            </div>

            <table border="1">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Day</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Actions</th> <!-- Add this column for delete button -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="service[]" required></td>
                        <td><input type="number" name="day[]" required></td>
                        <td><input type="number" name="price[]" required></td>
                        <td><input type="number" name="amount[]" required></td>
                        <td><button type="button" onclick="removeRow(this)">Remove</button></td> <!-- Add delete button -->
                    </tr>
                </tbody>
            </table>

            <div class="add">
                <button type="button " onclick="addRow()">Add Row</button>
            </div>

            <div class="forms">
                <label>Subtotal:</label>
                <input type="number" name="subtotal" required>
            </div>
            <div class="forms">
                <label>Total:</label>
                <input type="number" name="total" required>
            </div>

            <div class="forms">
                <button type="submit">Save Invoice</button>
            </div>
        </form>
    </div>

    <script>
        function addRow() {
            var table = document.querySelector("table tbody");
            var newRow = table.insertRow();
            newRow.innerHTML = `
                <td><input type="text" name="service[]"></td>
                <td><input type="number" name="day[]"></td>
                <td><input type="number" name="price[]"></td>
                <td><input type="number" name="amount[]"></td>
                <td><button type="button" onclick="removeRow(this)">Remove</button></td>
            `;
        }

        function removeRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

</body>

</html>