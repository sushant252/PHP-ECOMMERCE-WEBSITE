<?php

include('config.php');

$id=$_GET['id'];

$q=mysqli_query($con,"DELETE FROM `product` WHERE id = '$id'");
if($q)
{
	header("location:trash-product-list.php");
}
?>