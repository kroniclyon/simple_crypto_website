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
<link rel="shortcut icon" href="logo/logo121.png" /> 
<title>Contact Us</title>
</head>
<style>
body{
  background: url(logo/background.jpg);
}
#fname, #subject, #email, #buttn{
  height: 40px;
  font-size: 17px;
}
#comments{
  height: 100px;
  font-size: 17px;
}

</style>

<body>

<header>
	<?php include "home_header.php" ?>
</header>
<br>
<div id="content" class="container-fluid">
  <h1 class="w3-center w3-xxlarge w3-text-light-blue">Contact Us</h1><br>
 <div class="container bg-info"><br><br>
  <p>If you would like to ask any question not answered in the FAQ section, or need help setting up or managing your account, please use the form below to get in touch with us.</p>
  <p>We are available 24 hours a day, seven days a week, You can also contact us by email info@btcinvesttrade.com</p>
  <p>Feel free to contact us for a quick reply. Our customer service representatives are always happy to answer your questions, provide more information or assist in any other way. Please do not hesitate to contact us.</p><br><br>
   
 </div><br>

 <div class="container w3-border w3-border-light-blue">
  <div class="row">
    <div class="col-sm-8"><br>
      <p class="w3-text-white"><span class="glyphicon glyphicon-map-marker w3-text-blue w3-xlarge"> </span>Alpha Towers, Rue Du Quesne Montreal, Quebec, Canada.</p>

      <p class="w3-text-white"><span class="glyphicon glyphicon-phone w3-text-blue w3-large"></span> +(44) 7985158735 </p>

      <p class="w3-text-white"><span class="glyphicon glyphicon-envelope w3-text-blue w3-large"></span> support@vaultagoinc.org</p>

      
    </div>
    <div class="col-sm-4"><br>
      <h3 class="w3-center w3-text-blue">Administrative Office</h3>
      <img class="img-responsive" src="logo/office_building-logo2.jpg"><br>
      
    </div>
    
  </div>
  
   
 </div>
 </div><br>
  <div class="container w3-border w3-border-light-blue"><br>
    <h2 class="w3-center w3-text-blue">Contact Form</h2><br>
    <div id="form">
      <form method="post" action="">
        <?php include "contact_action.php" ?>
        <div class="alert alert-info w3-large">
          <strong>Kindly fill in the following information and make your comment, Compliants or Enquiry.</strong> 
        </div>
        
        <div class="col-sm-6 form-group  ">
              <input class="form-control" id="fname" name="fname" placeholder="Please Enter Your Full Name" type="text" value="" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder=" Enter Your Email Address" type="email" value="" required>
            </div>
            <div class=" col-sm-6 form-group">
              <input class="form-control" id="subject" name="subject" placeholder="Enter a Subject" type="text" value="" required>
            </div>
            <div class="col-sm-10 form-group">
             <textarea class=" form-control" id="comments" name="comment" placeholder="Place Your Comment or Enquiries" rows="4"></textarea>
            </div><br><br>
           <div class="col-sm-12 form-group">
                <button id="buttn" class="btn btn-default pull-right btn btn-success " type="submit">Send Your Message </button>
           </div><br><br>
      </form>
    
  </div>
   
 </div>

  


<br><

<footer>
	<?php include "home_footer.php" ?>
</footer>
<script type='text/javascript'>
var onWebChat={ar:[], set: function(a,b){if (typeof onWebChat_==='undefined'){this.ar.
push([a,b]);}else{onWebChat_.set(a,b);}},get:function(a){return(onWebChat_.get(a));},
w:(function(){ var ga=document.createElement('script'); ga.type = 'text/javascript';
ga.async=1;ga.src=('https:'==document.location.protocol?'https:':'http:') + 
'//www.onwebchat.com/clientchat/57b049abe02354eaf64fbcfc2f048fea';var s=
document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})()}
</script>
</body>

</html>