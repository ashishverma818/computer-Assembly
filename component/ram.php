 <?php
            $servername = "localhost:3306";
            $username = "root";
            $password = "12345";
            // Create connection
            $conn = new mysqli($servername, $username, $password);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 



	//$scomponent=$_POST[''];
	echo " 
        <div class='panel-heading'>
    <strong class='lead'><b> Select Processor</b></strong>
   </div>
   <div class='panel-body'>
    <div class='table-wrapper'>          
    <table class='table table-striped table-hover' id='sorttab'>


<thead>
      <tr>
	<th></th>
     
        <th>RAM_Brand</th>
        <th>RAM_Model</th>
        <th>Core</th>
        <th>Speed</th>
       
    </thead>
    <tbody>";
	$sql="SELECT * FROM assembleit.ram";
        $result=mysqli_query($conn,$sql);
	 while($row=mysqli_fetch_array($result))
	 {
		 ?>
		<tr class="sucess">
		<td><input type="radio" value="<?php echo $row['R_id']?>" name="ram"></td>
		 <?php
		 
		// echo "<td>".$row['R_id']."</td>";
		 echo "<td>".$row['R_brand']."</td>";
		 echo "<td>".$row['R_model']."</td>";
		 echo "<td>".$row['R_memorytype']."</td>";
		 echo "<td>".$row['R_price']."</td>";
		 ?>
                
                </input>
		 </tr>
                 </tbody>
		 <?php
	 }
	 
	 
         	 
	 
	 ?>
	 </tbody>
  </table>