<?php

$con=mysqli_connect("localhost","root","","db_barangay");



if(!$con)
{
	echo "Connection Failed" . mysqli_connect_error();
	
}


?>