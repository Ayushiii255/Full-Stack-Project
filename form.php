<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Food Donation Form</title>
<link rel="stylesheet" type="text/css" href="formstyles.css">
</head>
<body>
  <div class="full-page">
    <div class="navbar">
        <div>
            <a href='index.php'>Feeding Forward</a>
        </div>
        <nav>
            <ul id='MenuItems'>
                <li><a href='index.php'>Home</a></li>
                <li><a href='main.php'>About Us</a></li>
                <li><a href='form.php'>Services</a></li>
                <li><a href='Contactus.php'>Contact Us</a></li>
                <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Sign Up</button></li>
                <li><a href='login.php'>Login</a></li>
            </ul>
        </nav>
    </div>
  </div>
<div class="container">
  <div class="form-container">
    <h2 style="text-align: center;">Food Donation</h2>

    <form action="/submit-food-donation" method="POST" >
        <label for="food_name">Food Name:</label>
        <input type="text" id="food_name" name="food_name" required>

        <label for="food_type">Food Type:</label>
        <select id="food_type" name="food_type" required>
            <option value="">Select Food Type</option>
            <option value="Fruits">Fruits</option>
            <option value="Vegetables">Vegetables</option>
            <option value="Grains">Grains</option>
            <option value="Dairy">Dairy</option>
            <option value="Meat">Meat</option>
            <!-- Add more options as needed -->
        </select>

        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity" required>

        <label for="expiry_date">Expiry Date:</label>
        <input type="date" id="expiry_date" name="expiry_date" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        <a href="mailto:ayushishah@gmail.com">Send Email</a>

        <input type="submit" value="Submit">
    </form>
  </div>
</div>
</body>
</html>