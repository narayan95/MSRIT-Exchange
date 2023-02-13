  <!-- nav -->
<?php  
 session_start();
if((!isset($_SESSION['loggedin']))||($_SESSION['loggedin']!=true))
{
   $loggedin=false;
}
else
{
    $loggedin=true;
}

 echo' <div class="container-top">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 mb-4 border-bottom">
            <a class="navbar-brand" href="/CRUD/index.php">
                <img src="https://media-exp3.licdn.com/dms/image/C4D1BAQEIuFSc-wGdnQ/company-background_10000/0/1519799419574?e=2159024400&v=beta&t=f37LmJAB7FFKEwm9rm0e3bajGQK7NiGIVoloM5Tj1HE"
                    alt="Bootstrap" width="200" height="100">
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/CRUD/index.php" class="nav-link px-2 link-dark">Home</a></li>
                <li><a href="#" class="nav-link px-2 link-secondary">About</a></li>
                <li><a href="#" class="nav-link px-2 link-secondary">Contact Us</a></li>
            </ul>
            <form class="d-flex col-md-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Find Books,Furniture and many more..."
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <div class="col-md-3 text-end me-5">';
            if(!$loggedin)
            {
                echo'  <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal"
                data-bs-target="#myModal">Login</button>
                <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal"
                data-bs-target="#signModal">Sign-up</button>';
            }
            if($loggedin)
            {
                echo'<button type="button" class="btn btn-outline-dark me-2" data-bs-toggle="modal"
                data-bs-target="#sellModal"> Sell Online</button>
            <a href="/crud/logout.php"> <button type="button" class="btn btn-primary my-2">Logout</button></a>
            <h5> Welcome '.$_SESSION['username'].'</h5>
        </div>';
            }
             echo' 
                
        </header>

    </div>';
    ?>