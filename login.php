<?php
if(isset($_POST["login"]))
{
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql="select * from users where email='$email'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        $userid=$row['sno'];
        $hash=$row['password'];
        if(password_verify($password,$hash))
        {
            $login=true;
        }
    }
    // $num=mysqli_num_rows($result);
    if($login)
    {
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=strtok($email,'@');
        $_SESSION['sno']=$userid;
        header("location: index.php");

    }
    else
    {
        $showError="invalid credentials";
    }}
   

?>