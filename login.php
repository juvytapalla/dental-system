<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if (isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location:index.php");
        }
        else{
            echo
            "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo
        "<script> alert('User Not Registered'); </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Log In</h1>
    <form action="" class="" method="post" autocomplete="off">
        <!-- <label for="email">Email :</label> -->
        <input type="text" name="email" id="email" required value="" placeholder="Email :"> <br>
        <!-- <label for="password">Password :</label> -->
        <input type="text" name="password" id="password" required value="" placeholder="Password :"> <br>
        <p>Forgot Password?</p>
        <button type="submit" name="submit">Login</button>
        <p>Don't have an account?<a href="sign_up.php">Sign Up</a></p>
    </form>
    
</body>
</html>