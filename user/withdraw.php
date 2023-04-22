<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="shortcut icon" href="../logo/logo121.png" />
<title>Withdrawal Portal</title>
</head>
<style>
body{
	background: url(../logo/background3.jpg);
}

</style>

<body>
	<br>
      <?php
    require "config.php"; 
    $user = $_SESSION['user'];
    $query = "SELECT * FROM `members` WHERE `member_id` = '$user'  ";
    $outline = @mysqli_query ($conn, $query); // Run the query
    if ($outline) { // If the query ran OK, display the records
                // Fetch and print all the records
                  while ($row = mysqli_fetch_array($outline, MYSQLI_ASSOC)){ ?>

  <div class="container bg-dark-grey"><br><br>
    <h1 class="jumbotron w ">Request Withdrawal</h1><br>
    <div class="bg-light col-sm-4"><br><br>
      <p class="text-grey">Welcome: <span style="margin-left: 33px;"> <?php echo $row ['username']; ?></span> </p>
      <p class="text-grey">Balance: <span style="margin-left: 42px; color: green;"> &#36;<?php echo $row ['total']; ?></span></p>
      <p class="text-grey">Status:  <span style="margin-left: 50px; color: green;"> <?php echo $row ['status']; ?></span></p>
    </div>

      
    </div><br>
      
    </div><br>
    <div class="container bg-info"><br><br><br>
      <h2 class="display-3 text-center text-weight-bolder text-white">Complete Withdrawal</h2><br><br>
      <form action="" method="post">
        <?php include "process_withdraw.php"?>

      <div class="form-group">
        <label class="w3-large" for="btc_address">Recieving Bitcoin address:</label>
        <input type="text" class="form-control form-control-lg" name="bitcoin_add" placeholder="Enter Recieving Bitcoin address:" id="pwd">
      </div>
      <div class="form-group">
        <label class="w3-large" for="btc_address">Account Balance: &#36;</label>
        <?php
         $total = $row ['total'];
        ?>
        <input type="number" class="form-control form-control-lg" name="balance" value="<?php echo $total; ?>" readonly>
      </div>
      <div class="form-group">
        <label class="w3-large" for="btc_address">Enter Amount to Withdraw: &#36;</label>
        <input type="number" class="form-control form-control-lg" name="withdraw_num" placeholder="Enter Amount to Withdraw" >
        <span class="w3-small w3-text-red"> * <?php echo $withdraw_numErr;?></span>
      </div>
 
      <div class="form-group">
        <label class="w3-large" for="email">Email address:</label>
        <?php
         $email = $row ['email_add']; 
        ?>
        <input type="email" class="form-control form-control-lg" name="email" placeholder="Enter Email address:" id="pwd" value="<?php echo $email; ?>" readonly>
      <?php } mysqli_free_result ($outline); // Free up the resources
    } else { // If it did not run OK
    // Error message
    echo '<p class="error">The record could not be retrieved. We apologize 
    for any inconvenience.</p>';
    // Debugging message
    echo '<p>' . mysqli_error($conn) . '<br><br>Query: ' . $query . '</p>';
    }// End of if ($result). Now display the total number of records/houses
?> </div><br>
      <button style="font-size: 15px; font-weight: bold;"  type="submit" class="btn btn-warning text-center w3-large btn-lg btn-block">Start Withdrawal</button><br><br>

      </form>
      
    </div>
    <br><br>
   
    
  </div>

	
	<br>
  <div class="container ">

<h2 class="jumbotron w3-center">Frequently Asked Questions About Withdrawal</h2>
  
<button style="font-size: 15px; font-weight: bold; " id="deal" onclick="myFunction('Demo1')" class="w3-btn w3-block w3-light-blue  w3-left-align">Withdrawing Funds – How Does It Work?</button>
<div id="Demo1" class="w3-container w3-hide">
  <p class="text-white"> At Vaultago Inc , we have designed our withdrawal process to be as easy as our funding process. To begin the withdrawal process first select your preferred withdrawal method and then type in the amount you want to withdraw and click "Proceed".</p>
</div><br>
<button style="font-size: 15px; font-weight: bold; "  id="deal" onclick="myFunction('Demo2')" class="w3-btn w3-block w3-light-blue  w3-left-align">What Methods Are There For Withdrawal Of Funds?</button>
<div id="Demo2" class="w3-container w3-hide">
  <p class="w3-text-white">Vaultago Inc  provides five(5) withdrawal methods (Bitcoin, Skrill, Western Union, Money Gram and Direct Bank Transfer).</p>
</div><br>
<button style="font-size: 15px; font-weight: bold; "  id="deal" onclick="myFunction('Demo3')" class="w3-btn w3-block w3-light-blue  w3-left-align">Must Withdrawal Requests Only Be Made At Certain Times?</button>
<div id="Demo3" class="w3-container w3-hide">
  <p class="w3-text-white">Requests for withdrawals can be made at any time via the Vaultago Inc website. The requests will be processed immediately, and during the relevant financial institutions’ business hours. </p>
</div><br>
<button style="font-size: 15px; font-weight: bold; "  id="deal" onclick="myFunction('Demo4')" class="w3-btn w3-block w3-light-blue  w3-left-align">Is There A Withdrawal Limit?</button>
<div id="Demo4" class="w3-container w3-hide">
  <p class="w3-text-white">Withdrawals are capped at the amount of funds that are currently in the account.</p>
</div><br>
<button style="font-size: 15px;font-weight:bold;  "  id="deal" onclick="myFunction('Demo5')" class="w3-btn w3-block w3-light-blue  w3-left-align">How Long Does It Take To Get My Money?</button>
<div id="Demo5" class="w3-container w3-hide">
  <p class="w3-text-white">Withdrawal requests are addressed and handled as quickly as possible.</p>
</div><br>
<br>

</div>
<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

<br>


	<footer>

		<?php include 'user_footer.php' ?>
		
	</footer>
	
</body>
</html>