<?php

    $hName='192.168.43.7'; // host name

    $uName='ummi';   // database user name

    $password='rootpadd';   // database password

    $dbName = "userreg"; // database name

    $dbCon = mysqli_connect($hName,$uName,$password,"$dbName");

      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysql_error());
      }
?>