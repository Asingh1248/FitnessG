<?php
 
  $con=mysqli_connect('localhost','root','12345');
  if($con)
    {
        // echo'Connection Successfull';
    }
     else
     {
         echo 'Not Connected';
     }
 
     mysqli_select_db($con,'exerciseplans');
     
?>
