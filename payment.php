<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $total_price=$_POST["total_price"];

    $conn1=pg_connect("host=localhost user=postgres password=root dbname=bookstore");



use Dwivedianuj9118\PhonePePaymentGateway\PhonePe;

require __DIR__ . '/vendor/autoload.php';

$config = new PhonePe('ATMOSTUAT','58a63b64-574d-417a-9214-066bee1e4caa',1);//merchantId,SaltKey,SaltIndex after onboarding PhonePe Payment gateway you will got this.
$merchantTransactionId='MUID' . substr(uniqid(), offset: -6);// Uqique Randoe transcation Id
$merchantOrderId='Order'.mt_rand(1000,99999);// orderId
$amount=100*$total_price;// Amount in Paisa or amount*100
$redirectUrl="http://localhost/books/insert_order.php";// Redirect Url after Payment success or fail
$mode="UAT"; // MODE or PAYMENT UAT(test) or PRODUCTION(production)
$callbackUrl="http://localhost/books/insert_order.php";//Callback Url after Payment success or fail get response
$mobileNumber=9930926404;//Mobile No
$data=$config->PaymentCall("$merchantTransactionId","$merchantOrderId","$amount","$redirectUrl","$callbackUrl","$mobileNumber","$mode");// call function to get response form phonepe like url,msg,status
header('Location:'. $data['url']);//use when you directly want to redirect to phonepe gateway
echo $data['url']; // here you get url after initiated PhonePe gateway
print_r($data);
?>

</body>
</html>