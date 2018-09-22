<?php
 include './AdminModel/addcomponent/allcomponent.php';
 
 $price =new allcomponent();

if(isset($_POST['nextbtn']))
	 {
    
 //session_destroy();
             if(COUNT($_SESSION['processor'])==0)
             {
                 
	      	$sp=$_POST['processor'];
                $_SESSION['processor']=$sp;
                
                $processorprice=$price->getprocessorbyid($sp);
                $_SESSION['tprice']=$processorprice[5];
        
                
	  }
         else if(COUNT($_SESSION['ram'])==0)
         {
             
                 $sr=$_POST['ram'];
                 $_SESSION['ram']=$sr;
                 

                 $ramprice=$price->getrambyid($sr);
                 $_SESSION['tprice']+=$ramprice[3];
         }
        else if(COUNT($_SESSION['gcard'])==0)
        {
                 $gc=$_POST['gcard'];
                 $_SESSION['gcard']=$gc;
                
                 $graphiccard=$price->getgraphicbyid($gc);
                 $_SESSION['tprice']+=$graphiccard[5];
        }
        else if(COUNT($_SESSION['hdd'])==0)
        {
                 $sh=$_POST['hdd'];
                 $_SESSION['hdd']=$sh;
                 
                 $hdd=$price->gethddbyid($sh);
                 $_SESSION['tprice']+=$hdd[3];
        }
         else if(COUNT($_SESSION['od'])==0)
        {
                 $so=$_POST['opticaldrive'];
                 $_SESSION['od']=$so;
                 
                 $optical=$price->getopticaldbyid($so);
                 $_SESSION['tprice']+=$optical[3];
        }
        else
        {
             echo "<script type='text/javascript'>
            window.location.replace('component/summary.php')
      </script>";
         
            
        }
        
         }
         
        // echo "<script type='text/javascript'>
            //window.location.replace('')
      //</script>";
         
     ?>   