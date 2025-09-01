<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Document</title>
</head>
<body>
    
    <?php session_start();
    unset($_SESSION['book_id']);
    ?>
    <?php
    if(isset($_SESSION["email"]) && isset($_SESSION['password'])){
        ?>
    <div class="header">
        <h1 class="header_logo">My BookStore</h1>
        <ul class="header_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="accounts.php">Accounts</a></li>
            <li><a href="#category_click">Categories</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <?php } else { ?>
    <div class="header">
        <h1 class="header_logo">My BookStore</h1>
        <ul class="header_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#category_click">Categories</a></li>
            <li><a href="admin/admin.php">Admin </a></li>
            <li><a href="user_details/login.php">Login</a></li>
        </ul>
    </div> <?php } ?>

    <div class="hero overlay">
        <div class="hero_content">
            <h1>Discover books You'll Love</h1>
            <p>From Self-development to Kids' Stories -</p>
            <p>We've Got Something for Everyone</p>
        </div>
    </div>
    <div class="browse_section" id="category_click">
        <h1>Browse by Category</h1>
        <div class="browse_section_category">
            <a href="category/self_development.php">Self Development</a>
            <a href="category/finance.php">Personal Finance</a>
            <a href="category/horror.php">Horror Fiction</a>
            <a href="category/adventure.php">Adventure Fiction</a>
            <a href="category/kids_stories.php">Kids Stories</a>
            <a href="category/programming.php">Programming</a>
        </div>
    </div>
</html>