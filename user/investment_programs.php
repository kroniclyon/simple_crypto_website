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
<link rel="shortcut icon" href="../logo/logo121.png" /> 
<title>Investment Programs</title>
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
	<div class="container bg-white "><br><br>
		<h2 class="text-center display-1 text-warning">Investment Plans</h2><br><br>

   <div class="row slideanim">
    <div class="col-sm-3 col-xs-12">
      <div class=" panel panel-info text-center">
        <div class="panel-heading ">
          <h1 class="">Basic Plan</h1>
          <p><strong>100% After 3 Hours</strong></p>
        </div>
        <div class="panel-body">
          <p><strong>Earnings: MON-SUN </strong></p>
          <p><strong>Mininum Deposit: $1000</strong></p>
          <p><strong>Enhanced Security</strong></p>
          <p><strong>Maturity: 3 Hours</strong></p>
        </div>
        <div class="panel-footer">
          <a class=" display-3 btn btn-info" href="deposit.php"><b>INVEST NOW</b></a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-3 col-xs-12">
      <div class=" panel panel-info text-center">
        <div class="panel-heading ">
          <h1>Premium Plan</h1>
          <p><strong>120% After 3 Hours</strong></p>
        </div>
        <div class="panel-body">
          <p><strong>Earnings: MON-SUN </strong></p>
          <p><strong>Mininum Deposit: $2000</strong></p>
          <p><strong>Enhanced Security</strong></p>
          <p><strong>Maturity: 3 Hours</strong></p>

        </div>
        <div class="panel-footer">
          <a class=" text-large btn btn-info" href="deposit.php"><b>INVEST NOW</b></a>
        </div>
      </div>      
    </div>       
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-info text-center">
        <div class="panel-heading ">
          <h1>Deluxe Plan</h1>
          <p><strong>150% After 3 Hours</strong></p>
        </div>
        <div class="panel-body">
          <p><strong>Earnings: MON-SUN </strong></p>
          <p><strong>Mininum Deposit: $3000</strong></p>
          <p><strong>Enhanced Security</strong></p>
          <p><strong>Maturity: 3 Hours</strong></p>
        </div>
        <div class="panel-footer">
          <a class=" display-3 btn btn-info" href="deposit.php"><b>INVEST NOW</b></a>
        </div>
      </div>      
    </div>
     <div class="col-sm-3 col-xs-12">
      <div class="panel panel-info text-center">
        <div class="panel-heading ">
          <h1>Platinum Plan</h1>
          <p><strong>200% After 3 Hours</strong></p>
        </div>
        <div class="panel-body">
          <p><strong>Earnings: MON-SUN </strong></p>
          <p><strong>Mininum Deposit: $4000</strong></p>
          <p><strong>Enhanced Security</strong></p>
          <p><strong>Maturity: 3 Hours</strong></p>
        </div>
        <div class="panel-footer">
          <a class=" display-3 btn btn-info" href="deposit.php"><b>INVEST NOW</b></a>
        </div>
      </div>      
    </div>    
		
	</div>
</div>

	<br><br>
	<br>


	<footer>

		<?php include 'user_footer.php' ?>
		
	</footer>
	
</body>
</html>