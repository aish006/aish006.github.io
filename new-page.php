<?php
 

// Create connection
$conn = mysqli_connect("localhost","root","","forgerydetection");

// Get form data newpage signup
if(isset($_POST['signup'])) 
{
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];



echo $username;
echo $email;
echo $password;


// Insert data into database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
   header('Location: login.php?success=true');
} else {
	
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forgery Detection - Sign Up</title>
	<link rel="stylesheet" href="new-page.css">
</head>
<body>
	<header>
		<div class="logo-container">
			<img src="logo.png" alt="Forgery Detection Logo">
			<h1>Forgery Detection</h1>
		</div>
	</header>
	<main>
		<h2>Sign Up</h2>
		<form method="POST">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
		 
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
		 
            <input type="submit" name="signup"  class="btn btn-primary" value="Sign Up">
            <br>
            <p>Don't have an account? <a href="login.php">Log In here</a></p>
		</form>
		

		
	 
	</main>
	 
	<footer>
		<p>&copy; 2023 Forgery Detection</p>
	</footer>
</body>
</html>
