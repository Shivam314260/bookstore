<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn1=pg_connect("host=localhost dbname=bookstore user=postgres password=root");
    if ($conn1==true) {
        echo "connection successful";
    }
    else{
        echo "connection failed";
    }
    ?>
</body>
</html>