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

		var p1=[];
		var p2=[];

		<?php
		$result=mysqli_query($con,$qr);
		while ($row=mysqli_fetch_array($result)) {
		?>

		p1.push( <?php echo "'".$row['pid']."'"; ?> );
		p2.push( <?php echo "'".$row['pname']."'"; ?> );


		<?php

		}

		?>

		$(function(){

		$('#del').click(function(){
			var data={};

			for (var i = 0; i < p1.length; i++) {

				if ($('input[name="'+p2[i]+'"]').is(":checked")) 
				{

					data[p1[i]]=p2[i];
					
				}

			}
			if(confirm("Delete Item(s)?")){
			//console.log(data);
			
			$.ajax({
				url:'del.php',
				method:"POST",
				data:data,
				datatype:"text",
				success:function(e){
					if (e=="success") {
						location.reload();
					}
					else{
						alert(e);
					}
				}

			});
		}
	
		});		


		})
	
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
			<h1>Delete Product</h1>
		</div>
				
		<div class="row col-lg-offset-4 col-md-4">
			<form action="ac.html" onsubmit="return false">
			<table id="tab1" class="table table-striped table-hover table-bordered ">
				<thead>
					<tr>
						<th>Check</th>
						<th>Product</th>
					</tr>
				</thead>
				
				<tbody>
				<?php
				$result=mysqli_query($con,$qr);

				if (mysqli_num_rows($result)>0) {
				while($row=mysqli_fetch_array($result)){

				?>

				<tr>
					<td><input class="form-control" type="checkbox"  
					<?php echo "name='".$row['pname']."'";?> >
					</td><td><?php echo $row['pname'];?></td>
				</tr>


				<?php

					}
					}	
					?>

				</tbody>
			</table>
				<center><button id="del" class="btn btn-lg btn-warning">Delete</button></center>
		</form>
		</div>
	</div>
</body>
</html>


<?php
mysqli_close($con);

?>