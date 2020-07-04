<!DOCTYPE html>

<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include 'connect.php';
global $con;

$stmt = $con->prepare("select count(id) from student");
$stmt->execute();
$rows = $stmt->fetchColumn();
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$stmt1 = $con->prepare("select count(id) from student where briority=3");
$stmt1->execute();
$rows1 = $stmt1->fetchColumn();


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////            

$stmt2 = $con->prepare("select count(id) from detail ");
$stmt2->execute();
$rows2 = $stmt2->fetchColumn();


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$stmt3 = $con->prepare("select count(id) from student where briority=2");
$stmt3->execute();
$rows3 = $stmt3->fetchColumn();
?>






<html lang="en">
    <head>
        <title>complaints</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">

        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



        <link rel="stylesheet" href="css/aos.css">

        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

        <div class="site-wrap">

            <div class="site-mobile-menu">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            
<header class="site-navbar py-3" role="banner">

                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-11 col-xl-2">

                            <a href="index.html"><img src="img/core-img/favicon.ico.png" alt=""></a>
                        </div>
                        <div class="col-12 col-md-10 d-none d-xl-block">
                            <nav class="site-navigation position-relative text-right" role="navigation">

                                <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                                    <li class="active"><a href="admin.php">Home</a></li>
                                    
                                    <li class="has-children">
                                        <!-- Top Header Area -->
                                        <div class="top-header">
                                            <div class="container h-100">
                                                <div class="row h-100">
                                                    <div class="col-12 h-100">
                                                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                                                            <div class="academy-logo">
                                                                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                                                            </div>
                                                            <div class="login-content">
                                                                <a href="register.html">Register </a>
                                                                <a href="login.html"> / Login</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"  style="position: relative; top: 3px;fo"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                    </div>

                </div>
        </div>

    </header>



    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                
            </div>
        </div>
    </div>  


    <?php
    include 'connect.php';
    
    $id = $_GET["id"];

    $stmt = $con->prepare("select * from student where id=?");
    $stmt->execute(array($id));
    $row = $stmt->fetch();
    $count = $stmt->rowcount();
    if ($count > 0) {
        ?>
        <h1 class="text-center"> Edit Member</h1>
        <div class="container">
            <form class="form-horizontal" action="update.php" method="POST">
                <input type="hidden" name="userid" value="<?php echo $id; ?>"/>
                <div class="form-group form-group-lg">
                    <label class="control-label col-sm-2">user name</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control " value="<?php echo $row["username"]; ?>">
                    </div>
                </div>
               
                <div class="form-group form-group-lg" >
                    <label class="control-label col-sm-2">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>">
                    </div>
                </div>
                <div class="form-group form-group-lg">
                    <label class="control-label col-sm-2">National ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="nationalid" class="form-control" value="<?php echo $row["nationalid"]; ?> ">
                    </div>
                </div>
                <div class="form-group form-group-lg">
                    <div class="col-sm-10 col-lg-offset-2">
                        <input type="submit" value="save" class="btn btn-success btn-lg">
                    </div>
                </div>


            </form>
        </div>
    <?php
} else {
    echo 'no id';
}
?>
        
       






    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">

                      
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>
</html>

