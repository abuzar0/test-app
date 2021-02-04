<?php
     session_start();
   if (isset($_SESSION['email'])){echo("");}else{session_destroy();header("location:index.php");}
    session_destroy();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scs.js"></script>
    <script src="stock_data.js"></script>
    <script src="Auto_complete.js"></script>
    <style>
    .card-body {
        box-sizing:border-box;
        margin:0;
        padding:0;
    }
    td {
        padding:12px;
    }
    th {
        padding:12px;
    }
    ul {
        background-color:#eee;
        cursor:pointer;
    }
    li {
        padding:8px;
    }
    </style>
</head>
<body class="bg-right">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                     <nav aria-label="breadcrumb" class="mb-3">
                       <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item"><a href="#">dash_board</a></li>
                           <li class="breadcrumb-item"><a href="#">profile</a></li>
                           <li class="breadcrumb-item active" aria-current="page"> <?php echo $_SESSION['email'];?></li>
                           </div>
                        </ol>
                   </nav>
               </div>
           </div>
        <div class="row">
            <div class="col-md-3 d-md-black">
                     <div class="card bg-white shadow border-white card-left">
                  <div class="card-body">
                   <nav class="nav d-md-block d-none">
                    <a data-toggle="tab" class="nav-link active" href=""><i class="fa fa-user-circle" aria-hidden="true"> <?php echo $_SESSION['email'];?></i></a>
                      <a data-toggle="tab" class="nav-link"  href='#Add_catagries'> <i class="fa fa-stack-exchange" aria-hidden="true"></i> Add_catagries</a>
                      <a data-toggle="tab" class="nav-link " href="#bill"> <i class="fa fa-imdb" aria-hidden="true"></i> Bill_system</a>
                      <a class="nav-link " href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i> logout</a>
                    </nav>
            </div>
     </div>
</div>
       <div class="col-md-9 d-md-black ">
             <div class="card bg-white shadow border-white card-right">
                  <div class="card header border-bottom mb-5 nav d-md-none d-block">
                                    <ul class="nav nav-tabs card-header-tabs nav-fill">
                                      <li class="nav-item">
                                       <a class="nav-link active" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                                    </li>
                                        <li class="nav-item">
                                            <a data-toggle="tab" class="nav-link" href="#Add_catagries" ><i class="fa fa-stack-exchange" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="nav-item">
                                            <a data-toggle="tab"  class="nav-link" href="#bill"><i class="fa fa-imdb" aria-hidden="true"></i></a>
                                            </li>
                                           <li class="nav-item">
                                            <a data-toggle="tab" class="nav-link " href="#logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                                            </li>
                                           </ul>
                        </div>
                   <div class="card-body tab-content border-0 ">
                        <div class="tab-pane active " id="Add_catagries">
                                              <h3 class="text-center">Catagries_System</h3>
                                                <div class="group-row text-center"> <br>
                                                 <label for="name" class="text-center">catagrgies_name</label>
                                             <input type="text" id="name" name="name" placeholder="catagrgies_name" class="form-control" style="border-radius:9px;" disable required />
                                          <label for="quantity" class=" text-center">quantity</label>
                                      <input type="text" id="quantity" name="quantity" placeholder="quantity" class="form-control " style="border-radius:9px;" disable required />
                                   <label for="price" class=" text-center">price</label>
                                    <input type="text" id="price" name="price" placeholder="price" class="form-control" style="border-radius:9px;" disable required /><br>
                                    <!-- <label for="image" class="text-center">Add_image</label>
                                    <input type="file" id="image" name="image" class="form-control" style="border-radius:9px;"  /><br>
                                     <br> -->
                                        <label for="btn" class=" text-center"></label>
                                            <button class="btn btn-danger btn-sm" name="add" id="add">Add</button>
                                         <br>
                                    <br>
                        </div>
                    </div>
                                       <div class="tab-pane " id="bill">
                                       <div class="row" >
                                             <div class="col-6">
                                             <h3 class="text-center">Bill_System</h3>
                                                 <div class="group-row text-center">
                                             <label for="name" class="text-center">catagrgies_name</label>
                                              <input type="name" id="Name" name="Name" placeholder="catagrgies_name" class="form-control" style="border-radius:9px;" disable required />
                                             <br>
                                             <div id="Item_name"></div>
                                            <label for="quantity" class="text-center">quantity</label>
                                              <input type="number" id="quantity" name="quantity" placeholder="quantity" class="form-control" style="border-radius:9px;" disable required />
                                              <br>
                                              <label for="price" class=" text-center">price</label>
                                               <input type="number" id="price" name="price" placeholder="price" class="form-control" style="border-radius:9px;" disable required />
                                               <br>
                                               <label for="total" class=" text-center">total</label>
                                              <input type="number" id="total" name="toatl" placeholder="total" onmousemove="cal()" class="form-control" style="border-radius:9px;" disable required /><br>
                                             <label for="btn" class=" text-center"></label>
                                               <button class="btn btn-danger btn-sm" name="Add" id="Add">Add</button><br>
                                            <br>
                                               
                                          </div>      
                                    </div>
                                    <div class="col-6">
                                        <div class="container">
                                            <div class="card bg-white shadow border-white">
                                                <div class="card-header bg-grey text-center">
                                                    <h6>Bill_System</h6>
                                                       <div class="card-body  text-center">
                                                             <table id="table">
                                                      <thead>
                                                      <tr>
                                                      <th scope="col-2">name</th>
                                                      <th scope="col-2">quantity</th>
                                                      <th scope="col-2">price</th>
                                                      <th scope="col-2">total</th>
                                                      <th scope="col-2">Remove</th>
                                                     </tr>
                                              </thead>
                                              <tbody>
                                              
                                              </tbody>
                                       <tfoot>
                                           <tr>
                                               <th colspan="4">
                                               <label for="TOTAL">TOTAL</label>
                                                    <input type="text" id="Calculate" onmousemove="Total()" placeholder="0" style="border-radius:9px;"  disable />
                                               </th>
                                           </tr>
                                  </tfoot>
                          </table>
                </div>
            </div>
        </div>
    </div>
 </div>
</div> 
</div>
</div>
</body>
</html>
