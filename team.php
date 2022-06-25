<?php
include_once "include/dbconn.php";
?>

<head>
   	<link rel="stylesheet" href="style/bootstrap.css">
   	<link rel="stylesheet" href="style/assets/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="style/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="style/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="style/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="style/datatables/css/fixedHeader.bootstrap4.css">
    <script src="style/jqry.js"></script>
	<script src="style/bootstrap.min.js"></script>
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
							<h3 class="m-0 text-dark">All Teams</h3>
						  </div><!-- /.col -->
						  <div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
							  <li class="breadcrumb-item"><a>Home</a></li>
							  <li class="breadcrumb-item active"> Teams </li>
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0"> Accounts Details</h4>
                                <small> All the which are register in this system</small>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Team Name</th>
                                                <th>Department</th>
                                                <th>Gmail</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                                <th title="Add Team"><a href="add_team.php" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a></button></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $select_qry= "SELECT * FROM `team account`";
                                        $select_run= mysqli_query($con, $select_qry);
                                        $no=1;
                                        while ($row= mysqli_fetch_array($select_run)) {
                                            $id= $row['id'];
                                            $team_name = $row['team_name'];
                                            $department = $row['department_name'];
                                            $gmail = $row['team_gmail'];
                                            $password = $row['team_password'];

                                        ?>
											<tr>
												<td> <?php echo $no++; ?> </td>
												<td> <?php echo $team_name; ?> </td>
												<td>
                                                    <?php
                                                    $qry= "select * from department where id='$id'";
                                                    $dept_run= mysqli_query($con, $qry);
                                                    while ($dept_row= mysqli_fetch_array($dept_run))
                                                    {
                                                        $name= $dept_row['department_name'];
                                                        echo $name;
                                                    }
                                                    ?>
                                                </td>
												<td> <?php echo $gmail; ?> </td>
												<td> <?php echo $password; ?> </td>
												<td>Active </td>
												<td><a href="" class="text-danger"><i class="fa fa-trash-alt"></i></a></td>
											</tr>
                                        <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>#</th>
                                                <th>Team Name</th>
                                                <th>Department</th>
                                                <th>Gmail</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                                <th title="Add Team"><a href="add_team.php" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a></button></th>
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
    <script src="style/datatables/js/jquery.dataTables.min.js"></script>
    <script src="style/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="style/datatables/js/dataTables.buttons.min.js"></script>
    <script src="style/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="style/datatables/js/data-table.js"></script>
    <script src="style/datatables/js/jszip.min.js"></script>
    <script src="style/datatables/js/pdfmake.min.js"></script>
    <script src="style/datatables/js/vfs_fonts.js"></script>
    <script src="style/datatables/js/buttons.html5.min.js"></script>
    <script src="style/datatables/js/buttons.print.min.js"></script>
    <script src="style/datatables/js/buttons.colVis.min.js"></script>
    <script src="style/datatables/js/dataTables.rowGroup.min.js"></script>
    <script src="style/datatables/js/dataTables.select.min.js"></script>
    <script src="style/datatables/js/dataTables.fixedHeader.min.js"></script>
</body>
</html>