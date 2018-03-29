<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="dist/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="navbar navbar-inverse">
				<div class="navbar-header">
					<span class="navbar-brand">Menu</span>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				
				<div class="collapse navbar-collapse" id="menu">
					<ul class="nav navbar-nav">
					<li class="active"><a href="http://localhost/GSTproject/home.php">Home</a></li>
					<li><a href="#">About</a></li>
					</ul>
					<span class="navbar-text ">HELLO <a class="navbar-link active">Username</a></span>
				</div>
			</div>
			
		</div>
	</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-4">
			<div class=" panel panel-default">
			<div class="panel-heading">
  			  CRUD
  			</div>  

  			<ul class="list-group">
			    <li class="list-group-item"><a href="http://localhost/GSTproject/demo.html">Add Products</a></li>
			    <li class="list-group-item"><a href="http://localhost/GSTproject/select.php">View Prodducts</a></li>
			    <li class="list-group-item"><a href="http://localhost/GSTproject/update.php">Update Products</a></li>
			    <li class="list-group-item"><a href="http://localhost/GSTproject/delete.php">Delete Products</a></li>
			  </ul>
			</div>
			</div>

			<div class="col-lg-offset-2 col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						BILLING
					</div>
					<div class="panel-body">
						<a href="http://localhost/GSTproject/billing.php">Make Bill</a>
					</div>
				</div>
			</div>	
		</div>
	</div>

</body>
</html>