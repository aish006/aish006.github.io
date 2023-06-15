<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forgerydetection";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


// Get the form data login
  if (isset($_POST['login'])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Check if the users exists
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // User exists, redirect to the landing page
    header("Location: form.html");
    exit();
  } else {
    // Users does not exist, show error message
    echo "Invalid email or password";
  }

  // Get the form data form page
$name = $_GET['name'];
$company = $_GET['company'];
$job = $_GET['job'];
$job_title = $_GET['job_title'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$message = $_GET['message'];
$security_code = $_GET['security_code'];

// Insert the form data into the database
$sql = "INSERT INTO form_data (name, company, job, job_title, email, phone, message, security_code)
VALUES ('$name', '$company', '$job', '$job_title', '$email', '$phone', '$message', '$security_code')";

if (mysqli_query($conn, $sql)) {
    header('Location: submitted.html?success=true');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Get form data newpage signup
if (isset($_POST['signup'])) {
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert data into database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
    header('Location: form.html?success=true');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);


?>
