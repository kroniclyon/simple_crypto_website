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
<title>Contact Seller</title>
</head>
<style>
body{
  background: url(../logo/background3.jpg);
  font-size: 16px;
  font-family: Lucida Sans Unicode, Lucida Grande, sans-serif; 
}
table th{
  font-size: 30px;
  

}
table tr{
  margin: 10px;
  font-weight: bold;

}
#hush{
  font-weight: bold;
  color: green;
  font-style: italic;
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
<!--End of Tawk.to Script-->
<body>

  <header>

    <?php include 'user_header.php' ?>
    
  </header>
<div class="container">
  <h1 class="jumbotron w3-center bg-info">Contact the Seller </h1>
<div class ="rows"><br>
<div class="col-sm-6" style="width: 600px; height:335px; margin-top: 20px; background-color: #FAFAFA; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:335px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;margin: 0;width: 400px;padding:1px;padding: 0px; margin: 0px;"><div style="height:315px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=converter&theme=light" width="400" height="310px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>

</div>
<div style=" margin-left: 20px;" class="col-sm-6 bg-white">
  <?php
    require "config.php";
    if (isset($_GET['id'])) {
    // Connect to the MySQL database   
    $id =  $_GET['id'];  
    $query = "SELECT * FROM `btc_sellers` WHERE `id` = '$id'";
    $outline = @mysqli_query ($conn, $query); // Run the query
    if ($outline) { // If the query ran OK, display the records
                // Fetch and print all the records
                  while ($row = mysqli_fetch_array($outline, MYSQLI_ASSOC)){ ?>
  <table class="table table-striped table-hover">
    <thead>
      <tr class="">
        <th class="w3-text-center w3-large">Advertisement Details</th>
      </tr>
    </thead>
    <tbody>
      <tr class="w3-large">
        <td>BUYING FROM: </td>
        <td><?php echo $row['username']?></td>
      </tr>
      <tr class="w3-large">
        <td>PRICE: </td>
        <td>
           <?php
          $url = "https://bitpay.com/api/rates";
          $json = file_get_contents($url);
          $data = json_decode($json, TRUE);
          $rate = $data[0]["rate"];
          $rate1 = $data[1]["rate"];
          $rate2 = $data[2]["rate"];
          $rate145 = $data[145]["rate"];
          ?>
          <?=$rate2?> USD/BTC


        </td>
      </tr>
      <tr class="w3-large">
        <td>Maximum Bitcoin Units: </td>
        <td><?php echo $row['btc_units']?></td>
      </tr>
      <tr class="w3-large">
        <td>Country: </td>
        <td><?php echo $row['country']?></td>
      </tr>
      <tr class="w3-large">
        <td>Payment Method: </td>
        <td><?php echo $row['payment_option']?></td>
      </tr>
      <tr class="w3-large">
        <td>Payment Window: </td>
        <td>20 Minutes</td>
      </tr>

    </tbody>
  </table>
  <span id="hush" class="w3-large">Contact <?php echo $row['username']?> :    </span>
  <a href="https://wa.me/<?php echo $row['phone_number']?>"><i class="fa fa-whatsapp w3-text-green w3-border-rounded " style="font-size: 30px; padding: 3px;"></i></a><br><br>
  <?php } mysqli_free_result ($outline); // Free up the resources
    } else { // If it did not run OK
    // Error message
    echo '<p class="error">The record could not be retrieved. We apologize 
    for any inconvenience.</p>';
    // Debugging message
    echo '<p>' . mysqli_error($conn) . '<br><br>Query: ' . $query . '</p>';
    }// End of if ($result). Now display the total number of records/houses
  }
?>
  
</div>
</div><br><br>



<br><br>
  <br>


  <footer>

    <?php include 'user_footer.php' ?>
    
  </footer>
  
</body>
</html>