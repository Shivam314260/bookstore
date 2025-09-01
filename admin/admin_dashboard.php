<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user_login.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <?php session_start(); ?>
    <div class="container">
        <p class="logo">My BookStore</p>
        <h1 class="page_title">Admin Dashboard</h1>
        <form action="admin_check_orders.php" method="POST">
            <button type="submit">View orders</button>
        </form>
        <form action="admin_add_book.php" method="POST">
            <button type="submit">Add New Book</button>
        </form>
    </div>
</body>
</html>