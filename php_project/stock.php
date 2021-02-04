<?php
      include('connection.php');
     if(isset($_POST['submitFlag']))
    {
        $name=$_POST['name'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        //INSERT INTO `stock_data`(`item_name`, `item_price`, `quantity`) VALUES ([value-1],[value-2],[value-3])
        $query="INSERT INTO `stock_data`(`item_name`, `item_price`,`quantity`) VALUES ('$name','$price','$quantity')";
        $result =mysqli_query($conn, $query);
        $conn->close();
        if($result !=''){
            echo("OK...");

        }
        else{
            echo("NOT OK...");
        }
    }
?>