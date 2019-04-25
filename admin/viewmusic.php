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
<br>
<form method="post" action="">
<input type="search" placeholder="Enter name.." name="nn" style="margin-left:400px;">
<input type="search" placeholder="Enter Catagory.." name="cc">
<input type="submit" value="Search" name="sub">
</form>

<br>
<hr>
<br>
<br>
	<?php
	include("dbconnect.php");
	
	if(isset($_POST['sub']))
	{
		
		
		?>
        
        <form method="post" action="">
<input type="submit" name="cdlt" style="margin-left:70px;">
<table class="vmtbl" border="1">
<tr>
<td>ID</td>
<td>Name</td>
<td>Music</td>
<td>Catagory</td>
<td>Delete</td>
<td>Select</td>
</tr>

<?php

$n = $_POST['nn'];
$c = $_POST['cc'];
$sql=mysql_query("select * from music where name='$n' and type='$c'") or die(mysql_error());

while($rr=mysql_fetch_array($sql))
{
	
?>

<tr>
<td><?php echo $rr['id']; ?></td>
<td><?php echo $rr['name']; ?></td>
<td><?php echo $rr['music']; ?></td>
<td ><?php echo $rr['type']; ?></td>
<td><a href="viewmusic.php?mid=<?php echo $rr['id']; ?>"><input type="button" value="delete" name="dlt"></a></td>
<td><input type="checkbox" value="<?php echo $rr['id']; ?>" name="chk[]"></td>
<?php
$rr++;
}
?>
</tr>
</table>
<input type="submit" name="cdlt">
</form>
        
        <?php
		
	}
	else
	{
	?>
	

<?php


if(isset($_POST['cdlt']))
{
	$arr=$_POST['chk'];
	$imp=implode(",",$arr);
	
	$sqll=mysql_query("delete from music where id IN($imp)") or die(mysql_error());
	
	 if($sqll)
	 {
		header("location:home.php?admin=viewmusic");
	 }
	 else
	 {
		echo "Error While Deleating"; 
	 }
}
?>

<form method="post" action="">
<input type="submit" name="cdlt">
<table class="vmtbl" border="1">
<tr>
<td>ID</td>
<td>Name</td>
<td>Music</td>
<td>Catagory</td>
<td>Delete</td>
<td>Select</td>
</tr>

<?php


$sql=mysql_query("select * from music") or die(mysql_error());

while($rr=mysql_fetch_array($sql))
{
	
?>

<tr>
<td><?php echo $rr['id']; ?></td>
<td><?php echo $rr['name']; ?></td>
<td><?php echo $rr['music']; ?></td>
<td ><?php echo $rr['type']; ?></td>
<td><a href="viewmusic.php?mid=<?php echo $rr['id']; ?>"><input type="button" value="delete" name="dlt"></a></td>
<td><input type="checkbox" value="<?php echo $rr['id']; ?>" name="chk[]"></td>
<?php
$rr++;
}
?>
</tr>
</table>
<input type="submit" name="cdlt">
</form>

<?php
	}
?>




<?php
if(isset($_REQUEST['mid']))
{
$mid= $_REQUEST['mid'];
$sqq=mysql_query("delete from music where id='$mid'") or die(mysql_query());

	if($sqq)
	{
		header("location:viewmusic.php");
	}
	else
	{
		echo "error occur";
	}
}
else
{
	
}
?>

</body>
</html>
<?php
}
else
{
	header("location:index.php");	
}
?>