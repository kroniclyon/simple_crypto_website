<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include 'config.php'; // asuming you have your database connection in that file
function test_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 $bitcoin_addErr = $balanceErr = $withdraw_numErr = $email = "";
 $bitcoin_add = $balance =  $withdraw_num = $emailErr =  "";
if ($_SERVE['REQUEST_METHOD'] = 'POST') {
	if (empty($_POST['bitcoin_add'])) {
		$bitcoin_addErr = "Please Enter a Valid Recieving Bitcoin Wallet Address ";
	}else{
		$bitcoin_add = test_data($_POST['bitcoin_add']);
	}
	 if (empty($_POST["email"])) {
	 	$emailErr = "Please Enter a valid Email Address";
	 } else {
	 	$email = test_data($_POST['email']);
	 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Invalid email format"; 
         }
	 }
	 if (empty($_POST['balance'])) {
	 	$balanceErr = "Insufficient Balance";
	 }else{
	 	$balance = test_data($_POST['balance']);
	 }
	 if (empty($_POST['withdraw_num'])) {
	 	$withdraw_numErr = "Please Enter a Withdrawal Amount";
	 }else{
	 	$withdraw_num = test_data($_POST['withdraw_num']);
	 	if ($withdraw_num > $balance) {
	 		$withdraw_numErr = "Insufficient Balance";
	 	}
	 }
	 $bitcoin_add = mysqli_escape_string($conn, $bitcoin_add);
	 $email = mysqli_escape_string($conn, $email);
	 $balance = mysqli_escape_string($conn, $balance);
	 $withdraw_num = mysqli_escape_string($conn, $withdraw_num);
	 if (!$bitcoin_addErr && !$balanceErr && !$withdraw_numErr ) {
	 		$ssql = "INSERT INTO `withdrawal`( `email`, `btc_address`, `amount`, `withdrawal_date`)
        VALUES ('$email', '$bitcoin_add', '$withdraw_num', NOW())";
         if (mysqli_query($conn, $ssql)) {
         	header('location: gas_verify.php');
         } else {
        	$errors = "Error: " . $ssql . "<br>" . mysqli_error($conn);
        }
      }
  }
  mysqli_close($conn);
?>