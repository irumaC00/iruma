<?php
session_start();

////////////////////////////////////////////////////////////////////////////////////////////////////
//////Connect//Connect//Connect//Connect//Connect//Connect//Connect//Connect//Connect//Connect//////
//////Connect//Connect//Connect//Connect//Connect//Connect//Connect//Connect//Connect//Connect//////
//////Connect//Connect//Connect//Connect//Connect//Connect//Connect//Connect//Connect//Connect//////
//////Connect//Connect//Connect//Connect//Connect//Connect//Connect//Connect//Connect//Connect//////
////////////////////////////////////////////////////////////////////////////////////////////////////

// Place db host name. Sometimes "localhost" but 
// sometimes looks like this: >>      ???mysql??.someserver.net
$db_host = "localhost";
// Place the username for the MySQL database here
$db_username = "dreams19_snetwk"; 
// Place the password for the MySQL database here
$db_pass = "july17th2010"; 
// Place the name for the MySQL database here

// Run the connection here 
mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");

function connect($db, $db_user, $db_pass)
{
    $db_host = "localhost";
    // Place the username for the MySQL database here
    $db_username = "dreams19_" . $db_user; 
    // Place the name for the MySQL database here
    $db_name = "dreams19_" . $db;
    $db_host = mysql_real_escape_string($db_host);
    $db_username = mysql_real_escape_string($db_username);
    $db_name = mysql_real_escape_string($db_name);
    
    // Run the connection here 
    if(@mysql_connect("$db_host","$db_username","$db_pass"))
    {
        if(@mysql_select_db("$db_name"))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
            die ("no database");
        }
    }
    else
    {
        return FALSE;
        die ("could not connect to mysql");
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//////
//////loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//////
//////loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//////
//////loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//loggedIn//////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function loggedIn()
{
    if (isset($_SESSION['email'])||isset($_COOKIE['email']))
    {
        $loggedIn = TRUE;
        return $loggedIn;
    }
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//////
//////admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//////
//////admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//////
//////admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//admin//////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function admin()
{
    if (isset($_SESSION['admin']))
    {
        $loggedIn = TRUE;
        return $loggedIn;
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////linked//linked//linked//linked//linked//linked//linked//linked//linked//linked//linked//linked/////////
///////linked//linked//linked//linked//linked//linked//linked//linked//linked//linked//linked//linked/////////
///////linked//linked//linked//linked//linked//linked//linked//linked//linked//linked//linked//linked/////////
///////linked//linked//linked//linked//linked//linked//linked//linked//linked//linked//linked//linked/////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function linked($subjectID, $userID, $block)
{
    $datetime=strftime("%Y/%m/%d %H:%M:%S"); //date time
	///////////////////////////////////////////////////////////////////////
    $block = eregi_replace("`", "", $block);
    $block = eregi_replace("'", "", $block);
    $block = eregi_replace(",", "", $block);
    $userID = eregi_replace("`", "", $userID);
    $userID = eregi_replace("'", "", $userID);
    $userID = eregi_replace(",", "", $userID);
    $subjectID = eregi_replace("`", "", $subjectID);
    $subjectID = eregi_replace("'", "", $subjectID);
    $subjectID = eregi_replace(",", "", $subjectID);
    $subjectID = mysql_real_escape_string($subjectID);
    $userID = mysql_real_escape_string($userID);
    $block = mysql_real_escape_string($block);
	//Sanitizing Variables
	///////////////////////////////////////////////////////////////////////
	$datetime = strftime("%Y/%m/%d %H:%M:%S"); //date time
	connect("friends","user","july17th2010");
	$sql = "SELECT * FROM friends WHERE subjectID='$subjectID' AND userID='$userID'";
	$find = mysql_query($sql);
	$result = mysql_num_rows($find);
	if($result == "1")//if you can find this, either block or do nothing
	{
		if($block == "1")
		{
			$block_sql = "UPDATE friends SET block='1' WHERE subjectID='$subjectID' AND userID='$userID' AND updateLog'$datetime'";
			$blocked = mysql_query($block_sql);
			return TRUE;
			exit();
			//sql line for blocking row
		}
		elseif($block == "0")
		{
			$delete_sql = "DELETE FROM friends WHERE subjectID='$subjectID' AND userID='$userID'";
			$deleted = mysql_query($delete_sql);
			return TRUE;
			exit();
			//sql line for dropping row
		}
		else
		{
			return FALSE;
			exit();
		}
	}
	elseif($result == "0")
	{
		$sql="INSERT INTO $type (subjectID, userID, logTime, updateLog)
		VALUES('$subjectID', '$userID', '$datetime', '$datetime')";
		$result = mysql_query($sql);
		if($result)
		{
			return TRUE;
			exit();
		}
		else
		{
			return FALSE;
			exit();
		}
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////inspired//inspired//inspired//inspired//inspired//inspired//inspired//inspired//inspired//inspired//////
//////inspired//inspired//inspired//inspired//inspired//inspired//inspired//inspired//inspired//inspired//////
//////inspired//inspired//inspired//inspired//inspired//inspired//inspired//inspired//inspired//inspired//////
//////inspired//inspired//inspired//inspired//inspired//inspired//inspired//inspired//inspired//inspired//////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function inspired($type, $subjectID, $userID)
{
    $datetime=strftime("%Y/%m/%d %H:%M:%S"); //date time
	///////////////////////////////////////////////////////////////////////
    $type = eregi_replace("`", "", $type);
    $type = eregi_replace("'", "", $type);
    $type = eregi_replace(",", "", $type);
    $userID = eregi_replace("`", "", $userID);
    $userID = eregi_replace("'", "", $userID);
    $userID = eregi_replace(",", "", $userID);
    $subjectID = eregi_replace("`", "", $subjectID);
    $subjectID = eregi_replace("'", "", $subjectID);
    $subjectID = eregi_replace(",", "", $subjectID);
    $type = mysql_real_escape_string($type);
    $userID = mysql_real_escape_string($userID);
    $subjectID = mysql_real_escape_string($subjectID);
	//Sanitizing Variables
	///////////////////////////////////////////////////////////////////////
	$datetime = strftime("%Y/%m/%d %H:%M:%S"); //date time
	if(($type == "comments")||($type == "reply_comments")||($type == "articles")||($type == "messages")||($type == "quotes"))
	{
		connect("inspired","user","july17th2010");
		$sql = "SELECT * FROM $type WHERE subjectID='$subjectID' AND userID='$userID'";
		$find = mysql_query($sql);
		$result = mysql_num_rows($find);
		if($result == "1")//if you can find this, either block or do nothing
		{
			return FALSE;
			exit();
		}
		elseif($result == "0")
		{
			$sql="INSERT INTO $type (subjectID, userID, logTime, updateLog)
			VALUES('$subjectID', '$userID', '$datetime', '$datetime')";
			$result = mysql_query($sql);
			if($result)
			{
				return TRUE;
				exit();
			}
			else
			{
				return FALSE;
				exit();
			}
		}
		else
		{
			return FALSE;
			exit();
		}
	}
	else
	{
		return FALSE;
		exit();
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////notify//notify//notify//notify//notify//notify//notify//notify//notify//notify//notify//notify/////////
///////notify//notify//notify//notify//notify//notify//notify//notify//notify//notify//notify//notify/////////
///////notify//notify//notify//notify//notify//notify//notify//notify//notify//notify//notify//notify/////////
///////notify//notify//notify//notify//notify//notify//notify//notify//notify//notify//notify//notify/////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function notify($type, $subjectID, $userID)//, $message, $dif, $href)
{
    $datetime=strftime("%Y/%m/%d %H:%M:%S"); //date time
	///////////////////////////////////////////////////////////////////////
    $type = eregi_replace("`", "", $type);
    $type = eregi_replace("'", "", $type);
    $type = eregi_replace(",", "", $type);
    $userID = eregi_replace("`", "", $userID);
    $userID = eregi_replace("'", "", $userID);
    $userID = eregi_replace(",", "", $userID);
    $subjectID = eregi_replace("`", "", $subjectID);
    $subjectID = eregi_replace("'", "", $subjectID);
    $subjectID = eregi_replace(",", "", $subjectID);
    $type = mysql_real_escape_string($type);
    $userID = mysql_real_escape_string($userID);
    $subjectID = mysql_real_escape_string($subjectID);
	//Sanitizing Variables
	///////////////////////////////////////////////////////////////////////
	$datetime = strftime("%Y/%m/%d %H:%M:%S"); //date time
	if(($type == "friends")||($type == "comments")||($type == "reply_comments")||($type == "articles")||($type == "messages")||($type == "quotes"))
	{
		connect("snetwk", "user", "july17th2010");
		//$msg_linked = "$first $last has just linked onto $first2 $last2. <a href=\"$href\" id=\"black\">Check it out!</a>";
		//$msg_inspired = "$first $last was inspired by this article <a href=\"$href\" id=\"black\">Check it out!</a>";
		//$new = eregi_replace("_", " ", $type);
		//$msg_new = "A new $new was <a href=\"$href\" id=\"black\">Check it out!</a>";
		$sql = "SELECT * FROM member WHERE emailActivated='1'";
		$find = mysql_query($sql);
		while($result = mysql_fetch_array($find))
		{
			connect("notify", "user", "july17th2010");
			$notify = $result['id'];
			$sql="INSERT INTO $type (notify, subjectID, userID, logTime, updateLog)
			VALUES('$notify', '$subjectID', '$userID', '$datetime', '$datetime')";
			$result = mysql_query($sql);
			if($result)
			{
				connect("snetwk", "user", "july17th2010");
			}
			else
			{
				echo "Failure!!!";
				return FALSE;
				exit();
			}
		}
	}
	else
	{
		echo "Failure!";
		return FALSE;
		exit();
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////notify_org//notify_org//notify_org//notify_org//notify_org//notify_org//notify_org//notify_org/////////
///////notify_org//notify_org//notify_org//notify_org//notify_org//notify_org//notify_org//notify_org/////////
///////notify_org//notify_org//notify_org//notify_org//notify_org//notify_org//notify_org//notify_org/////////
///////notify_org//notify_org//notify_org//notify_org//notify_org//notify_org//notify_org//notify_org/////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
function notify_org($type, $subjectID, $userID, $notify, $on_off)
{
	$datetime=strftime("%Y/%m/%d %H:%M:%S"); //date time
	$type = eregi_replace("`", "", $type);
	$type = eregi_replace("'", "", $type);
	$type = eregi_replace(",", "", $type);
	$userID = eregi_replace("`", "", $userID);
	$userID = eregi_replace("'", "", $userID);
	$userID = eregi_replace(",", "", $userID);
	$notify = eregi_replace("`", "", $notify);
	$notify = eregi_replace("'", "", $notify);
	$notify = eregi_replace(",", "", $notify);
	$subjectID = eregi_replace("`", "", $subjectID);
	$subjectID = eregi_replace("'", "", $subjectID);
	$subjectID = eregi_replace(",", "", $subjectID);
	$type = mysql_real_escape_string($type);
	$userID = mysql_real_escape_string($userID);
	$notify = mysql_real_escape_string($notify);
	$subjectID = mysql_real_escape_string($subjectID);
	//Sanitizing Variables
	if(($type == "comments")||($type == "reply_comments")||($type == "articles")||($type == "messages")||($type == "quotes")||($type == "friends"))
	{
		connect("notify", "user", "july17th2010");
		$get_sql = "SELECT * FROM $type WHERE notify='$notify' AND userID='$userID' and subjectID='$subjectID' ";
		$result=mysql_query($get_sql);
		$rows=mysql_fetch_array($result);
		$id = $rows['id'];
		if($on_off == "1")
		{
			$on_off_sql = "UPDATE $type SET on_off='$on_off' WHERE id='$id'";
			$turned_off = mysql_query($on_off_sql);
			$on_off_sql2 = "UPDATE $type SET updateLog='$datetime' WHERE id='$id'";
			$turned_off2 = mysql_query($on_off_sql2);
			if($turned_off&&$turned_off2)
			{
				return TRUE;
				exit();
			}
			else
			{
				return FALSE;
				exit();
			}
		}
		elseif($on_off == "0")
		{
			$on_off_sql = "UPDATE $type SET on_off='$on_off' WHERE id='$id'";
			$turned_on = mysql_query($on_off_sql);
			$on_off_sql2 = "UPDATE $type SET updateLog='$datetime' WHERE id='$id'";
			$turned_on2 = mysql_query($on_off_sql2);
			if($turned_on&&$turned_off2)
			{
				return TRUE;
				exit();
			}
			else
			{
				return FALSE;
				exit();
			}
		}
		elseif($on_off == "2")
		{
			$on_off_sql = "UPDATE $type SET star='1' WHERE id='$id'";
			$turned_on = mysql_query($on_off_sql);
			$on_off_sql2 = "UPDATE $type SET updateLog='$datetime' WHERE id='$id'";
			$turned_on2 = mysql_query($on_off_sql2);
			if($turned_on&&$turned_off2)
			{
				return TRUE;
				exit();
			}
			else
			{
				return FALSE;
				exit();
			}
		}
		elseif($on_off == "3")
		{
			$on_off_sql = "UPDATE $type SET star='0' WHERE id='$id'";
			$turned_on = mysql_query($on_off_sql);
			$on_off_sql2 = "UPDATE $type SET updateLog='$datetime' WHERE id='$id'";
			$turned_on2 = mysql_query($on_off_sql2);
			if($turned_on&&$turned_off2)
			{
				return TRUE;
				exit();
			}
			else
			{
				return FALSE;
				exit();
			}
		}
		elseif($on_off == "die")
		{
			$delete_sql = "DELETE FROM friends WHERE id='$id'";
			$deleted = mysql_query($delete_sql);
			if($deleted)
			{
				return TRUE;
				exit();
			}
			else
			{
				return FALSE;
				exit();
			}
		}
		else
		{
			return FALSE;
			exit();
		}
	}
	else
	{
		return FALSE;
		exit();
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////



if($_SESSION['email'])
{
	connect("snetwk","user","july17th2010");
    $email = $_SESSION['email'];
    $email = stripslashes($email); 
    $email = strip_tags($email);
    $email = mysql_real_escape_string($email);     
    $email = eregi_replace("`", "", $email);
    $sql=mysql_query("SELECT * FROM member WHERE email='$email'");
    while ($rows = mysql_fetch_assoc($sql))
    {
    $userid = $rows['id'];
    $userfirst = $rows['nameFirst'];
    $usermiddle = $rows['nameMiddle'];
    $userlast = $rows['nameLast'];
    $userusername = $rows['username'];
    $useremail = $rows['email'];
    $usergender = $rows['gender'];
    $usercountry = $rows['country'];
    $userstate = $rows['state'];
    $usersignup = $rows['sign_up_date'];
    $usersignup = strftime("%b %d, %Y", strtotime($signup));
    $userlastlog = $rows['last_log_date'];
    $userlastlog = strftime("%b %d, %Y", strtotime($lastlog));
    $userinspirations = $rows['inspirations'];
    $userpassions = $rows['passion'];
    $userwStatus = $rows['wStatus'];
    $userwPlace = $rows['wPlace'];
    $userabout = $rows['about'];
    $userdream = $rows['dream'];
    $userfriends = $rows['friends'];
    $userwebsite = $rows['website'];
    $useryoutube = $rows['youtube'];
    $userfriends = $rows['friends'];
    $useraccountType = $rows['accountType'];    
    }
}
if($_COOKIE['email'])
{
	connect("snetwk","user","july17th2010");
    $email = $_COOKIE['email'];
    $email = stripslashes($email); 
    $email = strip_tags($email);
    $email = mysql_real_escape_string($email);     
    $email = eregi_replace("`", "", $email);
    $sql=mysql_query("SELECT * FROM member WHERE email='$email'");
    while ($rows = mysql_fetch_assoc($sql))
    {
    $userid = $rows['id'];
    $userfirst = $rows['nameFirst'];
    $usermiddle = $rows['nameMiddle'];
    $userlast = $rows['nameLast'];
    $userusername = $rows['username'];
    $useremail = $rows['email'];
    $usergender = $rows['gender'];
    $usercountry = $rows['country'];
    $userstate = $rows['state'];
    $usersignup = $rows['sign_up_date'];
    $usersignup = strftime("%b %d, %Y", strtotime($signup));
    $userlastlog = $rows['last_log_date'];
    $userlastlog = strftime("%b %d, %Y", strtotime($lastlog));
    $userinspirations = $rows['inspirations'];
    $userpassions = $rows['passion'];
    $userwStatus = $rows['wStatus'];
    $userwPlace = $rows['wPlace'];
    $userabout = $rows['about'];
    $userdream = $rows['dream'];
    $userfriends = $rows['friends'];
    $userwebsite = $rows['website'];
    $useryoutube = $rows['youtube'];
    $userfriends = $rows['friends'];
    $useraccountType = $rows['accountType'];    
    }
}
if($_GET['id'])
{
	connect("snetwk","user","july17th2010");
    $id = $_GET['id'];
    $id = stripslashes($id); 
    $id = strip_tags($id);
    $id = mysql_real_escape_string($id);     
    $id = eregi_replace("`", "", $id);
    $sql=mysql_query("SELECT * FROM member WHERE id='$id'");
    while ($users = mysql_fetch_assoc($sql))
    {
        $id = $users['id'];
        $first = $users['nameFirst'];
        $middle = $users['nameMiddle'];
        $last = $users['nameLast'];
        $name = $users['username'];
        $email = $users['email'];
        $gender = $users['gender'];
        $country = $users['country'];
        $state = $users['state'];
        $signup = $users['sign_up_date'];
        $signup = strftime("%b %d, %Y", strtotime($signup));
        $lastlog = $users['last_log_date'];
        $lastlog = strftime("%b %d, %Y", strtotime($lastlog));
        $inspirations = $users['inspirations'];
        $passions = $users['passion'];
        $wStatus = $users['wStatus'];
        $wPlace = $users['wPlace'];
        $about = $users['about'];
        $dream = $users['dream'];
        $friends = $users['friends'];
        $website = $users['website'];
        $youtube = $users['youtube'];
        $friends = $users['friends'];
        $accountType = $users['accountType'];    
    }
    if($accountType == 'n')
    {
        $type = 'New User';
    }
    if($accountType == 'u')
    {
        $type = 'User';
    }
    if($accountType == 'e')
    {
        $type = 'Experienced User';
    }
    if($accountType == 'd')
    {
        $type = 'Developer';
    }
    if($accountType == 'h')
    {
        $type = 'High Developer';
    }
    if($accountType == 't')
    {
        $type = 'Technician';
    }
    if($accountType == 'i')
    {
        $type = 'High Technician';
    }
    else if($accountType == 'c')
    {
        if(($first == 'Gerald')&&($last == 'Kelly'))
        {
            $type = "Chief Executive Officer";
        }
        else if(($first == 'Iruma')&&($last == 'Shibuya'))
        {
            $type = "Chief Operating Officer";
        }
        else if(($first == 'Giovanni')&&($last == 'Bracero'))
        {
            $type = "Executive Director";
        }
    }
}
