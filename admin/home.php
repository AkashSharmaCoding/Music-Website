<?php
session_start();
if(isset($_SESSION['admin']))
{
	$idd = $_SESSION['admin_id'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css4admin.css">
</head>

<body>
<div class="top">
<p class="aplogo">ADMIN PANEL</p>
</div>

<div class="lside">
<br>
<font class="welcome">Welcome:</font>&nbsp;<font class="adminname"><?php echo $_SESSION['admin'];?></font><br>
<a href="logout.php"><input type="button" value="LOGOUT" class="logout"></a><br>
<br>
<a href="home.php"><input type="button" value="home" class="btn" style="margin-top:50px;"></a><br>
<br>
<a href="home.php?admin=addmusic"><input type="button" value="Add Music" class="btn"  ></a><br>
<br>
<a href="home.php?admin=viewmusic"><input type="button" value="View Music" class="btn"></a><br>
<br>
<a href="home.php?admin=changepass"><input type="button" value="Change Password" class="btn"></a><br>
<br>
<a href="home.php?admin=viewfeedback"><input type="button" value="View Feedback" class="btn"></a>

</div>

<div class="rside">



<?php
if(isset($_REQUEST['admin']))
{
	$rt=$_REQUEST['admin'];
	if($rt=="addmusic")
	{
		include("musicentry.php");
	}
	elseif($rt=="viewmusic")
	{
		include("viewmusic.php");
	}
	elseif($rt=="changepass")
	{
		include("changepass.php");
	}
	elseif($rt=="viewfeedback")
	{
		include("viewfeedback.php");
	}
	else
	{
		
	}
}
else
{
	?>
	<p class="txt">Admin Panel pages display in this Section..</p>
    <?php
}
?>

</div>

</body>
</html>
<?php
}
else
{
	header("location:index.php");
}
?>