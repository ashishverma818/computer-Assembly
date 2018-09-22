<?php

            
            if(COUNT($_SESSION['processor'])==0)
            {
                include 'processor.php';
                
            }
            else if(COUNT($_SESSION['ram'])==0)
            {
               include 'ram.php';
            }
            else if(COUNT($_SESSION['gcard'])==0)
            {
                include 'graphiccard.php';
            }
            else if(COUNT($_SESSION['hdd'])==0)
            {
                include 'hdd.php';
            }
            else if(COUNT($_SESSION['od'])==0)
            {
                include 'opticaldrive.php';
            }
?>

