<html>
	<head>
		<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.5.1.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="http://cdn.oesmith.co.uk/morris-0.5.1.min.js"></script>
	</head>
    <body>
        <h1>Test Graph</h1>
    
		<div id="myfirstchart" style="height: 500px;"></div>
		
		<script>
			new Morris.Line({
			  // ID of the element in which to draw the chart.
			  element: 'myfirstchart',
			
			  // Chart data records -- each entry in this array corresponds to a point on
			  // the chart.
			  data: <?php echo json_encode($data); ?>,
			
			  // The name of the data record attribute that contains x-values.
			  xkey: 'x',
			
			  // A list of names of data record attributes that contain y-values.
			  ykeys: ['y'],
			
			  // Labels for the ykeys -- will be displayed when you hover over the
			  // chart.
			  labels: ['y'],
			
			  parseTime: false,
			  
			  smooth: false,
			
			  pointSize: 0,
			  ymax: 120
			});		
		</script>
	</body>
	
	
</html>