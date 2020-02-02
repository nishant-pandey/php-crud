<?php

$name = $_POST["name"]; 
$Number = $_POST["number"]; 



 echo "My Name is".$name ."Phone Nmber is".$Number;

 include 'db.php';

 $sql = "INSERT INTO names(name, phone)VALUES('$name','$Number')";
 $result = mysqli_query ($conn, $sql);

 if($result)
     header('location:index.php');

?>