<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link rel="stylesheet" href="../css/receipt.css">
    <title>Customer Orders</title>
</head>
<body>
    <?php
    session_start();

    $conn1=pg_connect("host=localhost dbname=bookstore user=postgres password=root");
    if ($conn1==false) {
        die("Connection failed: " . pg_last_error());
    }

    $sql = "SELECT * FROM orders";
    $result = pg_query($conn1, $sql);

    ?>
    <div class="container" style="width:1200px;">
        <p class="logo">My BookStore</p>
        <p class="receipt">Customer Orders</p>
        <table>
            <tr>
                <td style="width:110px;">Order Id</td>
                <td>Book</td>
                <td>Quantity</td>
                <td>transaction Id</td>
                <td>Payment Status</td>
                <td style="width:130px;">Date</td>
                <td>Amount</td>
            </tr>
            <?php
            while ($row = pg_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['order_id']; ?></td>
                <td><?php echo $row['book_title']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['transaction_id']; ?></td>
                <td><?php echo $row['payment_status']; ?></td>
                <td ><?php echo $row['order_date']; ?></td>
                <td><?php echo $row['amount']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
