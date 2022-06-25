<?php 
session_start();
include_once "../include/dbconn.php";
if(isset($_SESSION['admin_name']))
{
    header('location:index.php');
} 
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
    <style type="text/css">
        .post_img{
            height: 280px;
        }
    </style>

</head>

<body class="home">
    

   <div class="loginmodalbox " id="ritekhelamodalcenter" tabindex="-1">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
             <div class="modal-body ritekhela-bgcolor-two">
                <h5 class="modal-title">Admin Login</h5>
                <form method="post" action="admin_login.php">
                    <input type="text" name="admin" placeholder="Enter User Name">
                    <input type="text" name="password" placeholder="Type Here Password">
                    <input type="submit" name="submit" value="Login Now" class="ritekhela-bgcolor">
                    <a href="#" class="loginmodalbox-forget">Forget Password?</a>
                </form>
             </div>
          </div>
       </div>
    </div>


    <!-- jQuery -->
    <script src="script/jquery.js"></script>
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/slick.slider.min.js"></script>
    <script src="script/fancybox.min.js"></script>
    <script src="script/isotope.min.js"></script>
    <script src="script/smartmenus.min.js"></script>
    <script src="script/progressbar.js"></script>
    <script src="script/jquery.countdown.min.js"></script>
    <script src="script/functions.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $name= $_POST['admin'];
    $password= $_POST['password'];
    
    $lgn_qry= "SELECT * FROM `admin` WHERE `admin_name`='$name' AND `admin_password`='$password'";
    $run_lgn_qry= mysqli_query($con, $lgn_qry);
    
    if(mysqli_num_rows($run_lgn_qry)>0)
    {
        $_SESSION['admin_name']=$name;
        echo "<script>window.open('index.php','_self');</script>";
    }
    else
    {
        echo "<script>alert('Sorry..!!!!! Email or Password is wrong, try again');</script>";
    }
}
?>