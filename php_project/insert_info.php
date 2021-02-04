<?php   
       include('connection.php');  
       if(isset($_POST['submitFlag']))
      {
        //$email='abuzarchaudhary999@gmail.com';
          $email=$_POST['email'];
           $pass=$_POST['password'];
           $sql="INSERT INTO `login`( `user_name`, `password`) VALUES ('$email','$pass')";
           if ($conn->query($sql) === TRUE) {
            echo "OK";
          } else {
            echo "NO";
          }
           }
?>