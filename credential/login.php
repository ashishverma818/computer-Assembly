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
$logpass=$_POST['logpasssword'];
 
//check whether the customer is already registered


        $sql="SELECT * FROM assemble.register WHERE cust_email='$loguser' AND cust_password='$logpass'";
       	$result = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
        -
       // echo "<script>alert('Please login');</script>"; 
        $row=mysqli_fetch_array($result);
	if($row)
        {
	 
            //session_start();
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