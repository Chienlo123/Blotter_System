<?php

//data.php

$connect = new PDO("mysql:host=localhost;dbname=db_barangay", "root", "");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':sStatus'		=>	$_POST["sStatus"]
		);

		$query = "
		INSERT INTO tblblotter
		(sStatus) VALUES (:sStatus)
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT sStatus, COUNT(id) AS Total 
		FROM tblblotter 
		GROUP BY sStatus
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'sStatus'		=>	$row["sStatus"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>