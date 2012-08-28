<?php
$title="Log In";
include_once "/home/dreams19/public_html/functions.php";
if(loggedIn())
{
	header("Location: http://www.dreamslinked.com/main.php");
	exit();
}

$loginOK = FALSE;
if ($_POST['login'])
{
	// username and password sent from form 
	$myusername=$_POST['myusername']; 
	$mypassword=$_POST['mypassword'];
	$remember=$_POST['remember'];
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	
	$myusername = strip_tags($myusername);
	$mypassword = strip_tags($mypassword);
	
	$myusername = eregi_replace("`", "", $myusername);
	$mypassword = eregi_replace("`", "", $mypassword);
	
	if ($myusername&&$mypassword)
	{
		connect("snetwk","user","july17th2010");
		$login=mysql_query("SELECT * FROM member WHERE email='$myusername'");
		while($row = mysql_fetch_assoc($login))
		{
			$reg = $row['emailActivated'];
			if($reg == 1)
			{
				$db_pass = $row['pass'];
				if(sha1(md5($mypassword))==$db_pass)
				{
					$loginOK = TRUE;
					mysql_query("UPDATE member SET last_log_date=now() WHERE email='$myusername'");
				}
				if ($loginOK == TRUE)
				{
					if ($remember=="on")
					{
						setcookie("email",$myusername, time()+7200);
						setcookie("pass",$mypassword, time()+7200);
					}
					else if ($remember=="")
					{
						$_SESSION['email']=$myusername;
						$_SESSION['pass']=$mypassword;
					}
					header("Location: http://www.dreamslinked.com/main.php");
					exit();
				}
				else
				{
				$dont = 1;
				include_once "/home/dreams19/public_html/includes/_before.php";
				echo '<h1 align="center">You have inserted an incorrect password combination</h1>';
				include_once "/home/dreams19/public_html/includes/_after.php";
				die();
				}
			}
			else
			{
			$dont = 1;
			include_once "/home/dreams19/public_html/includes/_before.php";
			echo '<h1 align="center">Please activate your account before logging in.</h1>';
			include_once "/home/dreams19/public_html/includes/_after.php";
			die();
			}
		}
		
	}
	else
	{	
		$dont = 1;
		include_once "/home/dreams19/public_html/includes/_before.php";
		echo '<h1 align="center">Please enter both your Email and Password</h1>';
		include_once "/home/dreams19/public_html/includes/_after.php";
		die();
	}
}
