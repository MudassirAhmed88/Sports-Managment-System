<?php 
include_once 'include/header.php';
 ?>
<link rel="stylesheet" href="style/bootstrap.css"></link>
<link rel="stylesheet" href="style/assets/fontawesome/css/fontawesome-all.css">
<script src="style/jqry.js"></script>
<script src="style/bootstrap.js"></script>
<script src="style/bootstrap.min.js"></script>
<div class="container-fluid">
    <div class="row">
       <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
            <div class="card shadow border-0 ">
                <div class="header col-lg-10 col-sm-10 col-xs-8 mx-auto p-2 rounded text-light shadow bg-primary" style="margin-top:-10px; height:40px;"> Manage Department</div>
                <h5></h5><div class="card-body p-0 pb-2">
                <p class="ml-3"><small class="h6 font-weight-light ml-4">Add Department</small> <i class="fas fa-home fa-2x"></i></p>
                   <hr>
                    <a href="department.php" class="ml-3 text-info">view Details</a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
            <div class="card shadow border-0 ">
                <div class="header col-lg-10 col-sm-10 col-xs-8 mx-auto p-2 rounded text-light shadow bg-info " style="margin-top:-10px; height:40px;"> Manage Teams </div>
                <h5></h5><div class="card-body p-0 pb-2">
                <p class="ml-3"><small class="h6 font-weight-light ml-4">Add Teams</small> <i class="fas fa-key fa-2x"></i></p>
                   <hr>
                    <a href="team.php"  class="ml-3 text-info">view Details</a>
                </div>
            </div>
        </div>

    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
        <div class="card shadow border-0 ">
            <div class="header col-lg-11 col-sm-10 col-xs-8 mx-auto p-2 rounded text-light shadow bg-secondary " style="margin-top:-10px; height:40px;"> Manage Games Catogory</div>
            <h5></h5><div class="card-body p-0 pb-2">
                <p class="ml-3"> <small class="h6 font-weight-light ml-4">Add Games Catogory </small > <i class="fas fa-plus fa-2x"></i></p>

                <hr>
                <a href="add_game.php"  class="ml-3 text-info">view Details</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
		<div class="card shadow border-0 ">
			<div class="header col-lg-10 col-sm-10 col-xs-8 mx-auto p-2 rounded text-light shadow bg-warning " style="margin-top:-10px; height:40px;">Add Manage Matches</div>
			<h5></h5><div class="card-body p-0 pb-2">
			<p class="ml-3"> <small class="h6 font-weight-light ml-4"> Matches Shedules</small > <i class="fas fa-calendar-alt fa-2x"></i></p>

			   <hr>
				<a href="match.php"  class="ml-3 text-info">view Details</a>
			</div>
		</div>
    </div>
        
    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
		<div class="card shadow border-0 ">
			<div class="header col-lg-10 col-sm-10 col-xs-8 mx-auto p-2 rounded text-light shadow bg-danger " style="margin-top:-10px; height:40px;">Manage News & Updates</div>
			<h5></h5><div class="card-body p-0 pb-2">
			<p class="ml-3"> <small class="h6 font-weight-light ml-4"> News & Updates</small > <i class="fa fa-newspaper fa-2x"></i></p>

			   <hr>
				<a href="view_news.php"  class="ml-3 text-info">view Details</a>
			</div>
		</div>
     </div>  

</div>