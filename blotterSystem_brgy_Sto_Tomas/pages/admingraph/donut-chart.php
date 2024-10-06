<!-- The process of graph how the user is count -->
<?php include "../connection.php";?>
<script>
	Morris.Donut({
		element: 'morris-donut-chart',
		data: [{
			label: "Blotter Officer",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tblblotterofficer ");
					 $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
			 	?>
		}, {
			label: "VAWC Officer",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tblvawcofficer ");
					 $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
			 	?>
		}, {
			label: "Barangay Users/Staff",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tblresident ");
					  $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
			 	?>
		}, {
			label: "Barangay Officials",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tblofficial ");
					 $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
			 	?>
		}],
		resize: true
	});
</script>