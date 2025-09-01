<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/receipt.css">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    
    $conn1=pg_connect("host=localhost dbname=bookstore user=postgres password=root");
    if ($conn1==false) {
        die("Connection failed: " .pg_last_error());
    }
    $sql = "select * from user_details where email='$_SESSION[email]'";
    $result = pg_query($conn1,$sql);
    if(pg_num_rows($result) >0) {
            $row = pg_fetch_assoc($result);
            $address = $row["address"];
            $full_name = $row["full_name"];
            $email = $row["email"];
    }
    ?>
    <div class="container">
        <h1>Account Details</h1>
        <p>Here are your account details.</p>
        <table>
            <tr>
                <td>Name</td>
                <td><?php echo $full_name; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>