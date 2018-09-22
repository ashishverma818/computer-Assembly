<?php

class allcomponent 
{
   
    //add processor
   function addprocessor($brand,$model,$core,$speed,$sockettype,$price)
   {
       include '../../credential/connection.php';
               
       $sql="INSERT INTO assembleit.processor(P_brand,P_model,P_core,P_speed,P_sockettype,P_price) VALUES('$brand','$model','$core','$speed','$sockettype',$price)";
       if (mysqli_query($conn,$sql))
{
    mysqli_insert_id($conn);
    echo '<script>alert("Procesor Added Sucessfully!!!");</script>';
    
}           
   }
   //add ram
   function addram($brand,$model,$memorytype,$price)
   {
        include '../../credential/connection.php';
       $sql="INSERT INTO assembleit.ram(R_brand,R_model,R_memorytype,R_price) VALUES('$brand','$model','$memorytype',$price)";
       if (mysqli_query($conn,$sql)) 
{
    mysqli_insert_id($conn);
    echo '<script>alert("RAM Added Sucessfully!!!");</script>';
    
}       
       
   }
   //add motherboard
   function addmotherboard()
   {
        include '../../credential/connection.php';
      $sql="INSERT INTO assembleit.processor(M_brand,M_model,M_form,M_chipset,M_socket,M_price) VALUES('$brand','$model','$form','$chipset','$socket',$price)";
       if (mysqli_query($conn,$sql)) 
{
    mysqli_insert_id($conn);
    echo '<script>alert("MotherBoard Sucessfully Added!!!");</script>';
    
}        
       
       
   }
   
   
   //add hdd
   function addhdd($brand,$model,$capacity,$price)
   {
       include '../../credential/connection.php';
     $sql="INSERT INTO assembleit.hdd(H_brand,H_model,H_capacity,H_price) VALUES('$brand','$model','$capacity',$price)";
       if (mysqli_query($conn,$sql)) 
{
    mysqli_insert_id($conn);
    echo '<script>alert("HDD Added Sucessfully!!!!!!");</script>';
    
}        
   
   }
   //add ssd
   function addssd($brand,$model,$capacity,$price)
   {
      include '../../credential/connection.php';
      $sql="INSERT INTO assembleit.ssd(S_brand,S_model,S_capacity,S_price) VALUES('$brand','$model','$capacity',$price)";
       if (mysqli_query($conn,$sql)) 
{
    mysqli_insert_id($conn);
    echo '<script>alert("Sucessfully Added!!!");</script>';
    
}        
   }
   //add graphic card
   function addgraphicard($brand,$chipset,$cpu,$model,$memory,$price)
   {
        include '../../credential/connection.php';
     $sql="INSERT INTO assembleit.graphic(G_brand,G_chipset,G_cpu,G_model,G_memory,P_price) VALUES('$brand','$chipset','$cpu','$model','$memory',$price)";
       if (mysqli_query($conn,$sql)) 
{
    mysqli_insert_id($conn);
    echo '<script>alert("Grapic Card Added Sucessfully!!!!!!");</script>';
    
}         
   }
   //ADD OPTICAL DRIVE
   function addopticaldrive($brand,$model,$devicetype,$price)
   {
     include '../../credential/connection.php';
      $sql="INSERT INTO assembleit.opticaldrive(O_brand,O_model,O_devicetype,O_price) VALUES('$brand','$model','$devicetype',$price)";
       if (mysqli_query($conn,$sql)) 
{
    mysqli_insert_id($conn);
    echo '<script>alert("Sucessfully Added!!!");</script>';
    
}        
       
   }
   //ADD POWERSUPPLY
   function addpowersupply($brand,$model,$core,$speed,$sockettype,$price)
   {
       include '../../credential/connection.php';
       $sql="INSERT INTO assembleit.powersupply(P_brand,P_model,P_power,P_efficiency,P_price) VALUES('$brand','$model','$core','$speed','$sockettype',$price)";
       if (mysqli_query($conn,$sql)) 
{
    mysqli_insert_id($conn);
    echo '<script>alert("Sucessfully Added!!!");</script>';
    
}       
   }
   
   
   //update processor
    function updateprocessor($id,$brand,$model,$core,$speed,$sockettype,$price)
   {
       include '../../credential/connection.php';
     
       $sql="UPDATE assembleit.processor
SET P_brand='$brand',P_model='$model',P_core='$core',P_speed='$speed',P_sockettype='$sockettype',P_price=$price
WHERE P_id=$id";
       if (mysqli_query($conn,$sql))
{
    mysqli_insert_id($conn);
    echo '<script>alert("Procesor Updated Sucessfully!!!");</script>';
    
}           
   }
   
