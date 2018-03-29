<!DOCTYPE html>
<html>
<head>
	<title>update data</title>
	<link rel="stylesheet" type="text/css" href="..\css\bootstrap.css">
	<script type="text/javascript" src="dist/jquery.min.js"></script>
	<style type="text/css">
		#main{
			margin-left: 40px;
		}
	</style>
	<script type="text/javascript">
		$(function(){

			$('#reset').click(function(){

				var id=$('#sel').val();
		
				$.ajax({
					url:"fetch.php",
					method:"POST",
					data:{id:id},
					dataType:"JSON",
					success:function(data){
						$('#pid').val(data.pid);
						$('#pname').val(data.pname);
						$('#cost').val(data.cost);
						$('#tax').val(data.tax);
						$('#stock').val(data.stock);
					}
				});		
			});

		$('select[name="select-item"]').change(function(){
				var id=$('#sel').val();
		
				$.ajax({
					url:"fetch.php",
					method:"POST",
					data:{id:id},
					dataType:"JSON",
					success:function(data){
						$('#pid').val(data.pid);
						$('#pname').val(data.pname);
						$('#cost').val(data.cost);
						$('#tax').val(data.tax);
						$('#stock').val(data.stock);
					}
				});		
						
		});

		$('#update').click(function(){

				var data={
				pid : $('#pid').val(),
				pname : $('#pname').val(),
				cost : $('#cost').val(),
				tax : $('#tax').val(),
			 	stock : $('#stock').val()
				}

				$.ajax({
					url: "upchanges.php",
					method: "POST",
					data: data,
					dataType: "TEXT",
					success: function(e){
						if(e=="success")
							alert("Update Succesfully");
						else
							alert(e);
					}  

				})
		});

		})

	</script>
	<style type="text/css">
		input#pid{
			width: 100px;
		}

	</style>
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

	<div class="container-fluid">
		<div class="row" id="main">
				<div>
					<center><h3 style="color: blue;">Update Product</h3></center>
				</div>
				<br><br>
				<form class="form-inline">
					<select id="sel" class="form-control" name="select-item">
						
					<?php
					$con=mysqli_connect('localhost','root','','project');

					$qr="select * from product order by pid";
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
			
				<div class="form-group">
					<label for="pid">PID</label>
					<input disabled="true"  type="text"  class="form-control" id="pid" name="pid">
				</div>
 				<div class="form-group">
					<label for="pname">Product</label>
					<input type="text" class="form-control" id="pname" name="pname">
				</div>
		 		<div class="form-group">
					<label for="cost">Cost</label>
					<input type="text" class="form-control" id="cost" name="cost">
				</div>
				<div class="form-group">
					<label for="tax">Tax %</label>
					<input type="text" class="form-control" id="tax" name="tax">
	 			</div>
				<div class="form-group">
					<label for="stock">Stock</label>
				 	<input type="text" class="form-control" id="stock" name="stock">
				</div>
				</form>
				<br><br>
				<div>
					<center>
					<button id="update" class="btn btn-primary btn-lg">Update</button>&nbsp &nbsp
					<button id="reset" class="btn btn-info">Reset</button>
				</center>
				</div>
				
		</div>
	</div>

</body>
</html>
<?php
mysqli_close($con);

?>