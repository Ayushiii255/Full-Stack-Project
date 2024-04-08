<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
   
    <div class="Form-box">
        <form class="Login-form" method="post" action="login.php">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="email" required>
                <label>Email</label>
                <ion-icon name="mail-outline"></ion-icon>
            </div>
            <div class="input-box">
                <input type="password" name="password" required>
                <label>Password</label>
                <ion-icon name="lock-closed-outline"></ion-icon>
            </div>
            <div class="checkbox">
                <span>
                    <input type="checkbox" id="login-checkbox">
                    <label for="login-checkbox">Remember Me</label>
                </span>
                <!-- <h5>Forget password ?</h5> -->
            </div>
            <button type="submit" class="submit-btn" name="login">Submit</button>
            <h5 class="Register-btn">Dont have an account ? <a href="index.php#login-form">Register</a></h5>
        </form>
        <form class="Register-form">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" required>
                <label>Username</label>
                <ion-icon name="person-outline"></ion-icon>
            </div>
            <div class="input-box">
                <input type="email" name="email" required>
                <label>Email</label>
                <ion-icon name="mail-outline"></ion-icon>
            </div>
            <div class="input-box">
                <input type="password" name="password" required>
                <label>Password</label>
                <ion-icon name="lock-closed-outline"></ion-icon>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="register-checkbox">
                <label for="register-checkbox">I agree to the terms & conditions</label>
            </div>
            <button type="submit" class="submit-btn" name="login">Login</button>
            <h5 class="Login-btn">Register before ? Sign Up</h5>
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "12345678";
$database="eproject";
$conn=new mysqli($servername,$username,$password,$database);
 
 
 
 
 
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password=$_POST['password'];
   
    $query="select * from register where email='$email' AND  password='$password'";
 
    $run=$conn->query($query);
    if(mysqli_num_rows($run)>0)
       
        {
           
            echo "<script>window.open('form.php')</script>";
           
        }  
        else
        {  
 
            echo "<script>alert('password or username is not match')</script>";
           
        }
    }
       



?>