<?php
include_once "include/dbconn.php";
/*if(isset($_POST['add_team']))
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
}*/
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
    <style>
        label{
            font-weight: bold;
            color: #17a2b8;
        }
    </style>
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
							<div class="card-header bg-info"> Add Tournaments </div>
							<div class="card-body">
								<form method="POST" action="add_team.php" enctype="multipart/form-data">
									<div class="row">
										<div class="form-group col-sm-6">
											<label> Tournament Name </label>
                                            <input type="text" name="tournament_name" placeholder="Tournament Name" class="form-control">
										</div>
                                        <div class="form-group col-sm-6">
                                            <label> Choose Image </label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
									</div>
									
									<div class="row">
                                        <div class="form-group col-sm-6">
                                            <label> Starting Date</label>
                                            <input type="date" name="starting_date" value="" class="form-control" />
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label> Ending Date</label>
                                            <input type="date" name="ending_date" value="" class="form-control" />
                                        </div>
									</div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label> Description </label>
                                            <textarea class="form-control" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-info col-sm-3"><i class="fa fa-share-square"></i> Submit </button>
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