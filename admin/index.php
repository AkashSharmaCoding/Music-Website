<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="css4admin.css" type="text/css">
	 <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="../js/jquery-ui.css">
</head>

<body>

    	<h1><center>Login</center></h1>
       <div class="topbox"> 
        <?php
		include("dbconnect.php");
		if(isset($_POST['sub']))
		{
		$name=		$_POST['nn'];
		$password=	$_POST['pass'];
		
		$sq=mysql_query("select * from admin where name='$name' and password='$password' ") or die(mysql_error());
		
		$nr=mysql_num_rows($sq);
		
			if($nr==0)
			{
				?>
				 <div class="errorbox">
                 	      Invalid Login        
				 </div>
                  <script>
						$(document).ready(function() 
						{
							
							$(".topbox").effect("bounce",1000).effect("shake",1000);
							$(".errorbox").fadeOut(10000);    
						});
					</script>   
				<?php
			}
			else
			{
				while($rr=mysql_fetch_array($sq))
				{
				$_SESSION['admin'] = $rr['name'];
				$_SESSION['admin_id'] = $rr['id'];
				header("location:home.php");
				}
			}
		
			
		}
		else
		{
			
		}
		?> 
  	           
  
            <form action="" method="post" class="fillfrm">
            
            <font class="headings">Name:</font><br>
            <input type="text" name="nn" required><br><br>
            
            <font class="headings">Password:</font><br>
            <input type="password" name="pass" required><br><br>
            
            <input type="submit" value="login" name="sub">
            
            </form>
        </div>
        
        
       
</body>
</html>