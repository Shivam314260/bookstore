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
        <h1 class="page_title">Book Addition Section</h1>
        <form action="book_insert.php" method="POST">
            <label for="image">Book Image</label>
            <input type="text" name="image" id="image" required>

            <label for="title">Book Title</label>
            <input type="text" name="title" id="title" required>
            
            <label for="author">Book Author</label>
            <input type="text" name="author" id="author" required>

            <label for="price">Book Price</label>
            <input type="text" name="price" id="price" required>

            <label for="category_id">Book Category</label>
            <select name="category_id" id="category_id" required>
                <option value="1">Self Development</option>
                <option value="2">Finance</option>
                <option value="3">Horror Fiction</option>
                <option value="4">Adventure Fiction</option>
                <option value="5">Kid's Stories</option>
                <option value="6">Programming</option>
            </select>

            <button type="submit">Add New Book</button>
        </form>
    </div>
</body>
</html>

</body>
</html>