<?php 
// session_start();
require_once('../private/initialize.php');

$getall_q = " SELECT * FROM products";
$result = mysqli_query($db,$getall_q);
?>