<?php    
function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    }else{
        return FALSE;
    }
}
function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    }else{
        return FALSE;
    }
}
 
$fnameErr =  $subjectErr = $emailErr = $commentErr = "";
$fname =  $email = $subject = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["fname"])) {
		$fnameErr = "Please Enter your fullname";
	}else{
        $fname = filterString($_POST["fname"]);
        if($fname == FALSE){
            $fnameErr = 'Please Enter a valid Full Name.';
        }
    }
    if(empty($_POST["email"])){
        $emailErr = 'Please enter your email address.';     
    }else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = 'Please enter a valid email address.';
        }
    }
    if (empty($_POST["subject"])) {
    	$subjectErr = "Please Enter the Subject of this Message";
    } else {
    	$subject = filterString($_POST["subject"]);
    	
    }
    if (empty($_POST["comment"])) {
    	$commentErr = "Please Enter your Message ";

    }else{
    	$comment = filterString($_POST["comment"]);
    	if ($comment == FALSE) {
    		$commentErr = "Enter your valid message ";
    	}
    }

   if (empty($fnameErr) && empty($subjectErr) && empty($emailErr) && empty($commentErr)){
       $formcontent=" From: ".$fname." \r\n  Message: $comment";
		$recipient = "support@vaultagoinc.org";
		$subject = "New Enquiry";
		$mailheader = 'From: '.$email."\r\n".
		'Reply-To: '.$email."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		if(mail($recipient, $subject, $formcontent, $mailheader)){?>
            <div class="alert alert-success alert-dismissible">
              <strong>Message Sent Successful!</strong> An admin will respond to your enquiry shortly! 
              <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div>
       <?php }else{
            echo '<p class="error">Unable to send email. Please try again!</p>';
        }

  }
    
}
?>