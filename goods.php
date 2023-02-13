<!-- <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="crud";
    $conn=mysqli_connect($servername,$username,$password,$database);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <?php
        //   $sql="select * from notes";
        //   $result=mysqli_query($conn,$sql);
        //   $sno=0;
        //   while($row=mysqli_fetch_assoc($result))
        //   {
        //     $sno=$sno+1;
        //     echo "<tr>
        //     <th scope='row'>". $sno."</th>
        //     <td>".$row['title']."</td>
        //     <td>".$row['descrip']."</td>
        //     <td> <img src='images/".$row['Image']."' height='100' width='100'></td>
        //     <td>".$row['tstamp']."</td>
        //     <td> <button type='button' class='btn btn-outline-primary mb-1 edit' id=".$row['sno']." data-bs-toggle='modal' data-bs-target='#editModal''>Edit</button> <button type='button' class=' mb-1 btn btn-outline-primary delete' id=d".$row['sno']." >Delete</button> </td>
        //   </tr> ";
        //   }
        // foreach (getallheaders() as $name => $value) {
        //     echo "$name: $value <br>";
        //   }
    ?>  
  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html> -->
<?php
    include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSRIT Exchange- Free classifieds at MSRIT Exchange, Buy and Sell for free anywhere with OUR Online
        Classified Advertising</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/CRUD/style.css" rel="stylesheet">
</head>

<!--  php code for inserting values taken from user in tables -->
<?php
    $new=false;
    $showAlert=false;
    $showError=false;
    $exists=false;
    $login=false;
    if($_SERVER['REQUEST_METHOD']=='POST')
    { 
        include 'new.php';
        include 'signup.php';
        include 'login.php';
      
    }
?>

<body>
    <?php 
     include "nav.php" ;
    //<!-- sell modal-->
    include 'sellModal.php'; 
    //<!--login modal -->
     include 'loginModal.php'; 
   // <!-- sign up modal -->
     include 'signModal.php'; 

     include 'filterModal.php';
     if($showAlert)
    {
        echo'  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>You are succesfully signed up
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($showError)
    {
        echo'  <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>'.$showError.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    if($new)
    {
        echo'  <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Product added successfully!.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    if($login)
    {
        echo'  <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>you are now logged in!.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    if($exists)
    {
        echo'  <div class="alert alert-secondary alert-dismissible fade show" role="alert">
            <strong>Looks like you are already registered with us.. please login to continue
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
?>
<div class="btn-group">
  <button class="btn btn-dark btn-lg mx-2" type="button" data-bs-toggle="modal"
                data-bs-target="#filterModal">
   Add Filters
  </button>
  
</div>

    <div class="category-header my-5">
        <?php
        $categoryName=$_GET['category'];
      echo'  <h6 class="display-4 fw-bold range">Here is your '.$categoryName.' item store</h6> '?>
    </div>
    <div class="my-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
            <?php
            $categoryName=$_GET['category'];
           
         $sql="select * from `goods` where category='$categoryName'";
         $result=mysqli_query($conn,$sql);
         while($row=mysqli_fetch_assoc($result))
           { $sid=$row['sno'];
            $sql2="select * from `users` where `users`.sno='$sid'";
            $result2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_assoc($result2);
            $sell=$row2['email'];
            $seller=strtok($sell,'@');
            // echo "<div class='col'>
            //     <div class='card shadow-sm'>
            //     <img src='./images/".$row["image"]."'>
            //         <div class='card-body'>
            //         <div class='d-flex justify-content-between align-items-center'>
            //         <p class='card-text'>".$row["name"]." ".$row["description"]." ".$row["price"]." ".$row["age"]."</p>
            //                 <div class='btn-group'>
            //                    <a href='#'> <button type='button' class='btn btn-sm btn-outline-dark'>Buy</button></a>
            //                 </div>
            //                 </div>
            //         </div>
            //     </div>
            // </div>";
         
         echo" <div class='col'> 
         <div class='card-category-4'>
      
                 <div class='sp-card-2'>
                     <div class='overlap'>
                         <a href='#' title='View Details'>Buy Product</a>
                     </div>
                     <div class='card-image'>
                         <img src='./images/".$row['image']."'/>
                     </div>
                     <div class='card-content'>
                         <span class='card-title'>".$row['name']."</span>
                         <span class='price-start'>₹".$row['price']."</span>
                         <div class='card-caption'> Brand: ".$row['brand']." <br/> Description:
                         " .$row['description']."<br />Seller: ".$seller." 
                        
                         </div>
                         <div class='cloth-size'>
                              
                                     <span>".$row['area'].", ".$row['city']."  </span>
                               </div>
                       
                     </div>
                 </div>

 </div>
 </div>";
           }
    //       include "cards.php";
    //       <div class='cloth-size'>
    //       <span><b>".$row['category']."</b> </span>
        
    //   </div>
          ?>


        </div>
    </div>

    <!--footer -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-muted">© 2023 MSRIT-Exchange</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
    
    </script>
</body>

</html>