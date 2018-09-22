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
   <strong class='lead'><b> Select Graphic Card</b></strong>
  </div>
  <div class='panel-body'>
   <div class='table-wrapper'>          
 
         <table class='table table-striped table-hover' id='sorttab'>
            
<thead>
      <tr>
	<th></th>
        
        <th>Graphic Brand</th>
        <th>Graphic Model</th>
        <th>Chipset</th>
        <th>CPU</th>
        <th>Memory</th>
	<th>Price</th>
      </tr>
    </thead>
    <tbody>";
//retrive the data from processor table and display it to the main page 
        $sql="SELECT * FROM assembleit.grapiccard";
        $result=mysqli_query($conn,$sql);
             while($row=mysqli_fetch_array($result))
             {
                     ?>
                    <tr class="sucess">
                    <td><input type="radio" value="<?php echo $row['G_id']?>" name="gcard"></td>
                     <?php

                     
                     echo "<td>".$row['G_brand']."</td>";
                     echo "<td>".$row['G_model']."</td>";
                     echo "<td>".$row['G_chipset']."</td>";
                     echo "<td>".$row['G_cpu']."</td>";
                     echo "<td>".$row['G_memory']."</td>";
                     echo "<td>".$row['G_price']."</td>";
                     ?></input>
                     </tr>
                     <?php
             }   
 ?>
	
 </tbody>
  </table>