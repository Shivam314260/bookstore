<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/receipt.css">
    <title>Receipt</title>
</head>
<body>
    <?php
    session_start();
    $conn1 = pg_connect("host=localhost dbname=bookstore user=postgres password=root");
    $sql="select * from orders where email='".$_SESSION['email']."' and transaction_id='".$_SESSION['transaction_id']."'";

    $result= pg_query($conn1, $sql);
    if (pg_num_rows($result) > 0) {
        $row = pg_fetch_assoc($result);
        $order_id = $row['order_id'];
        $full_name = $row['full_name'];
        $email = $row['email'];
        $address = $row['address'];
        $book_title = $row['book_title'];
        $quantity = $row['quantity'];
        $amount = $row['amount'];
        $transaction_id = $row['transaction_id'];
        $payment_status = $row['payment_status'];
        $order_date = $row['order_date'];
    }

    ?>
    <div class="container" id="receipt">
        <p class="logo">My BookStore</p>
        <p class="receipt">Receipt</p>
        <table>
            <tr>
                <td style="width:30%;">Order ID</td>
                <td><?php echo $order_id; ?></td>
            </tr>
            <tr>
                <td>Customer Name</td>
                <td><?php echo $full_name; ?></td>
            </tr>
            <tr>
                <td>Customer Email</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <td>Product</td>
                <td><?php echo $book_title ?></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><?php echo $quantity ?></td>
            </tr>
            <tr>
                <td>Transaction Id</td>
                <td><?php echo $transaction_id; ?></td>
            </tr>
            <tr>
                <td>payment status</td>
                <td><?php echo $payment_status; ?></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><?php echo $order_date; ?></td>
            </tr>
            <tr>
                <td>Amount Paid</td>
                <td><?php echo $amount; ?></td>
            </tr>
        </table>
        <form action="index.php" method="post">
            <button  type="submit">Go back to Home</button>
        </form>
    </div>
</body>
</html>