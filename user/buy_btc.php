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
<title>Buy Bitcoin</title>
</head>
<style>
body{
	background: url(../logo/background3.jpg);
}
table{
  font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
  font-size: 16px;
  text-align: center;
  font-weight: bold;

}
table tbody tr td{
  margin: 10px;
}
.checked {
  color: orange;
}



</style>
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
	<header>
		<?php include 'user_header.php' ?>
	</header>
	<br>
  <div class="container">
    <h2 class="jumbotron w3-large bg-info w3-center">Buy Bitcoin From Our Trusted Sellers</h2>
    <div style="height:560px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=light&coin_id=859&pref_coin_id=1505" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>
    
  </div><br>


<br>
<div class="container">
  <h2 class="jumbotron w3-center w3-large">List of Sellers</h2>
        <?php
    require "config.php"; 
    $query = "SELECT * FROM `btc_sellers`";
    $outline = @mysqli_query ($conn, $query); // Run the query
    if ($outline) { // If the query ran OK, display the records
                // Fetch and print all the records
                  while ($row = mysqli_fetch_array($outline, MYSQLI_ASSOC)){ ?>
    <table class="table table-borderless bg-white ">
    <tbody class=" w3-border-left">
      <tr class="w3-border-left">
        <td><?php echo $row ['username']; ?><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>





        </td>
        <td class="w3-text-orange">Maximum: <?php echo $row ['btc_units']; ?><br><span class="w3-text-black">
          <?php
          $url = "https://bitpay.com/api/rates";
          $json = file_get_contents($url);
          $data = json_decode($json, TRUE);
          $rate = $data[0]["rate"];
          $rate1 = $data[1]["rate"];
          $rate2 = $data[2]["rate"];
          $rate145 = $data[145]["rate"];
          ?>
          1 BTC/USD: <?=$rate2?>
          <br>
          




        </span></td>
        <td><?php echo $row ['country']; ?></td>
        <td><?php echo $row ['payment_option']; ?></td>
        <td><a href="contact_btc_seller.php?id=<?php echo $row ['id']; ?>" class="btn btn-outline-warning w3-large" role="button">BUY</a></td>
      </tr>
      <tr>
    </tbody>
  </table>
  <?php } mysqli_free_result ($outline); // Free up the resources
    } else { // If it did not run OK
    // Error message
    echo '<p class="error">The record could not be retrieved. We apologize 
    for any inconvenience.</p>';
    // Debugging message
    echo '<p>' . mysqli_error($conn) . '<br><br>Query: ' . $query . '</p>';
    }// End of if ($result). Now display the total number of records/houses
?>
  
</div>

	
	<br><br>
	<br>


	<footer>

		<?php include 'user_footer.php' ?>
		
	</footer>
	
</body>
</html>