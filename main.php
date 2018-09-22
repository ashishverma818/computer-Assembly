<!DOCTYPE html>
<html lang="en">
<?php 
        session_start();
       

?>
<head>

    <title>Online Assembly</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="d/css/bootstrap.min.css" type="text/css">

    
    <link rel="stylesheet" href="d/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="d/css/animate.min.css" type="text/css">
  <!-- Custom CSS -->
    <link rel="stylesheet" href="d/css/creative.css" type="text/css">

    
</head>

<body id="page-top">
<?php 
error_reporting(E_WARNING^E_ALL^E_NOTICE);
 include './component/managecomponent.php';
?>
<form  method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    
<!--navigation bar-->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
		   <a href="index.php" class="navbar-brand page-scroll">ASSEMBLE <span class="fa-2x" style="color:red;"><b> IT</b></span></a>
						
            

           
            <div class="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about"><i class="fa fa-home"></i>About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
					<li>
    <script type= "text/javascript">
   
    </script>
    <a data-toggle="modal" href="/assemblystore/credential/logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>
            </div>
         
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	
	
<!--navigation bar close-->

<section>
<div class="container-fluid">

<div class="col-md-9">

<div class="panel panel-default">
  <div class="panel-heading">
  <h4 class="">
     Components
             
	</h4>
  </div>
 
  <div class="panel-body">
  <div class="container-fluid">
  <div class="row">
<label class="checkbox-inline"><input type="checkbox" value="processor" <?php echo (COUNT($_SESSION['processor'])!=0 ? 'checked' : '');?>>Processor</label>

<label class="checkbox-inline"><input type="checkbox" value="ram"  <?php echo (COUNT($_SESSION['ram'])!=0 ? 'checked' : '');?>>RAM</label>
<label class="checkbox-inline"><input type="checkbox" value="graphiccard"  <?php echo (COUNT($_SESSION['gcard'])!=0 ? 'checked' : '');?>>Graphic Card</label>
<label class="checkbox-inline"><input type="checkbox" value="hdd"  <?php echo (COUNT($_SESSION['hdd'])!=0 ? 'checked' : '');?>>HDD</label>
<label class="checkbox-inline"><input type="checkbox" value="optical"  <?php echo (COUNT($_SESSION['op'])!=0 ? 'checked' : '');?>>Optical Drive</label>
<label class="checkbox-inline"><input type="checkbox" value="" name="motherboard">Motherboard</label>1
<label class="checkbox-inline"><input type="checkbox" value="ssd"  >SSD</label>

<label class="checkbox-inline"><input type="checkbox" value="power">Power Supply</label>
<label class="checkbox-inline"><input type="checkbox" value="cabinet">Cabinet</label>
<label class="checkbox-inline"><input type="checkbox" value="monitor">Monitor</label>
</div><br/>
<div class="row">
<label class="checkbox-inline"><input type="checkbox" value="">Keyboard</label>
<label class="checkbox-inline"><input type="checkbox" value=" ">Mouse</label>
<label class="checkbox-inline"><input type="checkbox" value="">Headphone</label>
<label class="checkbox-inline"><input type="checkbox" value="">Speaker</label>
<label class="checkbox-inline"><input type="checkbox" value="">Cabinet Cooler</label>
<label class="checkbox-inline"><input type="checkbox" value="">CPU Cooler System</label>
<label class="checkbox-inline"><input type="checkbox" value="">Sound Card</label>
</div>

</div>

</div>

</div>
</div>

<div class="col-sm-3">
<div class="panel panel-default">
  <div class="panel-heading">
   Summary
  </div>
  <div class="panel-body">
  <div class="container-fluid">
  <div class="row">
      <?php
      
      /*  include './AdminModel/addcomponent/allcomponent.php';
        $tprice=0;
        $price =new allcomponent();
      
        $pid=$_SESSION['processor'];
        
        $processorprice=$price->getprocessorbyid($pid);
        $tprice+=$processorprice[5];
        
       if(COUNT($_SESSION['ram'])==0)
        $rid=$_SESSION['ram'];
        $ramprice=$price->getrambyid($rid);
        $tprice+=$ramprice[3];
       */
      ?>
      <div class="container col-sm-12">
         <div class="col-sm-7">
      <strong class="lead">Total Price</strong><span id="cost" name="cost"></span>
      </div>
           
      <div class="col-sm-3">
          <?php 
          
              echo "<strong class='lead'><b>$".$_SESSION['tprice'].".00</b></strong>";
              
          ?>
          </div>
</div>

</div>

</div>
</div>
</div>

</div>






<div class="container-fluid">
<div class="col-md-12">

<div class="panel panel-default">
 
        <?php
        
                
                include './component/componentdisplay.php';
               
        ?>
    
 </div>
</div>



</div>
</div>
</div>


<div class="col-md-5">        
      
    </div>
<div class="col-sm-2">
            <input type="submit" class="btn btn-info btn-lg" name="nextbtn" value="Next Step">
          
</div>
</section>


	<!--about us open-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>9678254179</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn"></i>
                    <p><a href="mailto:your-email@your-domain.com">ashishverma818@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>
<!--about us close-->


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
</form>
	
</body>

</html>
