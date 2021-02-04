<?php
      $severname="localhost";
      $dbuser="root";
      $dbpassword="";
      $dbname="test";
      $conn=mysqli_connect($severname,$dbuser,$dbpassword,$dbname);
        if(!$conn ){
            die('Could not connect: ' . mysqli_error());
         }
         
?>