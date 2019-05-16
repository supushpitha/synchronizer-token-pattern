<?php

require_once 'token.php';


$val = $_POST["token"];



if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['SesT'])){
		echo "<h2> <center> Valid request:  ".$_POST['updatepost']."</center></h2>";		
	}
	else{
	   echo "<h2> Invalid request(csrf token does not match) :  ".$_POST['updatepost']."</h2>";
	}
}
?>
<html>
 <body background="back.jpg">
</html>