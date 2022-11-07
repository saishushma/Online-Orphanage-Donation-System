<!doctype html>
<html>
<head>
<title>my form</title>
</head>
<body>

 
<form method="post">
ORPHNAGE NAME:<input type="text" name="name"><br/><br/>
TIME OF FUNDATION:<input type="date" name="time"><br/><br>
DIRECTOR NAME:<input type="text" name="director"><br/><br/>
<input type="submit" ><br/><br/>
</form>

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
?>
<?php

$n=$_POST["name"];
$t=$_POST["time"];
$d=$_POST["director"];
 $stmt="INSERT INTO r1  VALUES ('$n','$t','$d')";
    $q2=mysqli_query($conn,$stmt);
    if($q2)
    {
      echo "signup completed";
	  echo "<br/>";
    }
    else {
      echo "not completed <br>".mysqli_error($conn);
    }
echo '$n,$t,$d';
?>
</body>
</html>
