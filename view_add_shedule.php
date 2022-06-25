<?php 
include_once "include/dbconn.php"; 
$get_id= $_GET['view']; 
$sel_qry= "select * from match_shedules where game_type= '$get_id'";
$run= mysqli_query($con, $sel_qry);
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
    <script src="style/jqry.js"></script>
</head>

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
                            <h3 class="m-0 text-dark">Matches Shedules</h3>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a>Home</a></li>
                                <li class="breadcrumb-item active"> Match/ View Shedule </li>
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
                            <a href="match.php" class="btn btn-info btn-sm"><i class="fa fa-backward"></i> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Team One</th>
                                    <th>Team two</th>
                                    <th>Match Type</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sel_qry= "select * from match_shedules where game_type= '$get_id'";
                                $run= mysqli_query($con, $sel_qry);
                                $no=1;
                                while ($row= mysqli_fetch_array($run))
                                {
                                    $id= $row['id'];
                                    $team_one= $row['team_one'];
                                    $team_two= $row['team_two'];
                                    $game_type= $row['game_type'];
                                    $match_date= $row['match_date'];
                                    $match_time= $row['match_time'];
                                    $match_status= $row['match_status'];

                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td>
                                        <?php 
                                        $teamOne_qry= "SELECT * FROM `team account` WHERE id='$team_one'";
                                        $teamOne_run= mysqli_query($con,$teamOne_qry);
                                        $teamOne_row= mysqli_fetch_array($teamOne_run);
                                        echo $teamOne_row['team_name']; 

                                        ?>
                                        </td>
                                        <td><?php 
                                        $teamTwo_qry= "SELECT * FROM `team account` WHERE id='$team_two'";
                                        $teamTwo_run= mysqli_query($con,$teamTwo_qry);
                                        $teamTwo_row= mysqli_fetch_array($teamTwo_run);
                                        echo $teamTwo_row['team_name']; 
                                         ?></td>
                                        <td><?php 
                                            $select_qry= "select * from game where id='$game_type'";
                                            $select_run= mysqli_query($con,$select_qry);
                                            $row= mysqli_fetch_array($select_run);
                                            echo $row['game_name'];
                                         ?></td>
                                        <td><?php echo $match_date; ?></td>
                                        <td><?php echo $match_time; ?></td>
                                        <?php
                                        if ($match_status=="Completed") 
                                        {
                                           ?>
                                           <td class="bg-success" style="color: white"><?php echo $match_status; ?></td>
                                           <?php 
                                        }
                                        else
                                        {
                                            ?>
                                            <td class="bg-danger" style="color: white"><?php echo $match_status; ?></td>
                                            <?php
                                        }
                                        ?>
                                        
                                        ?>
                                        <td class="text-primary"><a href="match_winner.php?winner=<?php echo $id; ?>">Click Here to Conform Winner</a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Team One</th>
                                    <th>Team two</th>
                                    <th>Match Type</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
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