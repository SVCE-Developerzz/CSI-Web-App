<html>
<head>
	<title>Events</title>
	<?php
		require("../connection/index.php");
		include '../headerfile/index.php';
	?>
	<style type="text/css">
		#eventback
		{
			background-color: white;
			padding:10px 10px; 
		}
		#imgscale
		{
			transition:0.5s;
		}

		#imgscale:hover
		{
			transform:scale(1.1);
			z-index: 2;
			box-shadow: 0.5px 0.5px 0.5px #283e4a;
			cursor: pointer;
			border-collapse: collapse;
		}
	</style>
</head>
<body style="background-color: rgb(248, 248, 248);font-family: 'Nunito',sans-serif;" onload=changeclass("events")>
	<?php
		include '../headerbody/index.php';
		$cn=getconnection();
		$sql1="select * from events where sno=1";
		$rowsquery1=mysqli_query($cn,$sql1);
		$sql2="select * from events where sno!=1";
		$rowsquery2=mysqli_query($cn,$sql2);
	?>
	<div class="py-3">
		<div class="container">
			<div id="eventback" class="row">
				<div class="col-md-12">
				<br>
				<blockquote style="border-color: #00A652;">
					<h1 style="color: #00A652;">Events</h1>
				</blockquote>
				<br><br>
				  <ul class="collapsible popout">
				  	<?php
				  		$justify='"text-align: justify;text-justify:inter-word;"';
			    		while($row=mysqli_fetch_row($rowsquery1))
			    		{
			    			echo "<li class=active>";
			    			echo "<div class='collapsible-header'><b>".$row[1]."&nbsp;&nbsp;</b>-&nbsp;&nbsp;".$row[2]."</div>";
			    			echo "<div class='collapsible-body'><span>
			    			<p style=".$justify.">".$row[4]."</p>
			    			<div class=container>
			    				<div class=row>
			    					<div class=col-md-6>
			    						<img src='../images/events/img_1_1.jpg' class=img-thumbnail width=100% id=imgscale>
			    					</div>
			    					<div class=col-md-6>
			    						<img src='../images/events/img_1_2.jpg' class=img-thumbnail width=100% id=imgscale>
			    					</div>
			    				</div>
			    			</div>
			    			</span></div>";
			    			echo "</li>";
			    		}
			    		while($row=mysqli_fetch_row($rowsquery2))
			    		{
			    			echo "<li>";
			    			echo "<div class='collapsible-header'><b>".$row[1]."&nbsp;&nbsp;</b>-&nbsp;&nbsp;".$row[2]."</div>";
			    			echo "<div class='collapsible-body'><span>
			    			<p style=".$justify.">".$row[4]."</p>
			    			<div class=container>
			    				<div class=row>
			    					<div class=col-md-6>
			    						<img src='../images/events/img_2_1.jpg' class=img-thumbnail width=100% id=imgscale>
			    					</div>
			    					<div class=col-md-6>
			    						<img src='../images/events/img_2_2.jpg' class=img-thumbnail width=100% id=imgscale>
			    					</div>
			    				</div>
			    			</div>
			    			</span></div>";
			    			echo "</li>";
			    		}
			    		mysqli_close($cn);			    		
			    	?>
				  </ul>
				</div>
			</div>
		</div>
	</div>
	<?php
		include '../js/index.php';
	?>
</body>
</html>