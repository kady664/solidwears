<?php

$id = $_GET["id"];

$conn = mysqli_connect('localhost','root','','solidwears');

$sql = "DELETE FROM customers  WHERE id = '$id'";
mysqli_query($conn , $sql);

header("Location: customers.php")

 ?>
