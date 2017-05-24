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

	<script src="/bootstrap/js/jquery-3.2.1.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>

	<style>
		.pointer { cursor: pointer; }
	</style>
</head>

<body>

	<!-- Static navbar -->
	<nav class="navbar navbar-inverse navbar-static-top">
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
		<button type="button" class="btn btn-danger" id="Clear">Clear</button>

		<div class="row">
			<div class="col-md-4">
				<button type="button" class="btn btn-primary" id="FetchText">Fetch Text</button>
				<textarea class="content" rows="5" cols="30"></textarea>
			</div>

			<div class="col-md-4">
				<button type="button" class="btn btn-primary" id="FetchHtml">Fetch Html</button>
				<div id="ContentHtml"></div>
			</div>

			<div class="col-md-4">
				<div class="input-group">
					<input type="text" class="form-control" id="fetch_id" />
					<div class="input-group-btn">
						<button type="button" class="btn btn-primary" id="FetchJson">Fetch Json</button>
					</div>
				</div>
				<table class="table table-borderd table-striped">
				<tbody id="ContentJson">
				</tbody>
				</table>
			</div>
		</div>
	</div> <!-- /container -->


	<script type="text/javascript">
		$(document).ready(function() {
			$('#Clear').on('click', function() {
				$('.content').val('');
				$('#ContentHtml').html('');
				$('#ContentJson').html('');
			});

			$('#FetchText').on('click', function() {
				$.ajax({
					url: "/ajax/fetch_text",
					type: "GET",
					dataType: "text",
					// data: {
					// 	id: 123
					// },
				})
				.done(function( text ) {
					var t = $('.content').val();
					$('.content').val(t+"\n"+text);
				})
				.fail(function( xhr, status, errorThrown ) {
					console.log( "Error: " + errorThrown );
					console.log( "Status: " + status );
					console.dir( xhr );
				})
				.always(function( xhr, status ) {
					console.log('Called Always.');
				});
			});

			$('#FetchHtml').on('click', function() {
				$.ajax({
					url: "/ajax/fetch_html",
					type: "GET",
					dataType: "html",
					// data: {
					// 	id: 123
					// },
				})
				.done(function( html ) {
					$('#ContentHtml').html(html);
				})
				.fail(function( xhr, status, errorThrown ) {
					console.log( "Error: " + errorThrown );
					console.log( "Status: " + status );
					console.dir( xhr );
				})
				.always(function( xhr, status ) {
					console.log('Called Always.');
				});
			});

			$('#FetchJson').on('click', function() {
				$.ajax({
					url: "/ajax/fetch_json",
					type: "GET",
					dataType: "json",
					data: {
					 	id: $('#fetch_id').val()
					},
				})
				.done(function( json ) {
					$.each(json, function(i, o) {
						$('#ContentJson').append('<tr> \
							<td>'+o.id+'</td> \
							<td>'+o.name+'</td> \
							<td>'+o.address+'</td> \
							<td>'+o.contact+'</td> \
							<td>'+o.dob+'</td> \
							<td>'+o.remarks+'</td> \
						</tr>');
					});
				})
				.fail(function( xhr, status, errorThrown ) {
					console.log( "Error: " + errorThrown );
					console.log( "Status: " + status );
					console.dir( xhr );
				})
				.always(function( xhr, status ) {
					console.log('Called Always.');
				});
			});

		});
	</script>

</body>
</html>