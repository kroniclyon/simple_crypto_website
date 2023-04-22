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
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<title></title>
</head>
<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.overlay { 
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 18%;
  width: 100%;
  text-align: center;
  margin-top: 15px;
}

.overlay a {
  padding: 4px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
<body>
  <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,2010,5426,1839,4687,9891,7887,1958,2873,6508,2759,10905,12137,8700" currency="USD" theme="dark" transparent="false" show-symbol-logo="true"></div>
  <header class="container-fluid w3-border-bottom bg-black">
  <div class="rows">
    <div class="col-sm-3">
      <a href="../index.php"><img class="rounded" src="../logo/logo121.png" width="100px" height="100px" style="margin-bottom:5px; margin-top: 10px;";></a>


</div>

    

</div><br><br>    
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="../index.php">Home</a>
    <a href="../about-us.php">About Us</a>
    <a href="../contact-us.php">Contact Us</a>
    <a href="../representative.php">Representatives</a>
    <a href="../terms.php">Terms of Use</a>
    <a href="../privacy.php">Privacy Policy</a>
    <a href="../faq.php">F.A.Q</a>
    <a href="../testimonials.php">Testimonials</a>
    <a href="user_registration.php">Register an Account</a>
    <a href="user_login.php">Login an Account</a>
    
  </div>
  
</div>
<span class="pull-right text-white" style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>
     

  </header>

   <div id="google_translate_element"></div>
 <script type="text/javascript">
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>