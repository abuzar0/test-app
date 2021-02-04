<?php
      include('connection.php');  
      if(isset($_POST['item']))
      {
          $result='';
         // $_POST['item'];
          $name=$_POST['item'];
           $sql= "SELECT * from stock_data where item_name LIKE'%".$name."%' ";
           $result = mysqli_query($conn, $sql);
           $output='<ul class="list-unstyled">';
           if(mysqli_num_rows($result)> 0){
               while($row=mysqli_fetch_array($result))
               {
                   $output .='<li>'.$row["item_name"].'<li>';
               }
            }
         else
            {
                $output .='<li> Not found <li>';
            }

            $output .='</ul>';
            echo $output;
        }






?>