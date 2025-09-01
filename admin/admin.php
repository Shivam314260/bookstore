<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user_login.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container">
        <p class="logo">My Bookstore</p>
        <p class="page_title">Admin Login</p>
    <form method="POST" action="admin_check.php">
        <?php
        $conn1=pg_connect("host=localhost dbname=bookstore user=postgres password=root");
        ?>
        <label for="admin">Admin Email</label>
        <input type="text" id="admin" name="admin_email">
        <br>
        <label for="admin_password">Admin Password</label>
        <input type="password" id="admin_password" name="admin_password">
        <button type="submit">Submit</button>
</div>
    
    </form>
</body>
</html>