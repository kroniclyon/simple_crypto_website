<?php
include 'config.php'; // asuming you have your database connection in that file



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 $bitcoin_addErr= $packageErr = $email = $location5 = "";
 $bitcoin_add = $package = $emailErr = $location5Err =  "";
if ($_SERVE['REQUEST_METHOD'] = 'POST') {


	if (empty($_POST['bitcoin_add'])) {
		$bitcoin_addErr = "Please enter a Valid Bitcion Address";
	}else{
		$bitcoin_add = test_input($_POST['bitcoin_add']);
		
	}
	    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image"]["name"];
        $filetype = $_FILES["image"]["type"];
        $filesize = $_FILES["image"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location5="uploads/" . $filename;
            if(file_exists($location5)){

                $location5Err = "Error:" .$location5 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location5Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location5Err = "Error:  Uploading Failed ";
    }
	if (empty($_POST['package'])) {
		$packageErr = "Please Choose an Investment Package";
	}else{
		$package = test_input($_POST['package']);
		
	}

	 if (empty($_POST["email"])) {
	 	$emailErr = "Please Enter a valid Email Address";
	 } else {
	 	$email = test_input($_POST["email"]);
	 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Invalid email format"; 
         }
	 }



	 $bitcoin_add = mysqli_escape_string($conn, $bitcoin_add);
	 $package = mysqli_escape_string($conn, $package);
	 $email = mysqli_escape_string($conn, $email);
	 

	 if (!$bitcoin_addErr && !$packageErr && !$location5Err) {
	 		
	 		$ssql = "INSERT INTO `deposit_info`( `bitcoin_address`, `package_type`, `email`, `payment_photo`, `date_paid`)
        VALUES ('$bitcoin_add', '$package', '$email', '$location5', NOW())";
 
         if (mysqli_query($conn, $ssql)) {?>
        	<div class="alert alert-success alert-dismissible">
			  <p class="text-center w3-large text-white">Notice: Your Investment Deposit was made successful and your wallet will be credited shortly</p> 
			  <a class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
			</div>

       <?php } else {
        	echo "Error: " . $ssql . "<br>" . mysqli_error($conn);
  
        }
      }
  }
  mysqli_close($conn);
?>

