<?php require_once('../zvinodiwa/database.php');
      require_once('../zvinodiwa/session.php');
      require_once('mazvi.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>AgriEase | Dashboard </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendor/Jquery-ui/jquery-ui.min.css">
<!--===============================================================================================-->
</head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
     <?php  include_once ('page-headers.php'); ?>
            <div class="row">
           
    <div class="col-md-3">
      <div class="card-counter warning">
        <i class="fa fa-user-circle-o"></i>
        <span class="count-numbers"><?php echo $sammac;?></span>
        <span class="count-name">Farmers</span>
      </div>
    </div>
 <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-info"></i>
        <span class="count-numbers"><?php echo $sammac1;?></span>
        <span class="count-name">Agri Tips</span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-thermometer-half"></i>
        <span class="count-numbers"><?php echo $sammac2;?></span>
        <span class="count-name">Weather</span>
      </div>
    </div>
     <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers"><?php echo $sammac3;?></span>
        <span class="count-name">Users</span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-counter plant">
        <i class="fa fa-plant"></i>
        <span class="count-numbers"><?php echo $sammac4;?></span>
        <span class="count-name">Crop</span>
      </div>
    </div>
  
           
            </div>
           <?php require('weather.php');?>
            <div class="line"></div>
            
             <div class="line"></div>
                <footer>
            <p class="text-center sm-sys">
           AgriEase <?php echo date('Y');?>  
            </p>
            </footer>
           <div class="line"></div> 
        
        </div>
    </div>
  
       
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script>
    <script src="../vendor/Jquery-ui/jquery-ui.min.js"></script>
   
</body>
</html>