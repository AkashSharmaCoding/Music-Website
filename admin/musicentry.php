<?php
if(isset($_SESSION['admin']))
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<link rel="stylesheet" href="css4admin.css" type="text/css">
</head>

<body>
<div class="toperr">
<?php
include("dbconnect.php");
if(isset($_POST['sub']))
{
	$name=	$_POST['nn'];
	$music=	$_FILES['music']['name'];
	$musict=$_FILES['music']['tmp_name'];
	$path=	"music/".$music;
	$type=	$_POST['type'];
	
	$sql=mysql_query("insert into music(name,music,type) values('$name','$path','$type')") or die(mysql_error());
	
	if(is_dir("music"))
	{
		move_uploaded_file("$musict",$path);
	}
	else
	{
		mkdir("music");
		move_uploaded_file("$musict",$path);
	}
		if($sql)
		{
			echo "music uploaded";
		}
		else
		{
			echo "music not uploaded";
		}
	
	
}
?>
</div>

<div class="box">
<font style="font-size:50px;"><center>Music Entry</center></font>
<hr>
<br>

<form action="" method="post" enctype="multipart/form-data" name="form" class="form">
<font class="heading">Name:</font><br>
<input type="text" placeholder="Enter Music Name..." name="nn">
<br>
<br>
<font class="heading">Music:</font><br>
<input type="file" name="music">
<br>
<br>
<br>
<font class="heading">Type:</font><br>
<select name="type">
<option>Metal</option>
<option>Jazz</option>
<option>Tech House</option>
<option>Rock</option>
</select>
<br>
<br>
<input type="submit" value="upload music" name="sub">

</form>
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