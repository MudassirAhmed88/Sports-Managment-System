<?php
include_once "include/dbconn.php";
$del_id= @$_GET['delete'];
$qry= "DELETE FROM `game` WHERE id='$del_id'";
$run= mysqli_query($con, $qry);
if($run)
{
    echo "<script>alert('Deleted!!'); window.open('add_game.php','_self')</script>";
}
?>