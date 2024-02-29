<?php require_once('../zvinodiwa/database.php');
      require_once('../zvinodiwa/session.php');

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
            <div class="line"></div>
            <?php
                            if(isset($db,$_POST['submit'])){
                            $crop_id = mysqli_real_escape_string($db,$_POST['crop_id']);
                            $crop_name = mysqli_real_escape_string($db,$_POST['crop_name']);
                            $description = mysqli_real_escape_string($db,$_POST['description']);
                            $soil_required = mysqli_real_escape_string($db,$_POST['soil_required']);
                            $sql_e = "SELECT * FROM crop WHERE crop_id ='$crop_id'";
                            $res_e = mysqli_query($db, $sql_e);
                            if(mysqli_num_rows($res_e) > 0){
                            ?>
                             <div class="alert alert-danger  animated shake" >
                       <?php echo'Sorry the crop_id is already registered';?></div>
                        <?php    
                       }else{      
                  
                $sql = "INSERT INTO crop(crop_id,crop_name,description,soil_required)VALUES('$crop_id','$crop_name','$description','$soil_required')";
                $results = mysqli_query($db,$sql);
                        
                        
                        
                        if($results==1){
                              ?>
                        <div class="alert alert-success  animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfull! </strong><?php echo'Thank you for adding new Crop ';?></div>
                        <?php
                            error_reporting(0);
                            $username = 'samstrover';
                            $token = 'e14916d71b35f236e25a3fe9fc8c4449';
                            $bulksms_ws = 'http://portal.bulksmsweb.com/index.php?app=ws';
                            $destinations = $phone;
                            $message = "Hello $name thank you for subscribing to our services. You will receive updates of weather, Agricultural tips";

                            $ws_str = $bulksms_ws . '&u=' . $username . '&h=' . $token . '&op=pv';
                            $ws_str .= '&to=' . urlencode($destinations) . '&msg='.urlencode($message);
                            $ws_response = @file_get_contents($ws_str); 

                          }else{
                                ?>
                         <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Error! </strong><?php echo'OPPS something went wrong';?></div>
                        <?php    
                          }      
                      }
                 }

                
                ?>    
            <div class="line"></div>
            <div class="row">
            <div class="col-md-12 ssm">
            <div class="card">
            <p class="card-header sammac-media">Add Details </p>    
            <div class="card-body">
              <form action="crop_add.php" method="post">
             <div class="row">
             <div class="col-md-6 form-group">
                 <label>Crop ID</label>
                 <input type="number" name="crop_id" class="form-control" required>
             </div>  
              <div class="col-md-6 form-group">
                 <label>Crop Name</label>
                 <input type="text" name="crop_name" class="form-control" required>
             </div>       
                 
             </div>  
         <div class="row">
             <div class="col-md-6 form-group">
                 <label>Description</label>
                 <input type="text" name="description" class="form-control" maxlength="200" required>
             </div>   
             </div>  
             <div class="row">
             <div class="col-md-6 form-group">
                 <label>Soil Required</label>
                 <input type="text" name="soil_required" class="form-control" required>
             </div>   
             </div>      
                <div class="row">
                <div class="col-md-6 form-group">
                <button type="submit" name="submit" class="btn btn-success btn-block"><span class="fa fa-check"></span> Add</button>  
                </div> 
                 <div class="col-md-6 form-group">
                <button type="reset" class="btn btn-danger btn-block"><span class="fa fa-times"></span> Cancel</button>  
                </div>    
                </div>
                
             </form>
            </div>
            </div>    
            </div>
           
            </div>
             <div class="line"></div>
                <footer>
            <p class="text-center sm-sys">
            AgriEase  <?php echo date('Y');?>   
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
    <script>
  $( function() {
   $("#ssm").datepicker({
    minDate: 0,
    maxDate:1,
});
      
  } );
  </script>
   
</body>
</html>