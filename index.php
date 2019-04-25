<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome,to SkyBeats</title>

<link rel="stylesheet" type="text/css" href="skybeatscss.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.css">

<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
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
        	<li class="active"><a href="index.php" id="head" ><span class="glyphicon glyphicon-home" 
            style="font-size:25px;"></span></a></li>
        	<li ><a href="skybeats.php" id="head" >Metal</a></li>
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



<!------ Slider ------------>
<div class="container">
  <div class="row">
	<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
		<div class="wrap">
		  <div class="slider">
	      	<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <img src="images/1.jpg" data-thumb="images/1.jpg" alt="" />
	                <img src="images/2.jpg" data-thumb="images/2.jpg" alt="" />
	                <img src="images/3.jpg" data-thumb="images/3.jpg" alt="" />
	                <img src="images/4.jpg" data-thumb="images/4.jpg" alt="" />
	                 <img src="images/5.jpg" data-thumb="images/5.jpg" alt="" />
	            </div>
	        </div>
   		</div>
       </div>
   	  </div>
	</div>

  </div>
  <!--slider ends here-->
  
  
<!--Mid2 Section start Here-->


<div class="container">
<br>
<br>
	<div class="row">
	  <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12">
        <div class="jumbotron">
            <h1>The Best Created Beats Are Here</h1>
             <p>
                Hello,Welcome To the Sky Beats, Here u can Enjoy the beats with Full Bass.
                Enjoy your self. Give us your response via Feedback. Thanks for visiting.
             </p>   
             <p>
                <font style="margin-left:800px;">-Akash Sharma</font>
             </p>
        </div>
	   </div>
    </div>
</div>
<!--Mid2 Section Ends Here -->




<!-----Footer-starts----->
<?php
include('bottom.php');
include('copyrytbottom.php');
?>
<!--Footer end here-->


<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.2.1.min.js"></script>
<script src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>