<!DOCTYPE html>
<html lang="en">

<head>

    <title>Online Assembly</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../d/css/bootstrap.css" type="text/css">

    
    <link rel="stylesheet" href="../d/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="/..d/css/animate.min.css" type="text/css">
  <!-- Custom CSS -->
    <link rel="stylesheet" href="../d/css/creative.css" type="text/css">

   <?php   
   
   session_start();
   ?> 
</head>

<body id="page-top">
<?php 
error_reporting(E_WARNING^E_ALL^E_NOTICE);
 //include './component/managecomponent.php';
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
                        <a data-toggle="modal" href="#loginModal" class=""><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                </ul>
            </div>
         
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	
	
<!--navigation bar close-->

<section>
<div class="container-fluid">

<div class="container-fluid">
<div class="col-md-12">

<div class="panel panel-default">
  <div class="panel-heading">
      <strong class='lead'><b>Summary</b></strong>
   
  </div>
  <div class="panel-body">
   <div class="table-wrapper">          
  <table class="table table-striped table-hover" id="sorttab">
      <thead>
      <tr>
	
        <th>No</th>
        <th>Component</th>
        <th>Selected Product</th>
	<th>Price</th>
      </tr>
    </thead>
    <tbody>
      <?php
include '../AdminModel/addcomponent/allcomponent.php';
$get =new allcomponent();

$pid=$_SESSION['processor'];
$processor=$get->getprocessorbyid($pid);
echo "<tr>";
echo "<td>1</td>";
echo "<td>Processor</td>";

echo "<td>".$processor[1]."</td>";
echo "<td>".$processor[5]."</td>";
echo "</tr>";


$rid=$_SESSION['ram'];
$ram=$get->getrambyid($rid);
echo "<tr>";
echo "<td>2</td>";
echo "<td>RAM</td>";
echo "<td>".$ram[1]."</td>";
echo "<td>".$ram[3]."</td>";
echo "</tr>";

$gid=$_SESSION['gcard'];
$gcard=$get->getgraphicbyid($gid);
echo "<tr>";
echo "<td>3</td>";
echo "<td>Graphic Card</td>";
echo "<td>".$gcard[1]."</td>";
echo "<td>".$gcard[5]."</td>";
echo "</tr>";


$hid=$_SESSION['hdd'];
$hdd=$get->gethddbyid($hid);
echo "<tr>";
echo "<td>4</td>";
echo "<td>HDD</td>";
echo "<td>".$hdd[1]."</td>";
echo "<td>".$hdd[3]."</td>";
echo "</tr>";

$oid=$_SESSION['od'];
$od=$get->gethddbyid($oid);
echo "<tr>";
echo "<td>5</td>";
echo "<td>Optical Drive</td>";
echo "<td>".$od[1]."</td>";
echo "<td>".$od[3]."</td>";
echo "</tr>";



//get total from price session
$p=$_SESSION['tprice'];
echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td><strong class='lead'><b>Total</b></strong></td>";
echo "<td><strong class='lead'><b>$".$_SESSION['tprice'].".00</b></strong></tds>";
echo "</tr>";
?>
     </tbody>
  </table>
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
	
<!--Login Modal Open Here-->	
	<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="txtusername" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="txtpassword" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" id="chkrem">Remember me</label>
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <p>Not a member? <a href="#signmodal" data-toggle="modal" class="close text-primary" data-dismiss="modal" >Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
    </div>
  </div> 
<!--login modal close-->



<!--Signup modal close-->


    <!-- jQuery -->
    <script src="../d/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../d/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../d/js/jquery.easing.min.js"></script>
    <script src="../d/js/jquery.fittext.js"></script>
    <script src="../d/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../d/js/creative.js"></script>
</form>
	
</body>

</html>

