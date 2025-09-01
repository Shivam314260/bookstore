
<?php

session_start();
$full_name=$_POST["full_name"];
$address=$_POST["address"];
$email=$_POST["email"];
$password=$_POST["password"];

$conn1=pg_connect("host=localhost user=postgres password=root dbname=bookstore");

$sql="insert into user_details(full_name,address,email,password) values('$full_name','$address','$email','$password')";
$result=pg_query($conn1,$sql);

if($result==true){
    // echo "New record created successfully";

    header("location: user_details/login.php");
}
else{
    header("location: user_details/signup.php");
}
$conn1->close();
?>