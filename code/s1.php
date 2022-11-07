<?php

  $hostname="localhost";
  $username="root";
  $password="";
  $dbname="testing";
  $conn=mysqli_connect($hostname,$username,$password,$dbname);


if(!$conn)
{
  die("error".mysqli_error($conn));
}
echo 'suess';

$s1='INSERT INTO r1 VALUES('
?>