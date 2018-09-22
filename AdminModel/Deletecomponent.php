<?php

class Deletecomponent
{
   function deleteprocessor($p_id)
    {
       include './connection.php';
        $sql="DELETE FROM assembleit.processor where P_id=$p_id";
       if (mysqli_query($conn,$sql)) 
{
    
    echo '<script>alert("Processor Deleted Sucessfully!!!");</script>';
    
}     
        
   
   }
   function deleteram($r_id)
    {
        include './connection.php';
        $sql="DELETE FROM assembleit.ram where R_id=$r_id";
       if (mysqli_query($conn,$sql)) 
{
    
    echo '<script>alert("Ram Deleted Sucessfully!!!");</script>';
    
}     
        
   
   } 
   
 //delete motherboard
   function deletemotherboard($m_id)
   {
        include '../../credential/connection.php';
     $sql="DELETE FROM assembleit.motherboard where M_id=$m_id";
       if (mysqli_query($conn,$sql)) 
{
    
    echo '<script>alert("MotherBoard Deleted Sucessfully!!!");</script>';
    
}     
        
       
       
   }
   
   
   //delete hdd
   function addhdd($h_id)
   {
       include '../../credential/connection.php';
    $sql="DELETE FROM assembleit.hdd where H_id=$h_id";
       if (mysqli_query($conn,$sql)) 
{
    
    echo '<script>alert("HDD Deleted Sucessfully!!!");</script>';
    
}     
        
   }
   //add ssd
   function deletessd($s_id)
   {
      include '../../credential/connection.php';
     $sql="DELETE FROM assembleit.ssd where S_id=$s_id";
       if (mysqli_query($conn,$sql)) 
{
    
    echo '<script>alert("SSD Deleted Sucessfully!!!");</script>';
    
}     
         
   }
   //add graphic card
   function addgraphicard($g_id)
   {
        include '../../credential/connection.php';
    $sql="DELETE FROM assembleit.graphiccard where G_id=$g_id";
       if (mysqli_query($conn,$sql)) 
{
    
    echo '<script>alert("GraphicCard Deleted Sucessfully!!!");</script>';
    
}     
   }
   //ADD OPTICAL DRIVE
   function deleteopticaldrive($o_id)
   {
     include '../../credential/connection.php';
      $sql="DELETE FROM assembleit.opticaldrive where O_id=$o_id_id";
       if (mysqli_query($conn,$sql)) 
{
    
    echo '<script>alert("OpticalDrive Deleted Sucessfully!!!");</script>';
    
}     
        
       
   }
   //DELETE POWERSUPPLY
   function deletepowersupply($p_id)
   {
       include '../../credential/connection.php';
     $sql="DELETE FROM assembleit.powersupply where P_id=$p_id";
       if (mysqli_query($conn,$sql)) 
{
    
    echo '<script>alert("PowerSupply Deleted Sucessfully!!!");</script>';
    
}     
         
   }
}
?>