<?php
include_once "include/dbconn.php";
if(isset($_POST['add_game']))
{
    $game= $_POST['game_name'];
    $insert_qry= "INSERT INTO `game`(`game_name`) VALUES ('$game')";
    $run= mysqli_query($con,$insert_qry);
    if($run)
    {
        echo "<script>alert('Inserted');</script>";
    }
    else
    {
        $msg="There is some problem.. plz try again";
    }
}
?>
<head>
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
                            <h3 class="m-0 text-dark">Manage Games</h3>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a>Home</a></li>
                                <li class="breadcrumb-item active"> Games </li>
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
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Game</h4>
                            <small>Please Insert Game which are offered in this seoson</small>
                        </div>
                        <div class="card-body">
                            <form action="add_game.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label> <b>Sport Name</b> </label><br> <small class="text-danger">( e.g: Football, Cricket, Bedmentom etc )</small>
                                    <input type="text" name="game_name"  placeholder="Department Name" class="form-control" required />
                                </div>
                                <div>
                                    <button name="add_game" class="btn btn-info btn-sm">Add <i class="fa fa-share-square"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ========================================== -->
                <!-- ========= Depatment List ================= -->
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0"> Total Games</h4>
                            <small> Follwing are the games which are offring this season</small>
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
                                            <td> <?php echo $game_name?> </td>
                                            <td>
                                                <a href="del_game.php?delete=<?php echo $id;?>"><i class="fa fa-trash text-danger"></i></a>
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