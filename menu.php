<?php 
include_once 'dbconn.php';
$sel= "SELECT * FROM `team account`";
$sel_run= mysqli_query($con, $sel);
?>
<!doctype html>
<html lang="zxx">


<!--  36:22-->
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sports Managment System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/fontawesome-all.css">
    <link rel="stylesheet" href="../css/slick-slider.css">
    <link rel="stylesheet" href="../css/fancybox.css">
    <link rel="stylesheet" href="../css/smartmenus.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="../css/responsive.css">

</head>

<body class="home">
<div class="ritekhela-wrapper">

<!--// Header //-->
<header id="ritekhela-header" class="ritekhela-header-one">
    <!--// TopStrip //-->
            <div class="ritekhela-topstrip">
                <div class="container">
                    <div class="row">
                        
                        <aside class="col-md-6">
                            <strong>Latest News :</strong>
                            <div class="ritekhela-latest-news-slider">
                                <div class="ritekhela-latest-news-slider-layer">Welcome visitor you can Login or Create an Account </div>
                                <div class="ritekhela-latest-news-slider-layer">While familiar with fellow European nation France Hareide. </div>
                            </div>
                        </aside>
                        <aside class="col-md-6">
                            <ul class="ritekhela-user-strip">
                                <li><a href="deptt/dept_login.php"><i class="fa fa-user-alt"></i> Department Login</a></li>
                                <li><a href="admin/admin_login.php"><i class="fa fa-lock"></i> Admin Login</a></li>
                            </ul>
                        </aside>

                    </div>
                </div>
            </div>
    <!--// Main Header //-->
    <div class="ritekhela-main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.php" class="ritekhela-logo"><h2><strong class="ritekhela-color">Sports Managment System </strong> </h2>
                    <div class="ritekhela-right-section">
                        <div class="ritekhela-navigation">
                            <span class="ritekhela-menu-link">
                                <span class="menu-bar"></span>
                                <span class="menu-bar"></span>
                                <span class="menu-bar"></span>
                            </span>
                            <nav id="main-nav">
                                <ul id="main-menu" class="sm sm-blue">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="#">Features <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="all-fixture.php">All Matches</a></li>
                                            <li><a href="winner.php">Winners</a></li> 
                                            <li><a href="gallery-simple.php">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Teams Profiles <i class="fa fa-caret-down"></i> </a>
                                        <ul>
                                            <?php
                                            while ($row= mysqli_fetch_array($sel_run)) 
                                            {
                                                $id= $row['id'];
                                                $dep_name= $row['department_name'];
                                                $team_name= $row['team_name']; 

                                            ?>
                                            <li><a href="team_detail.php?view=<?php echo $id; ?>"><?php echo  $team_name; ?></a></li>
                                            <?php } ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="new_player.php">Apply</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <ul class="ritekhela-navsearch">
                            
                            <li><a href="#" data-toggle="modal" data-target="#ritekhelamodalsearch"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Header //-->

</header>
</body>
</html>