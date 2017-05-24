<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Static Top Navbar Example for Bootstrap</title>

  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <!-- Static navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Project name</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../navbar/">Default</a></li>
          <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
          <li><a href="../navbar-fixed-top/">Fixed top</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>


  <div class="container">

    <form class="form-horizontal" method="POST" action="/home/index/<?=isset($row) ? $row['id'] : '' ?>">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">User Edit Form</h3>
        </div>
        <div class="panel-body">

        <div class="form-group">
          <label class="control-label">Name</label>
          <input type="text" class="form-control" name="name" value="<?=isset($row) ? $row['name'] : '' ?>" />
        </div>

        <div class="form-group">
          <label class="control-label">Contact</label>
          <input type="text" class="form-control" name="contact" value="<?=isset($row) ? $row['contact'] : '' ?>" />
        </div>

        <div class="form-group">
          <label class="control-label">Address</label>
          <input type="text" class="form-control" name="address" value="<?=isset($row) ? $row['address'] : '' ?>" />
        </div>

        <div class="form-group">
          <label class="control-label">DOB</label>
          <input type="text" class="form-control" name="dob" value="<?=isset($row) ? $row['dob'] : '' ?>" />
        </div>

        <div class="form-group">
          <label class="control-label">Remarks</label>
          <input type="text" class="form-control" name="remarks" value="<?=isset($row) ? $row['remarks'] : '' ?>" />
        </div>

        </div>

        <div class="panel-footer">
          <button type="submit" class="btn btn-success">Save</button>

        </div>
      </div>
    </form>

    <table class="table table-bordered table-striped">
     <thead>
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Contact</th>
         <th>Address</th>
         <th>DOB</th>
         <th>Remarks</th>
       </tr>
     </thead>

     <tbody>
      <?php
      foreach ($rows as $row) {
        echo '
        <tr>
         <td><a href="/signup/index/'.$row->id.'">'.$row->id .'</a></td>
         <td>'.$row->name .'</td>
         <td>'.$row->contact .'</td>
         <td>'.$row->address .'</td>
         <td>'.$row->dob .'</td>
         <td>'.$row->remarks .'</td>
       </tr>
       ';
     }
     ?>
   </tbody>
 </table>

</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>
