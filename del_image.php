<?php
include_once "include/dbconn.php";
$del_id= @$_GET['delete'];
$qry= "DELETE FROM `gallery` WHERE id='$del_id'";
$run= mysqli_query($con, $qry);
if($run)
{
    echo "<script>alert('Deleted!!'); window.open('add_image.php','_self')</script>";
}
?>