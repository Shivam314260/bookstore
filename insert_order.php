<?php
    session_start();
    $conn1=pg_connect("host=localhost dbname=bookstore user=postgres password=root");
    $amount=$_POST['amount']/100;
    $payment_status = $_POST['code'];
    $_SESSION['transaction_id']=$_POST['providerReferenceId'];


    //to retrieve the book title and author
    $sql_books="select * from books where book_id='".$_SESSION['book_id']."'";
    $result_books = pg_query($conn1,$sql_books);
    if (pg_num_rows($result_books) >0) {
        $row = pg_fetch_assoc($result_books);
        $book_title=$row['title'];
        $book_author=$row['author'];
    }

    //to retrieve the user details
    $sql_user = "SELECT * FROM user_details WHERE email = '" . $_SESSION['email'] . "'";
    $result = pg_query($conn1,$sql_user);
    if (pg_num_rows($result) >0) {
        $row = pg_fetch_assoc($result);
        $full_name=$row['full_name'];
        $address=$row['address'];
    }

    // to insert the orders details in the orders table if email exists
    if(isset($_SESSION['email'])) {
        $sql_insert_order = "INSERT INTO orders (full_name,email,address,book_title,quantity,transaction_id,payment_status,amount) 
        VALUES ('$full_name', '".$_SESSION['email']."', '$address', '$book_title', '".$_SESSION['quantity']."', '".$_SESSION['transaction_id']."','$payment_status','$amount')";
        $result = pg_query($conn1,$sql_insert_order);
        if ($result==true) {
            header("location:receipt.php");
    } else {
        echo "Error placing order: " . pg_last_error($conn1);
    }
}
   else{
    echo "User not logged in.";
   }