   //update ram
   function updateram($id,$brand,$model,$memorytype,$price)
   {
       include '../../credential/connection.php';
     
       $sql="UPDATE assembleit.ram
SET R_brand='$brand',R_model='$model',R_memorytype='$memorytype',R_price=$price
WHERE R_id=$id";
       if (mysqli_query($conn,$sql))
{
    mysqli_insert_id($conn);
    echo '<script>alert("RAM Updated Sucessfully!!!");</script>';
    
}           
   }
   
   
   //get processor by id
   function getprocessorbyid($pid)
   { 
       
	 //connection
        $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        // Create connection
        $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error)
        {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    
    
       
       
       
       
       $sql="SELECT * FROM assembleit.processor WHERE P_id=$pid";
       	$result = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
        
	if($row=mysqli_fetch_array($result))
        {
	 
		 
		
		 $probrand=$row['P_brand'];
		 $promodel=$row['P_model'];
		 $procore=$row['P_core'];
		 $prospeed=$row['P_speed'];
		 $prosockettype=$row['P_sockettype'];
		 $proprice=$row['P_price'];
                 $pro=array($probrand,$promodel,$procore,$prospeed,$prosockettype,$proprice);
                 return $pro;
		 
        }
 else
     {
      echo '<script>alert("Processor error!!!");</script>';
 }
               
        }
    
 function getrambyid($rid)
   { 
       
	 //connection
        $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        // Create connection
        $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error)
        {
        die("Connection failed: " . $conn->connect_error);
        } 
    
    
    
       
       
       
       
       $sql="SELECT * FROM assembleit.ram WHERE R_id=$rid";
       	$result = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
        
	if($row=mysqli_fetch_array($result))
        {
	 
		 
		
		 $rambrand=$row['R_brand'];
		 $rammodel=$row['R_model'];
		 $rammemorytype=$row['R_memorytype'];
		 $ramprice=$row['R_price'];
                 $ram=array($rambrand,$rammodel,$rammemorytype,$ramprice);
                 return $ram;
		 
        }
 else
     {
      echo '<script>alert("ram error!!!");</script>';
 }
               
        }
        
        
        
  function gethddbyid($hid)
   { 
       
	 //connection
        $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        // Create connection
        $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error)
        {
        die("Connection failed: " . $conn->connect_error);
        } 
    
    
    
       
       
       
       
       $sql="SELECT * FROM assembleit.hdd WHERE H_id=$hid";
       	$result = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
        
	if($row=mysqli_fetch_array($result))
        {
	 
		 
		
		 $hddbrand=$row['H_brand'];
		 $hddmodel=$row['H_model'];
		 $hddcapacity=$row['H_capacity'];
		 $hddprice=$row['H_price'];
                 $hdd=array($hddbrand,$hddmodel,$hddcapacity,$hddprice);
                 return $hdd;
		 
        }
 else
     {
      echo '<script>alert("hdd error!!!");</script>';
 }
               
        }
               
        
 function getgraphicbyid($gid)
   { 
       
	 //connection
        $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        // Create connection
        $conn = new mysqli($servername, $username, $password);

    // Check connection
        if ($conn->connect_error)
        {
        die("Connection failed: " . $conn->connect_error);
        } 
        $sql="SELECT * FROM assembleit.grapiccard WHERE G_id=$gid";
       	$result = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
        
	if($row=mysqli_fetch_array($result))
        {
	 
		 
		
		 $gbrand=$row['G_brand'];
		 $gmodel=$row['G_model'];
                 $gchipset=$row['G_chipset'];
                 $gcpu=$row['G_cpu'];
		 $gmemory=$row['G_memory'];
		 $gprice=$row['G_price'];
                 $graphic=array($gbrand,$gmodel,$gchipset,$gcpu,$gmemory,$gprice);
                 return $graphic;
		 
        }
 else
     {
      echo '<script>alert("hdd error!!!");</script>';
 }
               
        }
        
        
 
 function getopticaldbyid($oid)
   { 
       
	 //connection
        $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        // Create connection
        $conn = new mysqli($servername, $username, $password);

    // Check connection
        if ($conn->connect_error)
        {
        die("Connection failed: " . $conn->connect_error);
        } 
        $sql="SELECT * FROM assembleit.opticaldrive WHERE O_id=$oid";
       	$result = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
        
	if($row=mysqli_fetch_array($result))
        {
	 
		 
		
		 $obrand=$row['O_brand'];
		 $omodel=$row['O_model'];
               
		 $odevicetype=$row['O_devicetype'];
		 $oprice=$row['O_price'];
                 $optical=array($obrand,$omodel,$odevicetype,$oprice);
                 return $optical;
		 
        }
 else
     {
      echo '<script>alert("optical error!!!");</script>';
 }
               
        }
               
                      
        
}//end of class
?>