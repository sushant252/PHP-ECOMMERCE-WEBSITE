<?php

include('config.php');

$id=$_GET['id'];

$q=mysqli_query($con,"UPDATE `product` SET action = 0 WHERE id = '$id'");
if($q)
{
	header("location:product-list.php");
}

?>