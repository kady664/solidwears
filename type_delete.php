

<?php

$id = $_GET["id"];

$conn = mysqli_connect('localhost','root','','solidwears');

$sql =  "DELETE FROM type WHERE id= '$id'";

$data = mysqli_query($conn , $sql);

header("Location: type.php");


 ?>
