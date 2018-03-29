<?php
$con=mysqli_connect('localhost','root','','project');

$qr="update product set pname='".$_POST["pname"]."',cost='".$_POST["cost"]."',tax='".$_POST["tax"]."',stock='".$_POST["stock"]."' where pid='".$_POST["pid"]."'";

$res=mysqli_query($con,$qr);

if ($res==1) {
		echo "success";
	} else {
		echo "error".mysqli_error();
	}
		

mysqli_close($con);
?>