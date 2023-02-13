<?php
 if(isset($_POST["signup"]))
 {
     $email=$_POST["uemail"];
     $password=$_POST["upassword"];
     $temp_pass=$_POST["cpassword"];
     $hash=password_hash($password,PASSWORD_DEFAULT);
     $sql="select * from users where email='$email'";
     $result=mysqli_query($conn,$sql);
     $numExistingRows=mysqli_num_rows($result);
     if($numExistingRows>0)
     {
        $exists=true;
     }
     else
     {
     if($password!=$temp_pass)
     {
        $showError="password not matching";
     }
     else
    { 
        $sql="INSERT INTO `users` (`sno`, `email`, `password`, `dt`) VALUES ( NULL,'$email', '$hash', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
             $showAlert=true;
        }
    }
}
 }

?>