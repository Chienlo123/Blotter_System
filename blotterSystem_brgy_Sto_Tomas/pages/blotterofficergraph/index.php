<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Blotter System Graph</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
		
		
	</head>
	<body>
		<div class="container">
			<h2 class="text-center mt-4 mb-3">Blotter System Graph</a></h2>

			
		</div>
		
		
				
		
	</body>
</html>

<script>
	
$(document).ready(function(){

	

	makechart();

	function makechart()
	{
		$.ajax({
			url:"data.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var sStatus = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					sStatus.push(data[count].sStatus);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:sStatus,
					datasets:[
						{
							label:'Case',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
				};

				var group_chart1 = $('#pie_chart');

				var graph1 = new Chart(group_chart1, {
					type:"pie",
					data:chart_data
				});

				var group_chart2 = $('#doughnut_chart');

				var graph2 = new Chart(group_chart2, {
					type:"doughnut",
					data:chart_data
				});

				var group_chart3 = $('#bar_chart');

				var graph3 = new Chart(group_chart3, {
					type:'bar',
					data:chart_data,
					options:options
				});
			}
		})
	}

});



</script>

