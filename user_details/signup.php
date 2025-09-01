<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user_login.css">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <div>
    <p class="logo">My BookStore</p>
    <p class="page_title">Sign Up</p>
    <form action="../insert_user.php" method="POST">
        <label for="full_name">Name</label>
        <input type="text" id="full_name" name="full_name" required>

        <label for="address">Address</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <label for="email">Email address</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Create Account</button>
    </form>
    <p class="redirect">Already have an account? <a href="login.html">Sign in</a></p>
    </div>
   

</body>
<!-- box-sizing: border-box;:
The width and height include content, padding, and border. The element will always be exactly the set width and height, and padding/border are drawn inside. -->
</html>


