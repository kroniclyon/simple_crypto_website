<?php
include 'config.php'; // asuming you have your database connection in that file



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$fullnameErr = $usernameErr = $emailErr = $passErr = $contact_noErr = $locationErr= "";
$fullname = $username =  $email = $pass = $contact_no = $location="";
if ($_SERVE['REQUEST_METHOD'] = 'POST') {

	if (empty($_POST['fullname'])) {
		$fullnameErr = "Please Enter Your Full Name ";
	}else{
		$fullname = test_input($_POST['fullname']);
		
	}
	if (empty($_POST['username'])) {
		$usernameErr = "Please enter a username";
	}else{
		$username = test_input($_POST['username']);
		
	}
	if (empty($_POST["location"])) {
	 	$locationErr = "Choose a Country Code ";
	 } else {
	 	$location = test_input($_POST["location"]);
	 }
	if (empty($_POST['contact_no'])) {
		$contact_noErr = "Please enter a valid Mobile number";
	}else{
		$contact_no = test_input($_POST['contact_no']);
		
	}
	 if (empty($_POST["email"])) {
	 	$emailErr = "Please Enter a valid Email Address";
	 } else {
	 	$email = test_input($_POST["email"]);
	 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Invalid email format"; 
         }
	 }
	 if (empty($_POST["password"])) {
	 	$passErr = "Please Enter a password ";
	 } else {
	 	$pass = test_input($_POST["password"]);
	 }




	 $fullname = mysqli_escape_string($conn, $fullname);
	 $username = mysqli_escape_string($conn, $username);
	 $email = mysqli_escape_string($conn, $email);
	 $contact_no = mysqli_escape_string($conn, $contact_no);
	 $pass = mysqli_escape_string($conn, md5($pass));
	 $location = mysqli_escape_string($conn, $location);

	 if (!$fullnameErr && !$usernameErr && !$emailErr && !$passErr && !$contact_noErr  ) {
	 		
	 	$sql = "SELECT * FROM members WHERE email_add='$email' LIMIT 1";
		    $result = mysqli_query($conn, $sql);
		    if (mysqli_num_rows($result) > 0) {
		        $emailErr = "Your Email address has already been used. ";
		    }else{

		     $query1 = "INSERT INTO `members`(`fullname`, `username`, `email_add`,`country_code`, `Contact_no`, `password`, `date_registered`)
		       VALUES ('$fullname', '$username', '$email', '$location', '$contact_no','$pass', NOW())";


		        if (mysqli_query($conn, $query1)) {?>
		          <div class="alert alert-primary alert-dismissible">
		        <p class="text-center w3-large text-white">Registration Successful... <a href="user_login.php">Click to Login with Email and Password</a></p> 
		        <a class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
		      </div>

		       <?php } else {
		          echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
		  
		        }

		         }

  }}
?>

