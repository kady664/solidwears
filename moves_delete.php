

<?php

$id = $_GET["id"];

$conn = mysqli_connect('localhost','root','','solidwears');

$sql =  "DELETE FROM move WHERE id= '$id'";

$data = mysqli_query($conn , $sql);

header("Location: moves.php");


 ?>
