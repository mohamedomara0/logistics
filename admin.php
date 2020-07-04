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
    
    </div>  
    
      
      
      
      <div class="container home-stats text-center">
    <h1>Dash Board</h1>
    <div class="row">
        <div class="col-md-3 ">
            <div class="stat st-member"  style=" background-color:#3498db; padding: 55px;  margin: 20px;font-size: 30px;"> Total Members <br><span><a href="allmembers.php" style="color: white;  direction: none;"><?php echo $rows; ?></a></span> </div>
        </div>
        <div class="col-md-3">
            <div class="stat st-member" style=" background-color:#c0392b;  padding: 55px; margin: 20px;font-size: 30px;"> Pending Members <br><span><a href="activatemembers.php" style="color: white; direction: none;"><?php echo $rows1; ?></a></span> </div>
        </div>
        <div class="col-md-3">
            <div class="stat st-member" style=" background-color:#d35400;  padding: 55px; margin: 20px;font-size: 30px;"> All problems <span><a href="show.php" style="color: white; direction: none;"><br><?php echo $rows2; ?></a></span> </div>
        </div>
        <div class="col-md-3">
            <div class="stat st-member" style=" background-color:#8e44ad; padding: 55px; margin: 20px;font-size: 30px; "> The Beholder <span><a href="members.php" style="color: white; direction: none;"><?php echo $rows3; ?></a></span> </div>
        </div>
    </div>
</div>
 
    

    <footer class="site-footer">
      
      <p align="center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >omara team</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>

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

