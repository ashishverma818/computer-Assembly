<!DOCTYPE html>
<html lang="en">

<head>

    <title>Online Assembly</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="d/css/bootstrap.min.css" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="d/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="d/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="d/css/creative.css" type="text/css">
<?php 
    session_start();
    error_reporting(E_ALL^E_NOTICE);
?>
 
</head>

<body id="page-top">
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
						
            

           
            <div class="navbar-collapse" id="navbar-collapse-1">
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
                        <a data-toggle="modal" href="#loginModal"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                </ul>
            </div>
         
        </div>
        <!-- /.container-fluid -->
    </nav>
	</div>
	</form>
<!--navigation bar close-->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Build Your PC's Online</h1>
                <hr>
                <p>Build your PC Online without Wasting your time!!</p>
                <a href="main.php" class="btn btn-primary btn-xl page-scroll">Build Your PC</a>
                <?php 
                /*
                if(isset($_POST['build']))
                {
                    if(count($_SESSION['custid'])!=0)
                    {
                         echo "<script type='text/javascript'>
            window.location.replace('main.php')
      </script>";
                    }
                    else 
                    {
                        echo "<script>aler('Please Login!!!');</script>";
                    }
                }
                
                */?>
            </div>
        </div>
    </header>
	
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
<form role="form" method="POST">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
         
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="loguser" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="logpassword" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" id="chkrem">Remember me</label>
            </div>
            <input type="submit" class="btn btn-default btn-success btn-block" name="loginbtn" value="LOGIN">
          
        </div>
        <div class="modal-footer">
          <p>Not a member? <a href="#signmodal" data-toggle="modal" class="close" data-dismiss="modal" >Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
	  </form>
    </div>
  </div> 
<!--login modal close-->
<?php
     // include 'credential/connection.php';
if(isset($_POST['loginbtn']))
{
    $servername = "localhost:3306";
$username = "root";
$password = "12345";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$loguser=$_POST['loguser'];
$logpass=$_POST['logpassword'];
 
//check whether the customer is already registered


        $sql="SELECT * FROM assemble.register WHERE cust_email='$loguser' AND cust_password='$logpass'";
       	$result = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
        
       // echo "<script>alert('Please login');</script>"; 
        $row=mysqli_fetch_array($result);
	if($row)
        {
	 
            
            $_SESSION['custid']=$row['cust_id'];
            echo "<script type='text/javascript'>
           window.location.replace('main.php')
     </script>";
	} 
		
		
        
 else
     {
     echo "<script>alert('Please Enter correct username and password!!!!!');</script>"; 
           
     }

}
   


?>
<!--Signup Modal Open Here-->

	<div class="modal fade" role="dialog" id="signmodal">
     <div class="modal-dialog">
<form role="form" method="POST">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Register</h4>
        </div>
        <div class="modal-body">
         
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Name</label>
              <input type="text" class="form-control" name="rgname" placeholder="Enter Your Name" required>
            </div>
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="email" class="form-control" name="rgemail" placeholder="Enter email"  required>
            </div>
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Mobile No.</label>
              <input type="text" class="form-control" name="rgmobile" placeholder="Enter Mobile No." required>
            </div>
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Address</label>
              <input type="text" class="form-control" name="rgaddress" placeholder="Enter email"  required>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="rgpassword" placeholder="Enter password" required>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-eye-open"></span> confirm Password</label>
              <input type="password" class="form-control" name="rgrepassword" placeholder="Enter password"  required>
            </div>
           <input type="submit" class="btn btn-default btn-success btn-block" value="Register" name="register">
          
        </div>
       
      </div>
    </div>
  </div> 
  </div>
  
  <aside class="bg-primary">
  <div class="container-fluid">
      <a href="AdminModel/main.php">ADMIN</a>
  </div>
  </aside>
  
  
<!--Signup modal close-->


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

    <?php
 include 'credential/connection.php';
 include 'credential/register.php';
// include './credential/login.php';
 ?>
</body>
</html>
<!--Register code Here-->

<!--register code end here-->
<!--login>


