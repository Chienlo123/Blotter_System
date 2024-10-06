<!-- vawc officer process of counting data for graph -->
<?php include "../connection.php";?>
<script>
	Morris.Donut({
		element: 'morris-donut-chart',
		data: [{
			label: "Women",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tblvawc where sStatus = 'women' ");
					 $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
			 	?>
		}, {
			label: "Children",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tblvawc where sStatus = 'child' ");
					 $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
			 	?>
		}, {
			label: "VAWC",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tblvawc where status = 'Approved' ");
					 $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
			 	?>
		}],
		resize: true
	});
</script>