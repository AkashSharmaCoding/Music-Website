<?php
if(isset($_SESSION['admin']))
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css4admin.css">

</head>

<body>
<?php
include("dbconnect.php");
if(isset($_POST['dltbtn']))
{
	$arr = $_POST['chk'];
	$imp = implode(",",$arr);
	
	$sqq = mysql_query("delete from feedback where id IN($imp)") or die(mysql_error());
	
	if($sqq)
	{
		header("location:viewfeedback.php");
	}
	else
	{
		echo "error checkbox delete";
	}
}
else
{
	
}
?>
	<br>
	<form method="post" action="">
	<input type="submit" name="dltbtn" value="Delete selected" class="dltbtn">
	
    <hr>
    <br>
    <table class="feedtbl" rules="all" frame="box" >
     <caption class="head4feedback">View Feedback</caption>
     
            <tr>
                <th width="5%">ID</th>
                <th width="20%">Name</th>
                <th width="15%">E-Mail</th>
                <th width="40%">Feedback</th>
                <th width="10%">Delete</th>
                <th width="10%">Checkbox</th>
            </tr>
        <?php
        
        $sql=mysql_query("select * from feedback") or die(mysql_error());
            
        while($rr=mysql_fetch_array($sql))
        {
        ?>    
             <tr>
                <td><?php echo $rr['id']; ?></td>
                <td><?php echo $rr['name']; ?></td>
                <td><?php echo $rr['email']; ?></td>
                <td><?php echo $rr['feedback']; ?></td>
             <td><a href="viewfeedback.php?dlt=<?php echo $rr['id']; ?>"><input type="button" value="Delete"></a></td>
                <td><input type="checkbox" value="<?php echo $rr['id']; ?>" name="chk[]"></td>
             </tr>
               
        <?php
        $rr++;
        }
        ?>
    </table>
    <br>
    <br>
<hr>
	
	<input type="submit" name="dltbtn" value="Delete Selected" class="dltbtn">  
    </form>
    
    
<?php
if(isset($_REQUEST['dlt']))
{
	$delete= $_REQUEST['dlt'];
	
	$sq= mysql_query("delete from feedback where id='$delete'") or die(mysql_error());
	
	if($sq)
	{
		header("location:viewfeedback.php");
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