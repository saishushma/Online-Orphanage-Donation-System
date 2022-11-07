<?php

  $hostname="localhost";
  $username="root";
  $password="";
  $dbname="test";
  $conn=mysqli_connect($hostname,$username,$password,$dbname);


if(!$conn)
{
  die("error".mysqli_error($conn));
}

?>
