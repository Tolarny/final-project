<?php

session_start();


$con = mysqli_connect('192.168.43.7', 'ummi', 'rootpass');

mysqli_select_db($con, 'userreg');

$name = $_POST['username'];
$pass = $_POST['password'];



$s = " select * from author where username = '$name' && password = '$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    $_SESSION['username'] = $name;
    header("location:authorhome.php");
    exit;
}
else {
  session_start();
  header("location:publish.php");
  exit();
}
?>