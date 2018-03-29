<?php
$con=mysqli_connect('localhost','root','','project');

$qr="delete from product where pid='blank' ";



foreach ($_POST as $key => $value) {
		
		global $qr;

		$st=" or pid ='".$key."'";
		$qr=$qr.$st;
	}

//echo $qr;

$res=mysqli_query($con,$qr);
if($res==1){
	echo "success";
}
else
echo "Error ".mysqli_error($con);

mysqli_close($con);
?>