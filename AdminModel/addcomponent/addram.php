<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <?php
        include './allcomponent.php';
    ?>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../adminstyle/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../adminstyle/css/Admin.min.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="d/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="d/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="d/css/creative.css" type="text/css">

    
    
    
    
    
    <body>

           
<form method="POST">
      <!-- Modal content-->
    <div id="page-wrapper" >
            <div id="page-inner">
                
                    <div class="col-md-12">
        <div class="body">
            <?php
           
         if(isset($_GET['updateid']))
         {
             $getram=new allcomponent();
             $ram=$getram->getrambyid($_GET['updateid']); 
             
               $id=$_GET['updateid'];
        
             
             
             
		?>
             <h4> <strong class='lead'><b>UPDATE RAM</b></strong></h4>
              <div class="body">
         
			<div class="form-group">
              <label for="usrname"> Brand </label>
              <input type="text" class="form-control" name="txtbrand" value="<?php echo $ram[0];?>" required>
            </div>
			<div class="form-group">
              <label for="usrname"> Model</label>
              <input type="text" class="form-control" name="txtmodel" value="<?php echo $ram[1];?>" required>
            </div>
			
            <div class="form-group">
              <label> Memory Type</label>
              <input type="text" class="form-control" name="txtmemorytype" value="<?php echo $ram[2];?>" required>
            </div>
            <div class="form-group">
              <label>Price</label>
              <input type="text" class="form-control" name="txtprice" value="<?php echo $ram[3];?>" required>
            </div>
            <input type="submit" name="updatebtn" class="btn btn-primary" value="Update RAM">
        </div>
               
      <?php
      if(isset($_POST['updatebtn']))
               {
                        $brand=$_POST['txtbrand'];
                        $model=$_POST['txtmodel'];
                       
                        $memorytype=$_POST['txtmemorytype'];
                        $price=$_POST['txtprice'];

                       $allcomponent=new allcomponent();
                       $ram=$allcomponent->updateram($_GET['updateid'], $brand, $model, $memorytype, $price);
                        
                      
                  }
         }
 else 
     {
 
         ?>
   <h4> <strong class='lead'><b>ADD RAM</b></strong></h4>
       <div class="body">
         
			<div class="form-group">
              <label for="usrname"></span> Brand </label>
              <input type="text" class="form-control" name="txtbrand" required>
            </div>
			<div class="form-group">
              <label for="usrname"></span> Model</label>
              <input type="text" class="form-control" name="txtmodel" required>
            </div>
			
            <div class="form-group">
              <label></span> Memory Type</label>
              <input type="text" class="form-control" name="txtmemorytype" required>
            </div>
            <div class="form-group">
              <label> Price</label>
              <input type="text" class="form-control" name="txtprice" required>
            </div>
            <input type="submit" name="addbtn" class="btn btn-primary" value="Add RAM">
        </div>
      
      
     <?php
                    if(isset($_POST['addbtn']))
               {
                        $brand=$_POST['txtbrand'];
                        $model=$_POST['txtmodel'];
                       
                        $memorytype=$_POST['txtmemorytype'];
                        $price=$_POST['txtprice'];

                       $allcomponent=new addallcomponent();
                       $allcomponent->addram($brand, $model, $memorytype, $price);
                  }
                 
                  
       
       
       
       
     }
     ?>
            </div>
  </div>
      
      
      
      
      
      
      
      
      
      
          
      
        </div>
            </form>
               
            
    </body>
    
    
     <!-- jQuery -->
    <script src="d/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="d/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="d/js/jquery.easing.min.js"></script>
    <script src="d/js/jquery.fittext.js"></script>
    <script src="d/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="d/js/creative.js"></script>

</html>