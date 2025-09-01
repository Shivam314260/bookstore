<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user_login.css">
    <title>jam</title>
</head>
<body>
    <?php session_start(); ?>
    <div>
        <p class="logo">My BookStore</p>
        <p class="page_title">Login</p>
        <form action="../connection.php" method="POST">
        <label for="email">Email address</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Sign in</button>
        <p class="redirect">Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
    </div>
</body>
</html>