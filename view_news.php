<?php include_once "include/dbconn.php"; 
$select_qry= "SELECT * FROM `news_updates`";
$select_run= mysqli_query($con, $select_qry);
$no=1;

?>
<html>
<head>
    <title>Add Match</title>
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
                            <h3 class="m-0 text-dark">News Updates</h3>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a>Home</a></li>
                                <li class="breadcrumb-item active"> News & Updates </li>
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
                           <div class="row mb-2">
                            <div class="col-sm-6">
                                <h4 class="mb-0"> News Details</h4>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <a href="add_news.php" class="btn btn-info"><i class="fas fa-plus"></i>Add News</a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                    <thead>
                                    <tr>
                                       	<th>#</th>
										<th>Title</th>
										<th>Published Date</th>
										<th>Posted by</th>
										<th>Image</th>
										<th>Contents</th>
                                        <th title="Add Team"><a href="add_news.php" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a></button></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(mysqli_num_rows($select_run)==0)
                                        {
                                            ?>
                                            <tr>
                                                <td colspan="20" class="text-center text-danger" style="font-size: 16px;"><b>News Not Available</b></td>
                                            </tr>
                                            <?php
                                        }
                                        else
                                        {
                                        while ($row= mysqli_fetch_array($select_run)) {
                                                $id= $row['id'];
                                                $title = $row['title'];
                                                $author = $row['author'];
                                                $date = $row['date'];
                                                $image = $row['image'];
                                                $des= substr($row['description'], 0,100);

                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $title; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td><?php echo $author; ?></td>
                                            <td><?php echo "<img src='../imags/$image' width='50px' height='50px'>"; ?></td>
                                            <td><?php echo $des; ?></td>
                                            <td><a href=""><i class="fa fa-trash text-danger"></i></a></td>
                                        </tr>
                                    <?php } } ?>
                                    </tbody>
                                    <tfoot>
                                   		<tr>
											<th>#</th>
											<th>Title</th>
											<th>Published Date</th>
											<th>Posted by</th>
											<th>Image</th>
											<th>Contents</th>
											<th title="Add Team"><a href="add_news.php" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a></button></th>
                                    	</tr>
                                    </tfoot>
                                </table>
                            </div>
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