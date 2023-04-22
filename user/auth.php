<?php
session_start();
if(isset($_SESSION['user'])){
        
}else{
	
header("location:user_login.php?msg= No Access");
}
?>



