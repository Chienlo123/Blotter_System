<?php
	//mysql query to select field brgycaseno if it's equal to the brgycaseno that we check '  
include "../connection.php";
$result = mysqli_query($con,"select brgycaseno from tblsummon where brgycaseno = '".$_POST['brgycaseno']."' ");
$cnt = mysqli_num_rows($result);
print($cnt);
?>