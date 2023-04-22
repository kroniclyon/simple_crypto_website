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
<title>User Dashboard</title>
</head>
<style>
body{
	background: url(../logo/background3.jpg);
}



</style>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63518291b0d6371309ca9dd4/1gfr6c2q1';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>
	<header>
		<?php include 'user_header.php' ?>
	</header>
	<br>
	<div class="container w3-black w3-round-xlarge"><br><br>
		<br>
		<?php
		require "config.php"; 
		$user = $_SESSION['user'];
		$query = "SELECT * FROM `members` WHERE `member_id` = '$user'  ";
		$outline = @mysqli_query ($conn, $query); // Run the query
		if ($outline) { // If the query ran OK, display the records
			          // Fetch and print all the records
		              while ($row = mysqli_fetch_array($outline, MYSQLI_ASSOC)){ ?>
		
		<p>Welcome: <?php echo $row ['username']; ?> </p>
		<p>Investment Status:<span class="text-red"> <?php echo $row ['status']; ?> </span></p>
		<br>
		<div class="card-columns">
		  <div class="card bg-warning w3-round-xxlarge">
		    <div class="card-body text-center">
		      <i style='font-size:54px; color: white;' class='fas'>&#xf0ae;</i>
		      <h3 class="card-text w3-large">Deposit:</h3>
		      <i style='font-size:30px' class='fas'>&#xf155;</i><span class="w3-xlarge"><?php echo $row ['deposit']; ?></span>
		      <li><a style="font-size: 13px;" class="btn btn-success " href="deposit.php">Make a deposit</a></li>
		    </div>
		  </div>
		  <div class="card bg-warning w3-round-xxlarge">
		    <div class="card-body text-center ">
		      <i style='font-size:54px; color: white;' class='fas'>&#xf1ec;</i>
		      <h3 class="card-text w3-large">Package</h3>
		      <span class="w3-large"> <?php echo $row ['current_investment']; ?>
		      <li><a style="font-size: 13px;" class="btn btn-success " href="investment_programs.php">Choose an Investment package</a></li>	
		      </span>
		    </div>
		  </div>
		  <div class="card bg-warning w3-round-xxlarge">
		    <div class="card-body text-center">
		      <i style='font-size:54px; color: white;' class='fas'>&#xf24e;</i>
		      <h3 class="card-text w3-large">Balance:</h3>
		      <i style='font-size:30px' class='fas'>&#xf155;</i><span class="w3-xlarge"> <?php echo $row ['total']; ?></span>
		      <li><a style="font-size: 13px;" class="btn btn-success " href="withdraw.php">Request a Withdrawal</a></li>
		    </div>
		  </div>
			
		</div>
		<?php } mysqli_free_result ($outline); // Free up the resources
		} else { // If it did not run OK
		// Error message
		echo '<p class="error">The record could not be retrieved. We apologize 
		for any inconvenience.</p>';
		// Debugging message
		echo '<p>' . mysqli_error($conn) . '<br><br>Query: ' . $query . '</p>';
		}// End of if ($result). Now display the total number of records/houses
?> 
		
	    <br><br><br><br>
	    <p class="w3-center w3-small">Start Investing with our various investment plans <a class="btn btn-success" href="investment_programs.php"> Click Here! </a></p>
	    <br><br>
         <!-- TradingView Widget BEGIN -->
<div class="container">
<!-- Cryptocurrency Price Widget --><script>!function(){var e=document.getElementsByTagName("script"),t=e[e.length-1],n=document.createElement("script");function r(){var e=crCryptocoinPriceWidget.init({base:"USD,EUR,CNY,GBP",items:"BTC,ETH,LTC,XMR,DASH",backgroundColor:"343A40",streaming:"1",rounded:"1",boxShadow:"1",border:"1"});t.parentNode.insertBefore(e,t)}n.src="https://co-in.io/widget/pricelist.js?items=BTC%2CETH%2CLTC%2CXMR%2CDASH",n.async=!0,n.readyState?n.onreadystatechange=function(){"loaded"!=n.readyState&&"complete"!=n.readyState||(n.onreadystatechange=null,r())}:n.onload=function(){r()},t.parentNode.insertBefore(n,null)}();</script><a href="https://currencyrate.today/" rel="noopener" target="_blank">CurrencyRate.Today</a><!-- /Cryptocurrency Price Widget -->
</div>
		
	</div>

	<br>


	<footer>

		<?php include 'user_footer.php' ?>
		
	</footer>
	
</body>
</html>