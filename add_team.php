<?php
include_once "include/dbconn.php";
if(isset($_POST['add_team']))
{
    $deptt_id= $_POST['department_id'];
    $team_name= $_POST['team_name'];
    $gmail= $_POST['team_gmail'];
    $password= $_POST['team_password'];
    $insert_qry= "INSERT INTO `team account`(`department_name`, `team_name`, `team_gmail`, `team_password`) VALUES ('$deptt_id','$team_name','$gmail','$password')";
    $run= mysqli_query($con,$insert_qry);
    if($run)
    {
        echo "<script>alert('Inserted');</script>";
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
    <script src="style/jqry.js"></script>
	<script src="style/bootstrap.min.js"></script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <?php include_once('include/header.php'); ?>
        <section>
					<div class="container-fluid">
						<div class="card">
							<div class="card-header bg-info"> Add Team </div>
							<div class="card-body">
								<form method="POST" action="add_team.php" enctype="multipart/form-data">
									<div class="row">
										<div class="form-group col-sm-6">
											<label> Department </label>
                                            <select name="department_id" class="form-control">

                                                <?php
                                                echo "<option selected disabled>--Select Department--</option>";
                                                $dept_select= "select * from department";
                                                $dept_run= mysqli_query($con, $dept_select);
                                                while ($row= mysqli_fetch_array($dept_run))
                                                {
                                                    $id= $row['id'];
                                                    $name= $row['department_name'];

                                                    echo "<option value='$id'>$name</option>";
                                                }
                                                ?>
                                            </select>
										</div>
										<div class="form-group col-sm-6">
											<label> Team Name</label>
											<input type="text" name="team_name" value="" placeholder="Team Name" class="form-control" />
										</div>
									</div>
									
									<div class="row">
										<div class="form-group col-sm-6">
											<label> Gmail</label>
											<input type="text" name="team_gmail" value="" placeholder="example@gmail.com" class="form-control" />
										</div>
										<div class="form-group col-sm-6">
											<label> Password </label>
											<input type="text" name="team_password" maxlength="10" min="3"  placeholder="password" class="form-control" required />
										</div>
									</div>
                                    <button type="submit" name="add_team" class="btn btn-info col-sm-3"><i class="fa fa-share-square"></i> ADD TEAM </button>
							</div>
									<div class="card-footer">

									</div>
							  </form>
						</div>
					</div>  
				</section>
    </div>
    
    
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