<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $book_image=$_POST['image'];
    $book_title=$_POST['title'];
    $book_category_id=$_POST['category_id'];
    $book_author=$_POST['author'];
    $book_price=$_POST['price'];

    $conn1 = pg_connect("host=localhost dbname=bookstore user=postgres password=root");
    if ($conn1==false) {
        die("Connection failed: " . pg_last_error());
    }

    $sql= "insert into books (image, title, author, price, category_id)
    values ('$book_image', '$book_title', '$book_author', '$book_price', $book_category_id)";

    if (pg_query($conn1, $sql) == TRUE) {
        echo "New record created successfully <br>";
        echo "<a href='admin_dashboard.php'>Go back to dashboard</a>";
    } else {
        echo "Error: " . $sql . "<br>" . pg_last_error($conn1);
    }

    ?>
</body>
</html>