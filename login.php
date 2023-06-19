<?php

// Create connection
$conn = mysqli_connect("localhost","root","","forgerydetection");

// Get the form data login
  if (isset($_POST['login'])) 
  {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Check if the users exists
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // User exists, redirect to the landing page
    header("Location: form.php");
    exit();
  } else {
    // Users does not exist, show error message
    echo "Invalid email or password";
  }
  }
?>

<html>
  <head>
    <title>Login Page</title>
  </head>
  <link rel="stylesheet" href="login.css">
  <body>
    <header>
    <div class="logo-container">
      <img src="logo.png" alt="Forgery Detection Logo">
      <h1>Forgery Detection</h1>
    </div>
    </header>
    <main>
         <h1>Login</h1>
    <form  method="POST">
     
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br><br>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      
     
      
      <button type="submit" name="login">Log In</button>
	  <p>Already have an account? <a href="new-page.php"> Sign Up here</a></p>
      </form>
    <br><br>
   
   
 

   <div id="log-in-successful" style="display: none">
      <p>log-in-successful!</p>
    </div>
  </main>
    
    

    
    <footer>
    <p>&copy; 2023 Forgery Detection</p>
  </footer>
  </body>
</html>
