<!DOCTYPE html>



<!-- 
 * Markup for jQuery Orbit Plugin 1.2.3
 * www.ZURB.com/playground
 * Copyright 2010, ZURB
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 -->
 
 
 
	<head>
		<meta charset="utf-8" />
		<title>Orbit Demo</title>
		
		<!-- Attach our CSS -->
	  	<link rel="stylesheet" href="../orbit-1.2.3.css">
	 
	  	
		<!-- Attach necessary JS -->
	
		<script type="text/javascript" src="../jquery.orbit-1.2.3.min.js"></script>	
		
			<!--[if IE]>
			     <style type="text/css">
			         .timer { display: none !important; }
			         div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
			    </style>
			<![endif]-->
		
		<!-- Run the plugin -->
		<script type="text/javascript">
			$(window).load(function() {
				$('#featured').orbit();
			});
		</script>
		
	</head>
	<body>
	
	<div class="container">

	
	
	
	
	
<!-- =======================================

THE ACTUAL ORBIT SLIDER CONTENT 

======================================= -->
		<div id="featured"> 
			<div class="content" style="">
				
			</div>
			<a href=""><img src="dummy-images/vb-1.jpg" /></a>
			<img src="dummy-images/zx.jpg" />
			<img src="dummy-images/1112131.jpg"  />
			<img src="dummy-images/er.jpg"  />
		</div>
				</div>	
	</body>
</html>