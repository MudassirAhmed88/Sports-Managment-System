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
                            <h3 class="m-0 text-dark">Matches Shedules</h3>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a>Home</a></li>
                                <li class="breadcrumb-item active"> Match </li>
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
                                <small class="text-danger"> Plz click on following link to view matches shedules</small>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <a href="add_shedule.php" class="btn btn-info"><i class="fas fa-plus"></i>Add Shedule</a>
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
                                    <th>Game Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $select_qry= "select * from game";
                                $select_run= mysqli_query($con, $select_qry);
                                $no=1;
                                while ($row= mysqli_fetch_array($select_run))
                                {
                                    $id= $row['id'];
                                    $game_name= $row['game_name'];

                                    ?>
                                    <tr>
                                        <td> <?php echo $no++;  ?> </td>
                                        <td> <a href="view_matchs_shedule.php" class="text-primary"><?php echo $game_name?> Matches</a> </td>
                                        <td>
                                            <a href="view_add_shedule.php?view=<?php echo $id; ?>"><i class="fa fa-eye text-primary"></i> View</a>
                                            &nbsp;&nbsp;
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Game Name</th>
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
</body>
</html>

