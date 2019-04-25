<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Metal</title>

<link rel="stylesheet" type="text/css" href="skybeatscss.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.css">


<link rel="stylesheet" href="css/audioplayer.css" />
		<script>
			/*
				VIEWPORT BUG FIX
				iOS viewport scaling bug fix, by @mathias, @cheeaun and @jdalton
			*/
			(function(doc){var addEvent='addEventListener',type='gesturestart',qsa='querySelectorAll',scales=[1,1],meta=qsa in doc?doc[qsa]('meta[name=viewport]'):[];function fix(){meta.content='width=device-width,minimum-scale='+scales[0]+',maximum-scale='+scales[1];doc.removeEventListener(type,fix,true);}if((meta=meta[meta.length-1])&&addEvent in doc){fix();scales=[.25,1.6];doc[addEvent](type,fix,true);}}(document));
		</script>
        
      <script src="js/collapse.js"></script> 

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
        	<li class="active"><a href="skybeats.php" id="head" >Metal</a></li>
        	<li ><a href="jazz.php" id="head" >Jazz</a></li>
            <li class="disabled"><a href="#" id="head">Tech House<br><span class="badge">Coming Soon</span></a></li>
        	<li class="disabled"><a href="#" id="head">Rock<br><span class="badge">Coming Soon</span></a></li>
        	<li><a href="feedback.php" id="head">Feedback</a></li>
        </ul>
    </div>
</div>
</div>
</nav>
<!--head end here-->


<!--Mid Section Starts-->
<div class="container">
<br>
<br>
<div class="row" style="background-color:transparent;">
<?php
include("admin/dbconnect.php");

include("pager.php");

$query = "select * from music where type='metal' " or die(mysql_error());

$res= mysql_query($query);

$pagesize=6;

					$parameter='';

					$NoMake='';

					if($pagesize)

					$parameter.="&ps=".$pagesize;

					if(empty($_REQUEST["page"]))

						$_REQUEST["page"]=1;

	if(ExecPaging($query,$parameter,$pagesize))

						$rid=ExecPaging($query,$parameter,$pagesize,"skybeats.php");

					else

						$NoMake=1;



						$num=count($rid);

						

      // $i=1;



	    if($NoMake=='') 

		{

 for($i=0;$i<$num;$i++)

      

//while($rid=mysql_fetch_array($res))

{
?>
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-6 musicbox">
	  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
   

			
   
            <img src="image/t3.jpg" class="img-responsive" title="<?php echo $rid[$i]['name']; ?>">
                
               <div id="wrapper">    
            
            
            <audio  controls="controls">
				<source src="<?php echo 'admin/'.$rid[$i]['music']; ?>" type="audio/mp3">
				
			</audio>
            
<a href=" <?php echo 'admin/'.$rid[$i]['music']; ?>" class="btn btn-group-justified" id="downld" role="button">Download</a>
            <br>
            
         </div>   
            
	  </div>
	</div>
<?php
}
}
?>

	<hr>
   
</div>
<br>
<?php echo "<p align='center' style='background-color:transparent; font-size:20px; color:#5852D4;'>".$pagelist."</p>";?>
</div>
<!--Mid section end here-->




<!--footer Starts--->
<?php
include('bottom.php');

include('copyrytbottom.php');
?>
<!--footer Ends--->


<!--linked files-->
<script src="js/jquery-2.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script src="js/jquery.js"></script>
			<script src="js/audioplayer.js"></script>
			<script>$( function() { $( 'audio' ).audioPlayer(); } );</script>
   
</body>
</html>