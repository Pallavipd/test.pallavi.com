<?php 
session_start();
if($_SESSION["login"]==0)
header("location:index.php");



?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PPT/PDF Corner | DL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="home1.php"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="home1.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li class="active"><a href="ppt.php">PPT/PDF Corner</a></li>
                        <li><a href="audio.php">Audio Gallery</a></li> 
                        <li><a href="video.php">Video Gallery</a></li> 
                        <li><a href="contact-us.php">Contact</a></li>
                       
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->

    
    <!-- / .title -->  
	<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Book Corner</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li> <?php
					include 'config.php';
					$Luser=$_SESSION['Im'];
					
					
				
														
					echo $Luser;									

					?>  <span class="divider">/</span></li>
                        <li class="active"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	<br>
	
	<h1>JAVA Tutorial<h1>
<!--<audio controlscontrol"" controls="download"><source src="audio/a.mp3" type="audio/mp3"></audio>
 
<br>
<audio controlscontrol"" controls="download"><source src="audio/b.mp3" type="audio/mp3"></audio>-->
 <?php

            $conn = mysqli_connect("localhost","root","","library");
?>

 
 
 
  
<div id="box2">
				<?php

				$query=mysqli_query($conn,"SELECT `id`,`name`,`url` FROM pdf");
				while($run=mysqli_fetch_array($query))
					{
							$pdf_id=$run['id'];
							$pdf_name=$run['name'];
							$pdf_url=$run['url'];
							

							
				?><h3>
				<table >
				<tbody>
				
				<td><div class="span2" id='url' style="margin:12px"><?php echo $pdf_name; ?></td>
					
					<td><a href="<?php echo $pdf_url ?>"type='application/pdf'>Download</a></td>
					
					</div>
				</div>	
				</tbody>	
				</table></h3>
				<?php
		   			}		
				?>			
</div> 


    



<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
