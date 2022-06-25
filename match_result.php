<?php
include_once "include/dbconn.php";
?>
<html>
<head>
    <title></title>
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
                            <h3 class="m-0 text-dark">Matches Results</h3>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a>Home</a></li>
                                <li class="breadcrumb-item active"> Matchs Results </li>
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
                            <div class="col-sm-6">
                                <h4 class="mb-0"> Games Catogory</h4>
                                <small class="text-danger"> Here Admin can Check Matches Result</small>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Teams</th>
                                    <th>Game Type</th>
                                    <th>Date / Time</th>
                                    <th>Status</th>
                                    <th>Winner</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $select_qry= "SELECT * FROM `match_shedules`";
                                $select_run= mysqli_query($con, $select_qry);
                                $no=1;
                                while ($row= mysqli_fetch_array($select_run))
                                {
                                    $id= $row['id'];
                                    $team1= $row['team_one'];
                                    $team2= $row['team_two'];
                                    $game= $row['game_type'];
                                    $date= $row['match_date'];
                                    $time= $row['match_time'];
                                    $status= $row['match_status'];

                                    ?>
                                    <tr>
                                        <td><?php echo $no++;  ?> </td>
                                        <td><?php 
                                            $team_qry= "SELECT * FROM `team account` WHERE `team_name`='$team1' and '$team2'";
                                            $run_team= mysqli_query($con, $team_qry);
                                            $team_row= mysqli_fetch_array($run_team);
                                           
                                            
                                         ?></td>
                                        <td><?php echo ""; ?></td>
                                        <td><?php echo ""; ?></td>
                                        <?php
                                        if($status=='Pending')
                                        {
                                            ?>
                                            <td class="bg-danger" style="color: white;"><?php echo $status; ?></td>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <td class="bg-success" style="color: white;"><?php echo $status; ?></td>
                                            <?php
                                        }
                                        ?>
                                      
                                        <td><?php  ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Teams</th>
                                    <th>Game Type</th>
                                    <th>Date / Time</th>
                                    <th>Status</th>
                                    <th>Winner</th>
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
</body>
</html>

