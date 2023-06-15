<?php

// Create connection
$conn = mysqli_connect("localhost","root","","forgerydetection");
 if (isset($_POST['add'])) 
  {
// Get the form data form page
$name = $_POST['name'];
$company = $_POST['company'];
$job = $_POST['job'];
$job_title = $_POST['job_title'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$security_code = $_POST['security_code'];

//$target_dir = "uploads/";

$filed1=$_FILES['file1']['tmp_name'];
$target_file1=$_FILES['file1']['name'];

$filed2=$_FILES['file2']['tmp_name'];
$target_file2=$_FILES['file2']['name'];

$filed3=$_FILES['file3']['tmp_name'];
$target_file3=$_FILES['file3']['name'];

move_uploaded_file($_FILES["file1"]["tmp_name"],"uploads/".$target_file1);
move_uploaded_file($_FILES["file2"]["tmp_name"],"uploads/".$target_file2);
move_uploaded_file($_FILES["file3"]["tmp_name"],"uploads/".$target_file3);
// Insert the form data into the database
$sql = "INSERT INTO form_data (name, company, job, job_title, email, phone, message, security_code,filed1,filed2,filed3)
VALUES ('$name', '$company', '$job', '$job_title', '$email', '$phone', '$message', '$security_code','$target_file1','$target_file2','$target_file3')";

if (mysqli_query($conn, $sql)) {
    header('Location: submitted.html?success=true');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

  }

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Details</title>
	<link rel="stylesheet" href="form.css">
</head>
<body>
	<header>
		<div class="logo-container">
			<img src="logo.png" alt="Logo">
			<h1>Forgery Detection</h1>
			<h1>Please fill the form below to request online based on specific image forgery :</h1>
		</div>
	</header>
	<a href="file:///C:\Users\LENOVO\Desktop\sublime\submitted.html"></a>
	<main>
		<h2>Details</h2>

<form  method="POST"  enctype="multipart/form-data">
		  
  <label for="name">Name</label>
  <input type="text" id="name" name="name" required>

  <label for="company">Company or Institution</label>
  <input type="text" id="company" name="company" required>

  <label for="job">Job</label>
  <input type="text" id="job" name="job" required>

  <label for="job-title">Job Title</label>
  <input type="text" id="job-title" name="job-title" required>

  <label for="email">Email</label>
  <input type="email" id="email" name="email" required>

  <label for="phone">Phone Number</label>
  <input type="tel" id="phone" name="phone" required>

  <label for="message">Message</label>
  <textarea id="message" name="message" required></textarea>

  <label for="security-code">Security Code</label>
  <div id="captchaBackground">
    <canvas id="captcha">captcha text</canvas>
    <input id="textBox" type="text" name="text">
    <div id="buttons">
    <input id="submitButton" type="submit">
    <button id="refreshButton" type="submit">Refresh</button>
    <span id="output"></span>
	</div>
  </div>
  
  <label for="image">Upload Image (max size 5MB)</label>
  <input type="file" id="image" name="file1" accept="image/*" required>
  <br>
  <label for="image">Upload Image (max size 5MB)</label>
  <input type="file" id="image" name="file2" accept="image/*" required>
  <br>
  <label for="image">Upload Image (max size 5MB)</label>
  <input type="file" id="image" name="file3" accept="image/*" required> 
  <br>
   <div class="text-center" style="text-align:center">
    <button type="submit" name="add" class="button">Submit
    </button> 
  </div>
  </div>

 </form>
 <br>
    <h2  style="color: palevioletred;">Learn how Image Forgery Detector works and get analyzed</h2>
    <h3 style="color: firebrick;">Step 1 : - Access our website forgery detection and Get Started<br>
        <br>
    	Step 2 : - Sign-in to our website to make sure of your identity and validate<br>
        <br>
    	Step 3 : - After Signing-in to our website fill out the requried details<br>
        <br>
    	Step 4 : - Make sure to add 3 samples of images to detect<br>
        <br>
    	Step 5 : - After submitting your detail our team will detect the images of logo<br> 

    	           or credit card fraud and analyze the images<br>
        <br>
    	Step 6 : - The final report will be sent to your respective emails.

    </main>
    <div id="form-in-successful" style="display: none">
        <p>form in successful!</p>
    </div>
    
    <script src="form.js"></script>
<footer>
	<p>&copy; 2023 Forgery Detection</p>
</footer>
</body>
</html>
