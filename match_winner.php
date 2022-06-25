<?php 
include_once "include/dbconn.php"; 
$get_id= @$_GET['winner']; 
$sel_qry= "select * from match_shedules where id= '$get_id'";
$run= mysqli_query($con, $sel_qry);
$row= mysqli_fetch_array($run);
//$teamOne= $row['team_one'];
//$teamTwo= $row['team_two'];

?>
<html>
<head>
    <title>View Matches</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/assets/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="style/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="style/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="style/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="style/datatables/css/fixedHeader.bootstrap4.css">
    <script src="style/bootstrap.min.js"></script>
    <script src="style/jqry.js"></script></head>

<body>
<div class="dashboard-main-wrapper">
    <?php include_once('include/header.php'); ?>
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3 class="m-0 text-dark">Conform Winner</h3>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a>Home</a></li>
                                <li class="breadcrumb-item active"> Match/ Winner </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row mb-2">
                            <?php
                                /*$s_team1= "SELECT * FROM `team account` WHERE `id`='$teamOne'";
                                $s_team2= "SELECT * FROM `team account` WHERE `id`='$teamTwo'";
                                $s_run1= mysqli_query($con, $s_team1);
                                $s_run2= mysqli_query($con, $s_team2);
                                $s_row1= mysqli_fetch_array($s_run1);
                                $s_row2= mysqli_fetch_array($s_run2);

                                ?>
                                <h4><?php echo $s_row1['team_name'];  ?></h4>
                                &nbsp  &nbsp  &nbsp<h3 style="color: red"> VS </h3>&nbsp  &nbsp  &nbsp
                                <h4><?php echo $s_row2['team_name'];  ?></h4>
                                <?php */
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" name="submit">
                            <table>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        <select name="status" class="form-control wd-450" required="true" >
                                            <option>Completed</option>
                                            <option>Pending</option>
                                            <option>Draw</option>
                                        </select>
                                    </td> 

                                    <th>Winning Team:</th>
                                    <td>
                                        <select name="w_team" class="form-control" required="true" >
                                            <option>--Winning Team--</option>
                                            <?php
                                                $team_qry="SELECT * FROM `team account`";
                                                $team_run= mysqli_query($con, $team_qry);
                                                while ($team_row= mysqli_fetch_array($team_run))
                                                {
                                                    $team_two_id= $team_row['id'];
                                                    $team_two_name= $team_row['team_name'];

                                                    echo "<option value='$team_two_name'>$team_two_name</option>";
                                                }
                                                ?>
                                        </select>
                                    </td> 

                                    <th>Remark:</th>
                                    <td> <textarea name="remark" placeholder="Remark" rows="1" cols="50" class="form-control wd-450" required="true"></textarea></td>

                                    <td><button class="btn btn-primary" type="submit" name="submit">Update</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end data table  -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>



<!-- Optional JavaScript -->
<script src="datatables/js/jquery.dataTables.min.js"></script>
<script src="datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="datatables/js/dataTables.buttons.min.js"></script>
<script src="datatables/js/buttons.bootstrap4.min.js"></script>
<script src="datatables/js/data-table.js"></script>
<script src="datatables/js/jszip.min.js"></script>
<script src="datatables/js/pdfmake.min.js"></script>
<script src="datatables/js/vfs_fonts.js"></script>
<script src="datatables/js/buttons.html5.min.js"></script>
<script src="datatables/js/buttons.print.min.js"></script>
<script src="datatables/js/buttons.colVis.min.js"></script>
<script src="datatables/js/dataTables.rowGroup.min.js"></script>
<script src="datatables/js/dataTables.select.min.js"></script>
<script src="datatables/js/dataTables.fixedHeader.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $status= $_POST['status'];
    $w_team= $_POST['w_team'];
    $remark= $_POST['remark'];

    $update= "UPDATE `match_shedules` SET `match_status`='$status', `remarks`='$remark', `winner`='$w_team' WHERE id='$get_id'";
    $qry= mysqli_query($con, $update);
    if($qry)
    {
        echo "<script>alert('Its Done');</script>";
    }
}
?>