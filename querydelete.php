<?php 
include'connection.php';
$id = $_GET['id'];

$query="DELETE FROM `userdata` WHERE id = $id";

mysqli_query($conn,$query);
echo "<script>alert('Deleted....')</script>";
header('refresh:1,url=dashboard.php');



 ?>