<?php
if(isset($_SESSION['admin']))
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css4admin.css">
</head>

<body>
<?php
include("dbconnect.php");

$sq=mysql_query("select * from admin where id='$idd'") or die(mysql_error());
$rr=mysql_fetch_array($sq);
$dbpass=$rr['password'];

?>

<br>
<br>
<br>
<div class="cptop">
	<font style="font-size:40px;"><center>Change Your Password</center></font>
    <hr>
    <form method="post" action="" class="cpassfrm">
    <font class="heading">Current Password:</font><br>
    <input type="password" name="opass" placeholder="Enter your Password.."><br><br>
    <font class="heading">New Password:</font><br>
    <input type="password" name="npass" placeholder="Enter your Password.."><br><br>
    <font class="heading">Re-enter New Password:</font><br>
    <input type="password" name="repass" placeholder="Enter your new Password Again.."><br><br>
    
    <input type="submit" value="Change Password" name="sub">
    </form>

<?php
if(isset($_POST['sub']))
{
	$oldpass=	$_POST['opass'];
	$newpass=	$_POST['npass'];
	$repass=	$_POST['repass'];
	
	if($oldpass!=$dbpass)
	{
		echo "Old Password Not Match";
	}
	elseif($newpass!=$repass)
	{
		echo "Both New Password Not Match";
	}
	else
	{
		$upd=mysql_query("update admin SET password='$newpass' where id='$idd'") or die(mysql_error());
			
			if($upd)
			{
				echo "Password Changed.. Logout id..";
			}
			else
			{
				echo "error occur";
			}
	}
	
}
else
{
	
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