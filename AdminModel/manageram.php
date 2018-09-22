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
        
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="adminstyle/css/Admin.css" type="text/css">
        <link rel="stylesheet" href="adminstyle/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="adminstyle/css/Admin.min.css" type="text/css">
        <link rel="stylesheet" href="adminstyle/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="d/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="d/css/animate.min.css" type="text/css">
  <!-- Custom CSS -->
    <link rel="stylesheet" href="d/css/creative.css" type="text/css">

    
    </head>
    <body>
        <form method="POST">
      <section>
<div class="container-fluid">



<div class="container-fluid">
<div class="col-md-12">

<div class="panel panel-default">
  <div class="panel-heading">
  <h2><strong class='lead'><b>Manage RAM</b></strong></h2>
  </div>
  <div class="panel-body">
   <div class="table-wrapper">          
  <table class="table table-striped table-hover" id="sorttab">
    <thead>
      <tr>
	<th></th>
        <th></th>
         <th>RAM_ID</th>
        <th>Brand</th>
        <th>Model</th>
        
        <th>Memory type</th>
	<th>Price</th>
      </tr>
    </thead>
    <tbody>
        <?php
        include '../AdminModel/Deletecomponent.php';
     
       $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 


    $sql="SELECT * FROM assembleit.ram";
    $result=mysqli_query($conn,$sql);
        
     while($row=mysqli_fetch_array($result))
	 {
		 ?>
		<tr class="sucess">
                    <td><button type="submit" value="<?php echo $row['R_id']?>" name="dram">Delete</button></td>
                    <td><button type="submit" value="<?php echo $row['R_id']?>" name="uram">Update</button></td>
		 <?php
		 
		 echo "<td>".$row['R_id']."</td>";
		 echo "<td>".$row['R_brand']."</td>";
		 echo "<td>".$row['R_model']."</td>";
		 echo "<td>".$row['R_memorytype']."</td>";
		 echo "<td>".$row['R_price']."</td>";
                 echo "</tr>";
	
	 }
	if(isset($_POST['dram']))
        {
            $selectedr=$_POST['dram'];
            $deletecomp = new Deletecomponent();
            $deletecomp->deleteram($selectedr);
        }
        if(isset($_POST['uram']))
        {
           
            $updateid=$_POST['uram'];
             die("<script>location.href = 'addcomponent/addram.php?updateid=$updateid'</script>");
            
        }
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
