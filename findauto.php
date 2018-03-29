<?php

$con=mysqli_connect("localhost","root","","project");

$qr="select pname from product where pname like '%".$_POST['data']."%'";

$res=mysqli_query($con,$qr);
$output="";

while ($row=mysqli_fetch_array($res)) {
	
	$li="<li class='lis list-group-item'>".$row['pname']."</li>";
	$output.=$li;

}

echo $output;


mysqli_close($con);
?>