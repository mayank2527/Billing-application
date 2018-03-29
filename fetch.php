<?php
$con=mysqli_connect('localhost','root','','project');


$qr="select * from product where pname='".$_POST['id']."'";

$result=mysqli_query($con,$qr);
while ($row=mysqli_fetch_array($result)) {
	$data['pid']=$row['pid'];
	$data['pname']=$row['pname'];
	$data['cost']=$row['cost'];
	$data['tax']=$row['tax'];
	$data['stock']=$row['stock'];
}

echo json_encode($data);


mysqli_close($con);
?>