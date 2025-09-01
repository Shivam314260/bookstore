<?php
session_start();

$_SESSION["email"]=$_POST["email"];
$_SESSION["password"]=$_POST["password"];

$conn1 = pg_connect("host=localhost dbname=bookstore user=postgres password=root");

$sql="select * from user_details where email='".$_SESSION["email"]."' and password='".$_SESSION["password"]."'";
$result=pg_query($conn1,$sql);

if(pg_num_rows($result)>0){
    while($row=pg_fetch_assoc($result)){
        header("location: index.php");
    }
}else{
    session_unset();
    session_destroy();
    header("location: user_details/login.php");
}
?>