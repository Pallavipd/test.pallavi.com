<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home | DL</title>
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="ppt.php">PPT/PDF Corner</a></li>
                        <li><a href="audio.php">Audio Gallery</a></li> 
                        <li><a href="video.php">Video Gallery</a></li> 
                        <li><a href="contact-us.php">Contact</a></li>
                       
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
<!--<section id="registration-page" class="container">    <!-- /header -->
<!--<div>
<form class="center" method="post" action="registration.php">
<table>
<tr>
<td><b>Name:</b></td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td><b>Email ID:</b></td>
<td><input type="text" name="email" required></td>
</tr>

<tr>
<td><b>Password:</b></td>
<td><input type="password" name="pass" required></td>
</tr>

<tr>
<td><b>Contact:</b></td>
<td><input type="text" name="contact" required></td>
</tr>

<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</form>
-->
<section id="registration-page" class="container" style="margin-left:10%;"">
    <form class="left" action='registration.php' method="POST">
      <fieldset class="registration-form">
        <div class="control-group">
          <!-- Username -->
          <div class="controls">
            <input type="text" id="username" name="name" placeholder="Username" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- E-mail -->
          <div class="controls">
            <input type="text" id="email" name="email" placeholder="E-mail" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Password-->
          <div class="controls">
            <input type="password" id="password" name="pass" placeholder="Password" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Password -->
          <div class="controls">
            <input type="password" id="password_confirm" name="passconf" placeholder="Password (Confirm)" class="input-xlarge">
          </div>
        </div>
		
		<div class="control-group">
          <!-- Password -->
          <div class="controls">
            <input type="text" id="password_confirm" name="contact" placeholder="Contact" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button type="submit" class="btn btn-success btn-large btn-block">Sign Up</button>
          </div>
        </div>
      </fieldset>
    </form>
  </section>
  
  
  <section id="registration-page" class="container" style="position:relative; margin-left:60%; margin-top:-48.3%">
    <form class="" action='login.php' method="POST">
      <fieldset class="registration-form">
       

        <div class="control-group">
          <!-- E-mail -->
          <div class="controls">
            <input type="text" id="email" name="email" placeholder="E-mail" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Password-->
          <div class="controls">
            <input type="password" id="password" name="pass" placeholder="Password" class="input-xlarge">
          </div>
        </div>

       
        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button type="submit" class="btn btn-success btn-large btn-block">Sign In</button>
          </div>
        </div>
      </fieldset>
    </form>
  </section>





</body>
</html>