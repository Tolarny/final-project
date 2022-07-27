<?php

session_start();
header('location:sign.php');

$con = mysqli_connect('192.168.43.7', 'ummi', 'rootpass');
mysqli_select_db($con, 'userreg');

$name = $_POST['signup_user'];
$pass = $_POST['signup_password'];
$cpass = $_POST['signup_cpassword'];



$s = "select * from usertab where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num==1) {
    session_start();
    header('location:sign.php');
}
else {
    $reg = "insert into usertab(username, password, confirm) values ('$name', '$pass', '$cpass')";
    mysqli_query($con, $reg);
    header('location:sign.php');
}
?>