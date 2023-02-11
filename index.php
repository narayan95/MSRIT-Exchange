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


    <!-- /* carousel*/ -->
    <?php
    include 'caro.php';
    ?>
    
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="category-header my-5">
        <h6 class="display-4 fw-bold range">Explore our Categories</h6>
    </div>
    <div class="my-4">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-5 g-3">
            <?php
          $sql="select DISTINCT category from goods";
          $result=mysqli_query($conn,$sql);
         // $sno=0;
          while($row=mysqli_fetch_assoc($result))
          {
          //  $sno=$sno+1;
            echo "<div class='col'>
                <div class='card shadow-sm'>
                <img src='https://source.unsplash.com/random/900*100/?".$row["category"]."'>
                    <div class='card-body'>
                    <div class='d-flex justify-content-between align-items-center'>
                    <p class='card-text text-left'>".$row["category"]."</p>
                            <div class='btn-group'>
                               <a href='/crud/goods.php?category=".$row["category"]."'> <button type='button' class='btn btn-sm btn-outline-dark'>View</button></a>
                            </div>
                            </div>
                    </div>
                </div>
            </div>";
          }
          // include "cards.php";
          ?>
        </div>
    </div>

    <div class="container my-2">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6 side">
                <img src="https://source.unsplash.com/random/900*100/?founder/creator/entepreneur"
                    class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Didn't found your desired product?</h1>
                <p class="lead">Please fill the below form or contact us via email and we will sort this out as soon as
                    possible</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Contact us</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4" data-bs-toggle='modal'
                        data-bs-target='#newModal'>Click on it for filling the form</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h1 class="fw-bold mb-1 modal-title fs-3">What were you finding?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="newrange" class="form-label">Name</label>
                            <input type="text" class="form-control" id="newrange" name="newrange" required>
                        </div>
                        <div class="mb-3">
                            <label for="newcategory" class="form-label">Category</label>
                            <input type="text" class="form-control" id="newcategory" name="newcategory" required>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="photo" class="form-label">Range pic</label><br>
                            <input type="file" id="photo" name="photo"><br>
                        </div> -->
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit"
                            name="new">Submit</button>
                    </form>
                </div>
            </div>
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
        crossorigin="anonymous"></script>
</body>

</html>