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
  
      <?php
    require "config.php"; 
    $user = $_SESSION['user'];
    $query = "SELECT * FROM `members` WHERE `member_id` = '$user'  ";
    $outline = @mysqli_query ($conn, $query); // Run the query
    if ($outline) { // If the query ran OK, display the records
                // Fetch and print all the records
                  while ($row = mysqli_fetch_array($outline, MYSQLI_ASSOC)){ ?>

  <div class="container">


    <div class="container bg-info"><br><br>
 <div class="">
                          <div class="member-container">
                            <div class="member-right">
                              <h3 class="text-center display-5 ">Fund Bitcoin (BTC) Address</h3>
                              <p style="font-size: 14px;" class="text-center text-white font-weight-bold" >Once we confirm your payment, your account will be funded instantly.</p><br>
                              <center><img class="img-thumbnail" src="add/wallet_qr_code.jpg"></center><br>
                              
                              <center>
                                                             </center>

                              <div class="col-md-8 col-md-offset-2">
                                <div class="input-group input-group-lg">
                                  <input id="myInput" type="text" class="form-control " readonly="readonly" value="3L6D7ySXFwgpdT5AY7eWc6HhD16pZy6MFR" style="color: #000; height: 45px;  font-weight: bold;">
                                  <div class="input-group-btn">
                                    <button onclick="this.innerHTML=&#39;Copied&#39;; this.classList.remove(&#39;btn-success&#39;);this.classList.add(&#39;btn-warning&#39;);" class="btn btn-success" type="button" id="copy-button" data-toggle="tooltip" data-placement="button" data-clipboard-target="#myInput" title="Copy to Clipboard">Copy</button>
                                  </div>
                                </div>
                              </div>
                              <div style="margin-top: 80px;">
                                <center>
                                  <a class="btn btn-warning" href="bitcoin:3L6D7ySXFwgpdT5AY7eWc6HhD16pZy6MFR" class="btn btn-success btn-lg mb-20" style="font-size: 17px; ">Pay Using BTC Wallet App</a>
                                </center>
                              </div>
                            </div><br><br><br><br><h4><center>For other payment Method, Please ontact our Online Support Team via the Live Chat</center></h4>
                          <!-- row -->
                          </div>
                          <center class="container">
                        <p class="display-5 font-weight-bold text-warning">Need to Buy Bitcoin? Contact our trusted vendors: </p>
                        <li><a href="https://paxful.com/" target="_blank">Paxful</a></li>
                        <li><a href="https://localbitcoins.com/" target="_blank">Localbitcoins</a></li>
                        <li><a href="https://luno.com/" target="_blank">Luno</a></li>
                        <li><a href="https://coinbase.com/" target="_blank">Coinbase</a></li>
                        <li><a href="https://binance.com/" target="_blank">Binance</a></li>
                        <li><a href="https://remitano.com/" target="_blank">Remitano</a></li>
                        <li><a href="https://blockchain.com/" target="_blank">Blockchain</a></li>
                        
                      </center>
                        </div>
                      </div>

                    </div>
      
    </div><br>
    <div class="container bg-info"><br><br><br>
      <h2 class="display-3 text-center text-weight-bolder text-white">Complete investment</h2><br><br>
      <form action="#" method="post" enctype="multipart/form-data">
        <?php include "deposit_action.php"; ?>

      <div class="form-group">
        <label class="w3-large" for="btc_address">Bitcoin address:</label>
        <input type="text" class="form-control form-control-lg" name="bitcoin_add" placeholder="Enter Bitcoin address:" id="pwd">
        <span class="w3-small w3-text-red"> *<?php echo $bitcoin_addErr;?></span>
      </div>
      <div class="form-group">
        <label class="w3-large" for="">Screenshot of Payment Slip:</label>
        <input type="file" class="form-control form-control-lg" placeholder="Enter Photo of Payment " name="image">
        <span class="w3-small w3-text-red"> *<?php echo $location5Err;?></span>
      </div>
       <div class="form-group">
        <label class="w3-large" for="package">Choose Package:</label>
        <select class="form-control form-control-lg" id="package" name="package">
          <option value="">Choose a Referred Package:</option>
          <option value="Basic Plan">Basic Plan</option>
          <option value="Premium plan">Premium Plan</option>
          <option value="Deluxe Plan">Deluxe Plan</option>
          <option value="Deluxe Plan">Platinum Plan</option>
        </select>
      </div> 
      <div class="form-group">
        <label class="w3-large" for="email">Email address:</label>
        <?php
        $email = $row["email_add"]; ?>
        <input type="email" class="form-control form-control-lg" name="email" placeholder="Enter Email address:" id="pwd" value="<?php echo $email;?>" readonly ="readonly">
      <?php } mysqli_free_result ($outline); // Free up the resources
    } else { // If it did not run OK
    // Error message
    echo '<p class="error">The record could not be retrieved. We apologize 
    for any inconvenience.</p>';
    // Debugging message
    echo '<p>' . mysqli_error($conn) . '<br><br>Query: ' . $query . '</p>';
    }// End of if ($result). Now display the total number of records/houses
?> </div><br>
      <button type="submit" class="btn btn-warning text-center w3-large btn-lg btn-block">Complete Payment</button><br><br>

      
      </form>
      
    </div>
    
  </div>

	
	<br><br>
	<br>


	<footer>

		<?php include 'user_footer.php' ?>
		
	</footer>
	
</body>
</html>