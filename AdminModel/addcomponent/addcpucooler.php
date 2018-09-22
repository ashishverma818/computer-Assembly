<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="d/css/bootstrap.min.css" type="text/css">

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
    
          
        <div class="body">
         
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Brand </label>
              <input type="text" class="form-control" name="txtbrand" required>
            </div>
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Model</label>
              <input type="text" class="form-control" name="txtmodel" required>
            </div>
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> coolertype</label>
              <input type="text" class="form-control" name="txtcoolertype" required>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-eye-open"></span> airflow</label>
              <input type="text" class="form-control" name="txtairflow" required>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-eye-open"></span> noise</label>
              <input type="text" class="form-control" name="txtnoise" required>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-eye-open"></span> price</label>
              <input type="text" class="form-control" name="txtprice" required>
            </div>
            
            <button type="submit" name="btnsub" value="Insert">Insert</button>
        </div>
            </form>
               
               <?php
               include ("addallcomponent.php");
               if(isset($_POST['btnsub']))
               {
                        $brand=$_POST['txtbrand'];
                        $model=$_POST['txtmodel'];
                        $core=$_POST['txtcore'];
                        $speed =$_POST['txtspeed']; 
                        $sockettype=$_POST['txtsockett'];
                        $price=$_POST['txtprice'];

                       $allcomponent=new addallcomponent();
                       $allcomponent->addprocessor($brand, $model, $core, $speed, $sockettype, $price);
                  }
                 
               
                  ?>
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
