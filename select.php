<?php
$con=mysqli_connect('localhost','root','','project');

$qr="select * from product order by pid";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<link rel="stylesheet" type="text/css" href="..\css\bootstrap.css">
	<script type="text/javascript" src="dist/jquery.min.js"></script>

	<script type="text/javascript">
		
		$('document').ready(function(){
			$('#all').click(function(){

						$("#tab2").hide();
						$('#tab1').show();
				
			});

			$('#but').on('click',function(){
				
				var id=$('#sel').val();

				if (id!="") {
				$.ajax({
					url:"fetch.php",
					method:"POST",
					data:{id:id},
					dataType:"JSON",
					success:function(data){
						$("#tab1").hide();
						$('#pid').text(data.pid);
						$('#pname').text(data.pname);
						$('#cost').text(data.cost);
						$('#tax').text(data.tax);
						$('#stock').text(data.stock);
						$('#tab2').show();
					}
				})
				}
				});
			


		});
			




		</script>

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
		<div class="row" style="text-align: center; color: blue;">
			<h1>Product Stock</h1>
		</div>
				
			<div class="col-lg-3">
				<select class="form-control" name="param" id="sel">
					<?php
				$result=mysqli_query($con,$qr);

				if (mysqli_num_rows($result)>0) {
				while($row=mysqli_fetch_array($result)){

				?>
		
					<option><?php echo $row['pname']?></option>

					<?php
					}
					}	
					?>

				</select>
				<br><br>
			<button class="btn btn-primary" id="but" >FILTER</button>
			<button class="btn btn-info" id="all" >ALL</button>

			</div>
			

			
		<div class="row col-md-6">
			<table id="tab1" class="table table-striped table-hover table-bordered ">
				<thead>
					<tr>
						<th>PID</th>
						<th>Product</th>
						<th>Cost</th>
						<th>Tax %</th>
						<th>Stock</th>
					</tr>
				</thead>
				
				<tbody>
				<?php
				$result=mysqli_query($con,$qr);

				if (mysqli_num_rows($result)>0) {
				while($roww=mysqli_fetch_array($result)){

				

				 
				echo "<tr><td>".$roww['pid']."</td><td>".$roww['pname']."</td><td>".$roww['cost']."</td><td>".$roww['tax']."</td><td>".$roww['stock']."</td></tr>";
					
					}
					}	
					?>


				</tbody>
			</table>

			<table id="tab2" style="display: none;" class="table table-bordered table-responsive table-striped">
				<thead>
					<tr>
						<th>PID</th>
						<th>Product</th>
						<th>Cost</th>
						<th>Tax %</th>
						<th>Stock</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span id="pid"></span> </td>
						<td><span id="pname"></span></td>
						<td><span id="cost"></span></td>
						<td><span id="tax"></span></td>
						<td><span id="stock"></span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>


<?php
mysqli_close($con);

?>