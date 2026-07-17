<?php
include('config.php');

$condition = $_GET['con'];
$id = $_GET['id'];
$table = $_GET['t'];
$col = $_GET['col'];


switch ($condition) {
    case "delete":
        $q = mysqli_query($con, "DELETE FROM $table WHERE id='$id'");
        // echo "DELETE  $table WHERE id='$id'";
        if ($q) {
            header("location:tables.php?id=$col");
        }
        break;


    case "update":
        $q = mysqli_query($con, "UPDATE $table SET action=0 WHERE id='$id'");
        if ($q) {
            header("location:tables.php?id=$col");
        }
        break;


    case "restore":
        $q = mysqli_query($con, "UPDATE $table SET action=1 WHERE id='$id'");
        // echo "UPDATE $table SET action=1 WHERE id='$id'";
        if ($q) {
            header("location:tables.php?id=$col");
        }
        break;
    default:
        echo "Invalid 'place' value.";


}
?>