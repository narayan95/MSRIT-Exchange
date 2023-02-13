<?php
 session_start();
 if(isset($_POST["submit"]))
 {
     $name=ucfirst($_POST["Pname"]);
     $desc=ucfirst($_POST["Pdesc"]);
     $cat=ucfirst($_POST["Pcat"]);
     $brand=ucfirst($_POST["Pbrand"]);
     $price=ucfirst($_POST["Pprice"]);
    $city=ucfirst($_POST["Pcity"]);
    $state=ucfirst($_POST["Pstate"]);
    $area=ucfirst($_POST["Parea"]);
     $d=date("d.m.y g:i a");
     $user= $_SESSION['sno'];
      $file=$_FILES["Pphoto"];
      $fileName=$file["name"];
      $tempname=$file["tmp_name"];
      $folder="./images/".$fileName;
      move_uploaded_file($tempname, $folder);
     $sql="INSERT INTO `goods` (`gid`,`brand`, `name`, `description`, `category`, `price`, `image`, `tstamp`,`state`,`city`,`area`,`sno`) VALUES (NULL,'$brand', '$name', '$desc', '$cat', '$price', '$fileName', '$d','$state','$city','$area','$user')";
     $result=mysqli_query($conn,$sql);
     $new=true;
 }
?>