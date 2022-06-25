<?php include_once "include/dbconn.php"; ?> 
<html> 
<head>     
<title>Add Match</title>     
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
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <?php include_once('include/header.php'); ?>

    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3 class="m-0 text-dark">Add Shedules</h3>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a>Home</a></li>
                                <li class="breadcrumb-item active"> Shedules </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="row">
                <!-- ============================================================== -->
                <!-- data table  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Game</h4>
                            <small>Please Insert Game which are offered in this seoson</small>
                        </div>
                        <div class="card-body">
                            <!-- =================================================== -->
                            <!-- Form Start -->
                            <!-- =================================================== -->
                            <form method="post" action="add_shedule.php"  enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label> <b>Select Team 1</b> </label>
                                            <select name="team_one" class="form-control">
                                                <option>-- Select Team --</option>
                                                <?php
                                                $team_qry="SELECT * FROM `team account`";
                                                $team_run= mysqli_query($con, $team_qry);
                                                while ($team_row= mysqli_fetch_array($team_run))
                                                {
                                                    $team_one_id= $team_row['id'];
                                                    $team_one_name= $team_row['team_name'];

                                                    echo "<option value='$team_one_id'>$team_one_name</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label> <b>Game Type</b> </label>
                                            <select name="game_type" class="form-control">
                                                <option>-- Select Game Type --</option>
                                                <?php
                                                $qry="select * from game";
                                                $run_query= mysqli_query($con, $qry);
                                                while ($row= mysqli_fetch_array($run_query))
                                                {
                                                    $game_id= $row['id'];
                                                    $name= $row['game_name'];

                                                    echo "<option value='$game_id'>$name</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label> <b>Select Team 2</b> </label>
                                            <select name="team_two" class="form-control">
                                                <option>-- Select Team --</option>
                                                <?php
                                                $team_qry="SELECT * FROM `team account`";
                                                $team_run= mysqli_query($con, $team_qry);
                                                while ($team_row= mysqli_fetch_array($team_run))
                                                {
                                                    $team_two_id= $team_row['id'];
                                                    $team_two_name= $team_row['team_name'];

                                                    echo "<option value='$team_two_id'>$team_two_name</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label> <b>Select time</b> </label>
                                            <div>
                                                <input type="time" class="form-control" name="time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label> <b>Select Date</b> </label>
                                            <div>
                                                <input type="date" class="form-control" name="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label> <b>Ground</b> </label>
                                            <div>
                                                <input type="text" class="form-control" name="ground">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button name="submit" class="btn btn-info btn-sm">Add Match <i class="fa fa-share-square"></i></button>
                                </div>
                            </form>
                            <!-- =================================================== -->
                            <!-- Form End -->
                            <!-- =================================================== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======================= -->
<!-- Team Accounts -->



<!-- ============================================================== -->
<!-- end main wrapper -->
<!-- ============================================================== -->
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
    $team_one= $_POST['team_one'];
    $game_type= $_POST['game_type'];
    $team_two= $_POST['team_two'];
    $time= $_POST['time'];
    $date= $_POST['date'];
    $ground= $_POST['ground'];
    $status= "Pending";

    $match_qry=  "INSERT INTO `match_shedules`(`team_one`, `game_type`, `team_two`, `match_date`, `match_time`, `match_status`) VALUES ('$team_one', '$game_type', '$team_two', '$date', '$time', '$status')";
    $run= mysqli_query($con , $match_qry);
    if($run)
    {
        echo "<script>alert('Inserted');</script>";
    }
    else
    {
         echo "<script>alert('SomeThing Wrong');</script>";
    }
}
?>