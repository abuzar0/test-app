<?php   
       include('connection.php');  
       session_start();
       if(isset($_POST['do_login']))
      {
        //$email='abuzarchaudhary999@gmail.com';
            $email=$_POST['email'];
           $pass=$_POST['password'];
           $sql= "SELECT * from login where user_name ='$email' and password='$pass'";
           $result = mysqli_query($conn, $sql);
           $row = mysqli_fetch_array($result);
             if($row>0)
               {
                  $_SESSION['email']=$row['user_name'];
                   echo "success";
                }
              else
              {
                 echo "fail";
                }
            exit();
           }
?>