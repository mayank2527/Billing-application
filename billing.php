<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="dist/jquery.min.js"></script>

<script type="text/javascript" src="billscript.js"></script>
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
					<li><a href="http://localhost/GSTproject/home.php">Home</a></li>
					<li><a href="#">About</a></li>
					</ul>
					<span class="navbar-text ">HELLO <a class="navbar-link active">Username</a></span>
				</div>
			</div>
			
		</div>
	</div>

	<div class="container">
		<div class="row" style="text-align: center;">
			<h1>Table</h1>
		</div>
		<div class="row">
		<div class="col-lg-push-2 col-md-8">
		<form action="bill.php" onsubmit="return false">
			<table class="table table-bordered">
					<tr>
					<th>Bill No.</th>
					<th>Customer Name</th>
					<th>Customer Ph_no.</th>
					</tr>		
				
				<tr>
					<td><input class="form-control" type="text" name=""></td>
					<td><input class="form-control" type="text" name=""></td>
					<td><input class="form-control" type="text" name=""></td>
				</tr>
			</table>
			<table id="pTable" class="table table-striped table-hover  table-bordered ">
				<thead>
					<tr>
						<th>#</th>
						<th>Product</th>
						<th>Quantity</th>
						<th>Cost</th>
						<th>Tax</th>
						<th>Overall Cost</th>
					</tr>
				</thead>
				<tbody id="tab">
					<tr>
						<td class="id">1</td>
						<td class="listout">
							<input type="text" class="form-control" name="pname">
							<div class="auto" style="display: none;">
								<ul class="list-group list-unstyled">
								</ul>
							</div>
						</td>
						<td class="quantity"><input type="text" class="form-control" name="quantity"></td>
						<td class="cost"><input disabled="true" type="text" class="form-control" name="cost"></td>
						<td class="tax"><input disabled="true" type="text" class="form-control" name="tax"></td>
						<td class="Ocost"><input type="text" class="form-control" name="Ocost"></td>
						<td><button class='cancel  btn btn-warning'>X</button></td>
					</tr>
				</tbody>
			</table>
		<button class="btn btn-success btn-block" style="margin-bottom: 10px;" >Submit</button>
		</form>
		</div>
		</div>
		<div class="row">
			<button class="btn btn-primary btn-lg col-lg-offset-2" id="but">ADD</button>
			<div class="col-lg-push-7 col-lg-3">
			<table class="table table-responsive table-bordered ">
				<tr>
					<td><button id="tbut" class="btn btn-info">Total</button></td>
					<td>Rs.</td>
					<td id="total" class="col-lg-8"></td>
				</tr>
			</table>
		</div>

		</div>
	</div>
</body>
</html>