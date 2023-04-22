<?php

 include 'login.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="shortcut icon" href="../logo/logo121.png" /> 
<title>Login</title>
</head>
<style>
  body{
    background: url(../logo/background.jpg);
  }
	#login{ 
		font-family: "Trebuchet MS", Helvetica, sans-serif;
    font-size: 15px;
    font-weight: lighter;

	}
  #login input{
    height: 40px;
    font-size: 15px;
  }
  * {
  margin: 0;
  padding: 0;
}

.loader {
  display: none;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
}

.loading {
  border: 2px solid #ccc;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  border-top-color: #1ecd97;
  border-left-color: #1ecd97;
  animation: spin 1s infinite ease-in;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}
  </style>
  <!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61d57d44b84f7301d3297282/1fokv2lec';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>
<div><br><br>
	<?php include "reg_header.php" ?>
</div>
<br><br><br><br>
<div class="container bg-white  w3-large w3-border w3-round"><br><br>
  <h3 class="jumbotron w3-large text-center"> Enter Your Login details </h3>
  <form class="form-horizontal" action="" method="post">
    <div class="form-group form-group-lg">
      <label class="control-label col-sm-2 text-black" for="email">Email:</label>
      <div class="col-sm-9">
        <input type="email" class="form-control input-lg" id="email" placeholder="Enter email" name="email">
        <span style="font-size: 12px;" class="w3-text-red">*<?php echo "$emailErr"; ?> </span>
      </div>
    </div>
    <div class="form-group form-group-lg">
      <label class="control-label col-sm-2 text-black" for="pwd">Password:</label>
      <div class="col-sm-9">         
        <input type="password" class="form-control input-lg" id="id_password" autocomplete="current-password" placeholder="Enter password" name="password">
        <input class="text-sm" type="checkbox" onclick="myFunction()">
<script type="text/javascript">
         function myFunction() {
  var x = document.getElementById("id_password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
      </div>
    </div>
    <div class="form-group form-group-lg">        
      <div class="col-sm-offset-2 col-sm-10">
        <button onclick="spinner()" type="submit" class="btn btn-block btn-primary w3-large " value="submit">Log in</button>
        <p class="w3-text-red w3-center"><?php echo "$error_msg";?></p>
        <div class="loader">
        <div class="loading">

      </div>

</div>
<h5 class="text-center display-5">Don't have an account.. <a style="font-size: 16px;" class="btn btn-lg btn-warning " href="user_registration.php">Click to Register</a></h5>

<script type="text/javascript">
    function spinner() {
        document.getElementsByClassName("loader")[0].style.display = "block";
    }
</script> <br><br>
  
      </div>
    </div>


    <br><br>
  </form>

</div><br><br><br>
  

  
</div>

    



<br><br>

<footer>
	<?php include "reg_footer.php" ?>
</footer>
</body>
</html>