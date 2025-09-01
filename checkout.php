<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>

    <?php
    session_start();
    $book_id=$_POST["book_id"];
    $quantity=$_POST["quantity"];
    $_SESSION["book_id"] = $book_id;
    $_SESSION["quantity"] = $quantity;

    $conn1=pg_connect("host=localhost dbname=bookstore user=postgres password=root");
    $sql="select * from books where book_id=$book_id";
    $result = pg_query($conn1,$sql);
    ?>


    <div class="container">
        <p class="logo">My BookStore</p>
        <p class="checkout">Checkout</p>
        <?php
        while($row = pg_fetch_assoc($result)){
            ?>
        <table>
            <tr>
                <td rowspan="3" width="20%" style="text-align:center">
                <img src="<?php echo $row['image'] ?>" height="220px" width="170px"></td>
                <td><?php echo $row['title'] ?></td>
            </tr>
            <tr>
                <td><?php echo $row['author'] ?></td>
            </tr>
            <tr>
                <td><?php echo $row['price'] ?></td>
            </tr>
        </table>

        <br>
        <br>

        <table>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            <tr>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $quantity ?></td>
                <td><?php echo $row['price'] ?></td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>Subtotal</td>
                <td><?php echo $quantity*$row['price'] ?></td>
            </tr>
            <tr>
                <td></td>
                <td>Total</td>
                <td><?php echo ($quantity*$row['price']+100) ?></td>
            </tr>
        </table>

        <form action="payment.php" method="POST">
        <input type="hidden" value="<?php echo ($quantity*$row['price']+100) ?>" name="total_price">
        <button type="submit">Place Your Order</button>
        <p class="secure">secure checkout -- Your information is protected</p>
        </form>
    </div>
    <?php
        }
        ?>
</body>
</html>
<!-- another option for border collapse is to use the CSS property border-spacing by default it is set to 2px -->
<!-- by default the th items are set to center use text-align for different alignment -->

<!-- apply the width in the td or th for setting the width of the columns
apply the height in the tr for setting the height of the rows -->