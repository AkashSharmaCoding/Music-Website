<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Feedback</title>
<link rel="stylesheet" type="text/css" href="skybeatscss.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.css">
</head>

<body>
<!--head Starts here-->
<nav class="navbar navbar-default " id="navhead" >
<div class="container-fluid">
<div class="container">

	
    <div class="navbar-header ">
    		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#hide">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
      <a class="navbar-brand " id="logo" href="index.php">Sky Beats</a>
    </div>
    
   <div class="collapse navbar-collapse" id="hide">
    	<ul class="nav navbar-nav navbar-right" >
        	<li ><a href="index.php" id="head" ><span class="glyphicon glyphicon-home" 
            style="font-size:25px;"></span></a></li>
        	<li ><a href="skybeats.php" id="head" >Metal</a></li>
        	<li ><a href="jazz.php" id="head" >Jazz</a></li>
            <li class="disabled"><a href="#" id="head">Tech House<br><span class="badge">Coming Soon</span></a></li>
        	<li class="disabled"><a href="#" id="head">Rock<br><span class="badge">Coming Soon</span></a></li>
        	<li class="active"><a href="feedback.php" id="head">Feedback</a></li>
        </ul>
    </div>
</div>
</div>
</nav>
<!--head end here-->





<!--form starts here-->
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 " >

<form role="form"  action="" method="post">

<div class="form-group">
<label class="lbl">Name</label>
<input type="text" required class="form-control" name="nn">
</div>
<div class="form-group">
<label class="lbl">E-Mail (optional)</label>
<input type="email" class="form-control" name="emaill">
</div>
<div class="form-group">
<label class="lbl">Feedback</label>
<textarea required class="form-control" rows="7" name="fback"></textarea>
</div>
<br>
<br>
<input type="submit" class="form-control" id="sub" name="sub" value="Send">
</form>
</div>


<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " >
<p style="font-size:50px; color:#CD1785; line-height:100px; text-align:center;">
<?php
include("admin/dbconnect.php");

if(isset($_POST['sub']))
{
	$name=		$_POST['nn'];
	$email=		$_POST['emaill'];
	$feedback=	$_POST['fback'];
	
	$sql=mysql_query("insert into feedback (name,email,feedback) values('$name','$email','$feedback')") 
	or die(mysql_error());

		if($sql)
		{
			echo "Thank you for your Feedback";
			?>
            <br>
			<span class="glyphicon glyphicon-thumbs-up" style="font-size:70px;"></span>
			<?php		
        }
		else
		{
			echo "Error Occur..";
		}
}
else
{
	
}
?>

</p>
</div>


</div>
</div>
<!--form ends here-->


<br>
<br>

<!-----Footer-starts----->
<?php
include('bottom.php');
include('copyrytbottom.php');
?>
<!--Footer end here-->



<!--Linked Files-->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.1.min.js"></script>
</body>
</html>