<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    // $_SESSION['admin_email'] = $_POST['admin_email'];
    // $_SESSION['admin_password'] = $_POST['admin_password'];
    if ($_POST['admin_email'] ==='sanjaysanjuguptasj1980@gmail.com' && $_POST['admin_password'] === '131105') {
        header('location: admin_dashboard.php');
    } else {
        echo "Login failed!";
    }
    ?>
</body>
</html>