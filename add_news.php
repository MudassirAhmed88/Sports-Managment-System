<html>
<head>
    <title>Tournaments</title>
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
                            <h3 class="m-0 text-dark">Add News</h3>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a>Home</a></li>
                                <li class="breadcrumb-item active"> News </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-info"> Add News </div>
            <div class="card-body">
                <form method="POST" action="add_news.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label> Title: </label>
                            <input type="text" name="title" placeholder="Title" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label> Choose Image: </label>
                            <input type="file" name="fileimage" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label> Date:</label>
                            <input type="date" name="date" value="" class="form-control" />
                        </div>
                        <div class="form-group col-sm-6">
                            <label> Posted by:</label>
                            <input type="text" name="author" value="" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label> Description </label>
                            <textarea class="form-control" name="description" rows="8"></textarea>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-info col-sm-3"><i class="fa fa-share-square"></i> Submit </button>
                </div>
                <div class="card-footer">

                </div>
              </form>
            </div>
        </div>  
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        include('include/dbconn.php');
        
        $filename= $_FILES['fileimage']['name'];
        $tempname= $_FILES['fileimage']['tmp_name'];
        $folder= "../images/".$filename;
        move_uploaded_file($tempname, $folder);
        
        $title= $_POST['title'];
        $author_name= $_POST['author'];
        $date= $_POST['date'];
        $description= $_POST['description'];
        
        $qry= "INSERT INTO `news_updates`(`title`, `author`, `date`, `image`, `description`) VALUE ('$title','$author_name','$date','$folder','$description')";
        
        $result= mysqli_query($con, $qry);
        
        if($result)
        {
            echo "<script>alert('News Inserted');</script>";
            echo "<script>window.open('view_news.php','_self');</script>";
        }
    }
?>
