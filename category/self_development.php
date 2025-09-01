<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>self development</title>
</head>
<body>
    <?php
    session_start();
    $conn1 = pg_connect("host=localhost dbname=bookstore user=postgres password=root");
    $sql = "SELECT * FROM BOOKS WHERE category_id=1";
    $result = pg_query($conn1, $sql);
    ?>

    <div class="nav">
        <p id="logo"><a href="../index.php">My BookStore</a></p>
        <p><a href="self_development.php">Self Development</a></p>
        <p><a href="finance.php">Personal Finance</a></p>
        <p><a href="horror.php">Horror Fiction</a></p>
        <p><a href="adventure.php">Adventure Fiction</a></p>
        <p><a href="kids_stories.php">Kid's Stories</a></p>
        <p><a href="programming.php">programming</a></p>
    </div>
    <div class="hund">
        <h1 id="category1">Self Development</h1>
        <section class="booksection">
    <?php
    while($row = pg_fetch_assoc($result)){
        ?>
        <div class="bookcontainer">
        <div class="book">
            <img src="<?php echo $row['image']?>">
        </div>
        <div class="bookcontent">
            <h3 class="bookname"><?php echo $row['title']?></h3>
            <p class="bookauthor"><?php echo $row['author']?></p>
            <p class="bookprice">₹<?php echo $row['price']?></p>
            <?php if(isset($_SESSION["email"]) and isset($_SESSION["password"])){ ?>
            <form action="../checkout.php" method="post">
                <select name="quantity">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
                <input type="hidden" name="book_id" value="<?php echo $row['book_id']?>">
                <button type="submit" class="viewdetails">Buy now</button>
                <?php } else { ?>

                <form method="post" action="../user_details/login.php">
                <button type="submit" class="viewdetails">Please login</button>
                </form>
                <?php } ?>
            </form>
        </div>
        </div>
    <?php
    }
    ?>
</section>
    </div>
</body>
</html>