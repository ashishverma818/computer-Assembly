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
   <strong class='lead'><b> Select HDD</b></strong>
  </div>
  <div class='panel-body'>
   <div class='table-wrapper'>          
 
         <table class='table table-striped table-hover' id='sorttab'>
            
<thead>
      <tr>
	<th></th>
        <th>HDD Brand</th>
        <th>HDD Model</th>
       
        <th>HDD Capacity</th>
	<th>Price</th>
      </tr>
    </thead>
    <tbody>";
//retrive the data from processor table and display it to the main page 
        $sql="SELECT * FROM assembleit.hdd";
        $result=mysqli_query($conn,$sql);
             while($row=mysqli_fetch_array($result))
             {
                     ?>
                    <tr class="sucess">
                    <td><input type="radio" value="<?php echo $row['H_id']?>" name="hdd"></td>
                     <?php

                     
                     echo "<td>".$row['H_brand']."</td>";
                     echo "<td>".$row['H_model']."</td>";
                     
                     echo "<td>".$row['H_capacity']."</td>";
                     echo "<td>".$row['H_price']."</td>";
                     ?></input>
                     </tr>
                     <?php
             }   
 ?>
	 </tbody>
  </table>