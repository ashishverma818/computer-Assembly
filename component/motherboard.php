<?php
 
        include 'component/component.php';
	 //connection
        $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        // Create connection
        $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "
<div class='panel-heading'>
   <strong class='lead'><b> Select MotherBoard</b></strong>
  </div>
  <div class='panel-body'>
   <div class='table-wrapper'>          
 
         <table class='table table-striped table-hover' id='sorttab'>
            
<thead>
      <tr>
	<th></th>
        
        <th>Processor_Brand</th>
        <th>Processor_Model</th>
        <th>Core</th>
        <th>Speed</th>
        <th>Socket type</th>
	<th>Price</th>
      </tr>
    </thead>
    <tbody>";
//retrive the data from processor table and display it to the main page 
        $sql="SELECT * FROM assembleit.processor";
        $result=mysqli_query($conn,$sql);
             while($row=mysqli_fetch_array($result))
             {
                     ?>
                    <tr class="sucess">
                    <td><input type="radio" value="<?php echo $row['P_id']?>" name="processor"></td>
                     <?php

                     //echo "<td>".$row['P_id']."</td>";
                     echo "<td>".$row['P_brand']."</td>";
                     echo "<td>".$row['P_model']."</td>";
                     echo "<td>".$row['P_core']."</td>";
                     echo "<td>".$row['P_speed']."</td>";
                     echo "<td>".$row['P_sockettype']."</td>";
                     echo "<td>".$row['P_price']."</td>";
                     ?></input>
                     </tr>
                     <?php
             }   
 ?>
 </tbody>
  </table>