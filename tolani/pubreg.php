<?php

session_start();
header('location:publish.php');

$con = mysqli_connect('192.168.43.7', 'ummi', 'rootpass');
mysqli_select_db($con, 'userreg');

$name = $_POST['user'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];



$s = "select * from author where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num==1) {
    session_start();
    header('location:publish.php');
}
else {
    $reg = "insert into author(username, password, confirm) values ('$name', '$pass', '$cpass')";
    mysqli_query($con, $reg);
    header('location:publish.php');
}
?>