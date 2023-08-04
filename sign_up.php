<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $contact_no = $_POST["contact_no"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE first_name = '$first_name' AND last_name = '$last_name' AND email = '$email' ");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Name or Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('','$first_name','$last_name','$contact_no','$email','$password')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Registration Successful'); </script>";
        }
        else{
            echo
            "<script> alert('Password Does Not Match'); </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form class="" action="" method="post" autocomplete="off">
        <!-- <label for="first_name">First Name : </label> -->
        <input type="text" name="first_name" id="first_name" required value="" placeholder="First Name :"> <br>
        <!-- <label for="last_name">Last Name : </label> -->
        <input type="text" name="last_name" id="last_name" required value="" placeholder="Last Name :"> <br>
        <!-- <label for="contact_no">Contact Number : </label> -->
        <input type="number" name="contact_no" id="contact_no" required value="" placeholder="Contact Number :"> <br>
        <!-- <label for="email">Email : </label> -->
        <input type="email" name="email" id="email" required value="" placeholder="Email:"> <br>
        <!-- <label for="password">Password : </label> -->
        <input type="password" name="password" id="password" required value="" placeholder="Password :"> <br>
        <!-- <label for="confirmpassword">Confirm Password : </label> -->
        <input type="password" name="confirmpassword" id="confirmpassword" required value="" placeholder="Confirm Password :"> <br>
        <p>By signing up, you agree to our Term of Use and Privacy Policy.</p>
        <button type="submit" name="submit">Sign Up</button>
        <p>Already have an account?<a href="login.php">Login</a></p>
    </form>
    
    
</body>
</html>