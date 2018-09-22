<?php

  $custname=$_POST['rgname'];
  $custemail=$_POST['rgemail'];
  $custmobile=$_POST['rgmobile'];
  $custaddress=$_POST['rgaddress'];
  $custpassword=$_POST['rgpassword'];
  $custrepassword=$_POST['rgrepassword'];
  
if(isset($_POST['register']))
{
	
	if($custpassword==$custrepassword)
	{
//check whether the customer is already registered
$sql1="SELECT * FROM assemble.register WHERE cust_email = '$custemail'";
$rst= mysqli_query($conn,$sql1);
if(mysqli_fetch_array($rst)==NULL)
{
	
$sql="INSERT INTO assemble.register(cust_name,cust_email,cust_phone,cust_address,cust_password,cust_type) VALUES('$custname','$custemail',$custmobile,'$custaddress','$custpassword','user')";

if (mysqli_query($conn, $sql)) 
{
    mysqli_insert_id($conn);
    echo '<script>alert("You Have Been Successfully Registered!!!");</script>';
}
 else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	}
	else
	{
		echo '<script>alert("User Already Registered!!!!");</script>';
	}

}
else
{
	
	echo '<script>alert("Password Must Match!!!!");</script>';
}

}
mysqli_close($conn);
?>
