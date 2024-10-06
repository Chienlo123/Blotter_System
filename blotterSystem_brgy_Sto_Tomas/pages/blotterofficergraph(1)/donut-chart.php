<!-- blotter officer process of counting data for graph -->
<?php include "../connection.php";?>
<script>
	Morris.Donut({
		element: 'morris-donut-chart',
		data: [{
			label: "Summon",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tblsummon ");
					 $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
			 	?>
		}, {
			label: "Civil",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tblblotter where sStatus = 'Civil' ");
					  $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
			 	?>
		},{
			label: "Criminal",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tblblotter where sStatus = 'Criminal' ");
					 $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
			 	?>
		}, {
			label: "Others",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tblblotter where sStatus = 'Others' ");
					  $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
			 	?>
		}, {
			label: "Blotters",
			value: <?php 
					$q = mysqli_query($con,"SELECT * from tblblotter where status = 'Approved' ");
					 $num_rows = mysqli_num_rows($q);
                      echo $num_rows;
			 	?>
		}],
		resize: true
	});
</script>