<?php
session_start();
if((!isset($_SESSION['loggedin']))||($_SESSION['loggedin']!=true))
{
    header("location:index.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> User page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <!-- nav -->
  <!-- <div class="container-top">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 mb-4 border-bottom">
            <a class="navbar-brand" href="#">
                <img src="https://media-exp3.licdn.com/dms/image/C4D1BAQEIuFSc-wGdnQ/company-background_10000/0/1519799419574?e=2159024400&v=beta&t=f37LmJAB7FFKEwm9rm0e3bajGQK7NiGIVoloM5Tj1HE"
                    alt="Bootstrap" width="200" height="100">
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-dark">Home</a></li>
                <li><a href="#" class="nav-link px-2 link-secondary">About</a></li>
                <li><a href="#" class="nav-link px-2 link-secondary">Contact Us</a></li>
            </ul>
            <form class="d-flex col-md-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Find Books,Furniture and many more..."
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <div class="col-md-3 text-end me-5">
              <button type="button" class="btn btn-outline-dark me-2"> Sell Online</button>
              
            </div>
            <?php  echo"<h5 class='mx-3'> Welcome ".$_SESSION['username']."</h5>"; ?>
        </header>
    </div> -->
<?php include "nav.php" ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>