<?php

extract($_GET);
$c=count($_GET['pid']);


$con=mysqli_connect('localhost','root','','project');

$qr="insert into product values('$pid[0]','$pname[0]','$cost[0]','$tax[0]','$stock[0]')";
	
for ($i=1; $i<$c ; $i++) { 	

	$st=",('$pid[$i]','$pname[$i]','$cost[$i]','$tax[$i]','$stock[$i]')";
	$qr=$qr.$st;
	}


$res=mysqli_query($con,$qr);

if ($res==1) {
	echo "$c Product added";
} else {
	echo 'Failed'.mysqli_error($con);
}

mysqli_close($con);

?>