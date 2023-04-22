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
<title>Withdrawal Confirmation</title>
</head>
<style>
body{
	background: url(../logo/background3.jpg);
}



</style>

<body>
	<header>
		<?php include 'user_header.php' ?>
	</header>
	<br>
  <div style="margin: 40px; border: 1px solid black; border-radius: 40px;">
  <center class= " bg-white text-dark">
    
    <h3 class="jumbotron bg-warning"><span style="size: 100px;">&#9888;</span>INSUFFICIENT GAS</h3>
    <br>
    <p class="w3-large">Dear Esteemed investor, You do not have sufficient gas fee to process this transaction. Please top up & try again.</p>
    <span style="margin: 10px;" class=" bg-light">To top up gas fee, click on the continue button below, else click on back, to return to previous page.</span><br><br>

    <a href="withdraw.php" class="btn btn-danger btn-lg">Go Back</a>
    <a href="#" class="btn btn-success btn-lg">Continue</a>
    <br><br><br><br>
  </center>

</div>
  <br>
   


	<footer>

		<?php include 'user_footer.php' ?>
		
	</footer>
	
</body>
</html>