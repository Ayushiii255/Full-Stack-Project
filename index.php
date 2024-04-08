<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feeding Forward | Leftover food management system</title>
   <link rel="stylesheet" href="new.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---we had linked our css file----->
    <style>
   
         @keyframes slideIn {
      from {
        transform: translateX(-100%);
      }
      to {
        transform: translateX(0);
      }
    }
    
    .animated-text {
      font-size: 30px;
      font-weight: bold;
      font-family: 'Roboto', sans-serif;
      font-style: italic;
      animation: slideIn 1s ease;
      color: lightyellow;
      text-align: center;
      padding-top: 0%;
      position: absolute;
     padding-left:0%;
    }
    .content {
    text-align: center;
    font-family: Arial, sans-serif;
    margin: 20px;
}

.content h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

.content p {
    font-size: 18px;
    color: #666;
}

.content i {
    font-style: italic;
    color: #008080; /* or any other color you prefer */
}
h1, h4, h3 {
    text-align: center;
    font-family: Arial, sans-serif;
}

h1 {
    font-size: 36px;
    color: #333;
}

h4 {
    font-size: 18px;
    color: #666;
    font-style: italic;
}

h3 {
    font-size: 24px;
    color: #008080;
    margin-top: 20px;
    line-height: 1.5;
}
  
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="full-page">
        <div class="navbar">
        <a class = "animated-text" href='index.php'>Feeding Forward</a>
            <nav>
                
                <ul id='MenuItems'>
                    
                    <li><a href='index.php'>Home</a></li>
                    <li><a href='main.php'>About Us</a></li>
                    <li><a href='form.php'>Services</a></li>
                    <li><a href='Contactus.php'>Contact Us</a></li>
                    
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Sign Up</button></li>
                    <li><a href='login.php'>Login</a></li>
                    <li><a href='index.php'>Logout</a></li>
                </ul>
            </nav>
        </div>
        
        <!-- Sign Up form -->
        <div id='login-form'class='login-page'>
         <div class="form-box">
             <div class='button-box'>
                 <div id='btn'></div>
                 <button type='button'onclick='login()'class='toggle-btn'>Receiver</button>
                 <button type='button'onclick='register()'class='toggle-btn'>Donor</button>
             </div>
             <form id='login' class='input-group-login'>
                 <input type='text'class='input-field'placeholder='Organization Name' required >
                 <input type='email'class='input-field'placeholder='Email Id' required >
                 <input type='integer'class='input-field'placeholder='Mobile Number' required >
         <input type='password'class='input-field'placeholder='Enter Password' required>
         <input type='password'class='input-field'placeholder='Confirm Password' required>
         <input type='checkbox'class='check-box'><span>Remember Password</span>
         <button type='submit'class='submit-btn'>Sign Up</button>
      </form>
      <form id='register' class='input-group-register' action="index.php" method="post">
          <input type='text'class='input-field'placeholder='Restaurant/Store Name' name="rname" required>
          <input type='email'class='input-field'placeholder='Email Id' ame = "email" required>
          <input type='integer'class='input-field'placeholder='Mobile Number' name="number" required>
          <input type='text'class='input-field'placeholder='Address' name="address" required>
          <input type='password'class='input-field'placeholder='Enter Password' name="password" required>
          <input type='password'class='input-field'placeholder='Confirm Password' name="cpassword" required>
         <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
                 <button type='submit'class='submit-btn' name="signup">Sign Up</button>
          </form>
         </div>
     </div>
     </div>
 
 <script>
     var x=document.getElementById('login');
     var y=document.getElementById('register');
     var z=document.getElementById('btn');
     function register()
     {
         x.style.left='-400px';
         y.style.left='50px';
         z.style.left='110px';
     }
     function login()
     {
         x.style.left='50px';
         y.style.left='450px';
         z.style.left='0px';
     }
 </script>
 <script>
     var modal = document.getElementById('login-form');
     window.onclick = function(event) 
     {
         if (event.target == modal) 
         {
             modal.style.display = "none";
         }
     }
 </script>
 <br>
 <h1 style="text-align: center;">Explore <em>Feeding Forward</em></h1>&nbsp;
 <h4 style="text-align: center;"><i>One approach to million smiles.</i></h4>&nbsp;
 <h3 style="text-align: center;">Turn your empathy into impact. <br>Explore our food donation website and discover the power of giving back</h3>
 <section class="flexcontainer">
    
   
            <div class="left-img">
                <img src="Images/services-left-dec.png" class="img1">
            </div>
         
            <div class="col-sm-6 wow fadeInLeft">
                <!-- <img alt="" class="img-responsive" src="{% static 'images/about.png' %}"> -->
            </div>
            <div class="col-sm-6 wow fadeInRight">
                <div class="content" style="text-align: center;">
                   <p> <h2> <i>In the act of giving, we rediscover the joy of serving with love.</i><h2><br>
                       <h2><i>With just a few clicks, you can make a world of difference.</i></h2>
                       <h2><i>Food donation isn't just about giving leftovers<br> it's about serving dignity, respect, and hope on a plate <br></h2>
</h2>
                </p>
                    
                </div>
            </div>
            <div class="right-img">
                <img src="Images/services-right-dec.png" class="img2">
            </div>

            <div class="row">
          
            
        
    </div>
</section>
 <!-- footer -->
 <footer class="footer">
     <div class="container">
       <div class="footer-section">
         <h3 class="footer-heading">ABOUT US</h3>
         <p>We are a team of problem solvers, who are trying to contribute towards the zero hunger mission.</p>
       </div>
       <div class="footer-section">
         <h3 class="footer-heading">SITE LINKS</h3>
         <ul class="site-links">
           <li><a href="#">Home</a></li>
           <li><a href="#">About</a></li>
           <li><a href="#">Contact</a></li>
         </ul>
       </div>
       <div class="footer-section">
         <h3 class="footer-heading">HAVE A QUESTIONS?</h3>
         <p>Karnavati University, India</p>
         <p>+91 9925257572</p>
         <p>teamngo@gmail.com</p>
       </div>

    </footer>
    </div>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$database="eproject";
$conn=new mysqli($servername,$username,$password,$database);
if(isset($_POST['signup']))
{
    $rname= $_POST['rname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
   
    $query="insert into register(rname,email,number,address,password,cpassword)values('$rname','$email','$number','$address','$password','$cpassword')";
 
    $run=$conn->query($query);
    if(mysqli_query($conn,$query))
    {
        echo "<script>window.open('login.php')</script>";
    } 
    else
    {
        echo "Error";
    }
   
   
       
}
 

?>

