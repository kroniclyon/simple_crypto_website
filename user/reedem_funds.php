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
<title>Deposit Portal</title>
</head>
<style>
body{
	background: url(../logo/background3.jpg);
}
li{
  list-style-type: square;
  color: white;
}

li a{
  text-decoration: none;
  font-size: 16px;
  color: white;
  font-family: "Trebuchet MS", Helvetica, sans-serif;
  font-weight: bold;


}
li a:hover{
  color: red;
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
  <div style="margin: 20px; border: 2px solid black; border-radius: 5px;" class="container bg-white">
   <br> <h3 class="text-center" style="">Enter Code to Redeem Bonus</h3><br>
    <form>
      <div style="margin: 5px;" class="row">
      <div class="col-sm-7 input-group mb-3 input-group-lg">
      <input class="form-control" type="text" name="" placeholder="enter code">
    </div>
    <div class="col-sm-3">
      <button class="btn btn-lg btn-warning">Redeem Bonus</button>
    </div>
    </div>
    </form>
    <br><br>
  </div>
	<br>


	<footer>

		<?php include 'user_footer.php' ?>
		
	</footer>
	
</body>
</html>