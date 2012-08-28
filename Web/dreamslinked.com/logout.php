<?php
include_once '/home/dreams19/public_html/functions.php';
if(admin())
{
	session_start();
	$keepe = $_SESSION['email'];
	$keepp = $_SESSION['pass'];
	//destroy session
	session_destroy();
	session_start();
	$_SESSION['email'] = $keepe;
	$_SESSION['pass'] = $keepp;
	header("Location: http://www.dreamslinked.com/main.php");
}
else
{
	session_start();
	//destroy session
	session_destroy();
	
	//unset cookies
	setcookie('email','',time()-7200);
	setcookie('pass','',time()-7200);

	header("Location: http://www.dreamslinked.com/main.php");
}
?>