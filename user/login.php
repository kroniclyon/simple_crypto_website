<?php
include "config.php";
error_reporting(E_ALL);
// Initialize the session

 
// Check if the user is already logged in, if yes then redirect him to welcome page


 
// Include config file


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
// Define variables and initialize with empty values
$email = $password = "";
$emailErr = $password_err = $error_msg ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty($_POST["email"])){
        $emailErr = "Please enter your email address.";
    } else{
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Invalid email format"; 
         }
    }
    
    // Check if password is empty
    if(empty($_POST["password"])){
        $password_err = "Please enter your password.";
    } else{
        $password = test_input($_POST['password']);
    }
    $password = md5($password);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    
    // Validate credentials
    if(empty($emailErr) && empty($password_err)){
        // Prepare a select statement
        $query = " SELECT * FROM `members` WHERE `email_add` = '{$email}' AND `password` = '{$password}' ";
        $run_query = mysqli_query($conn, $query);
              
          if(mysqli_num_rows($run_query) == 1){
            session_start();
                    
            while($result = mysqli_fetch_assoc($run_query)){
            $user_id = $result['member_id'];
            $_SESSION['user'] = $user_id;            
            header("Location:user_dashboard.php");
            }
            }else{
            $error_msg = "Log-in Failed, Invalid Email or Password";
            }
   

mysqli_close($conn);
}
}
?>