<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Signin Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/bootstrap/css/signin.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/bootstrap/js/ie-emulation-modes-warning.js"></script>
    <script src="/bootstrap/js/jquery-3.2.1.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
        .pointer { cursor: pointer; }
      </style>
  </head>

  <body>
      <h2 style="text-align:center;" class= "pointer">Signup Form</h2>
      <!--<button >show</button>-->
      <div class="container">
        <form method="post" action="example/show">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="txtEmail" name="email" placeholder="Email">
            <span class="hide" id="name-errmsg">Please enter a valid email.</span>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
          </div>
          
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile" class="pointer">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
          
          <button type="submit" class="btn btn-default id='btnValidate'">Submit</button>
        </form>
      </div> 
      
      <div class="container">
      </div>

      <script type= "text/javascript">
        $(document).ready(function(){
          //$('.form-control').on('blur', function() {
          //}
          //$(this).parent().addClass('has-error');
          //$(this).parent().find('#name-errmsg').removeClass('hide');
          //});
          $('h2').on('click',function(){
            $('.form-group').toggle(1000);
            $('.checkbox').toggle(1000);
            $('.btn').toggle(1000);
          });
          
          $("h2").click(function(){
            $(".form-group").animate({left: '50px'}, "slow");
            $(".form-group").animate({fontSize: '3em'}, "slow");
            $(".checkbox").animate({fontSize: '3em'}, "slow");
            $(".checkbox").animate({left: '50px'}, "slow");
            $(".btn").animate({fontSize: '3em'}, "slow");
            $(".btn").animate({left: '50px'}, "slow");
          });  
        });
      </script>
  </body>
</html>
