<html>
	<head>
		<title>Our Team</title>
		<?php
			include '../headerfile/index.php';
		?>
		<style type="text/css">
			#eventback
			{
				background-color: white; 
			}
			#card-show
			{
				background-color: rgb(248, 248, 248);
			}
			#cardscale
			{
				transition:0.5s;
			}

			#cardscale:hover
			{
				transform:scale(1.05);
				z-index: 2;
				box-shadow: 0.5px 0.5px 0.5px #283e4a;
				cursor: pointer;
				border-collapse: collapse;
			}
		</style>
		<script type="text/javascript">
			function cgover(id)
			{
				document.getElementById(id).className="img-thumbnail";
			}
			function cgback(id)
			{
				document.getElementById(id).className="rounded-circle";
			}
		</script>
	</head>
	<body style="background-color: rgb(248, 248, 248);font-family: 'Nunito',sans-serif;" onload=changeclass("team")>
		<?php
			include '../headerbody/index.php';
		?>
		<div class="py-3">
			<div class="container">
				<div id="eventback" class="row">
					<div class="col-md-12">
						<br>
						<blockquote style="border-color: #00A652;">
							<h1 style="color: #00A652;">Team</h1>
						</blockquote>
						<br>
					</div>
				</div>
				<div class="row" id="eventback">
					<div class="col-md-12">
						<br>
						<h5 class="design-inside"> CSI COORDINATORS </h5>
						<br><br>
					</div>
					<div class="col-md-6 center" id="cardscale" onmouseover="cgover('img12')" onmouseout="cgback('img12')">
				      	<div class="card">
					        <div class="card-image">
					          <img class="rounded-circle" src="../images/teams/vidhya.jpg" 
					          style="width: 50%;margin: 10px auto;" id="img12">
					        </div>
					        <div class="card-content" id="card-show">
					          <h3>Dr. V.Vidhya, Ph.D.,</h3>
					          <h5>HOD Incharge-IT,Professor</h5>
					          <p>CSI-SVCE Student Chapter Counselor</p>
					        </div>
						</div>
					</div>
					<div class="col-md-6 center" id="cardscale" onmouseover="cgover('img8')" onmouseout="cgback('img8')">
				      	<div class="card">
					        <div class="card-image">
					          <img class="rounded-circle" src="../images/teams/ranjith.jpg" 
					          style="width: 50%;margin: 10px auto;" id="img8">
					        </div>
					        <div class="card-content" id="card-show">
					          <h3>Mr. V.Ranjith, M.E.,</h3>
					          <h5>Assistant Professor</h5>
					          <p>Assistant CSI-Incharge, SVCE</p>
					        </div>
						</div>
					</div>
					<div class="col-md-6 center" id="cardscale" onmouseover="cgover('img9')" onmouseout="cgback('img9')">
				      	<div class="card">
					        <div class="card-image">
					          <img class="rounded-circle" src="../images/teams/uvaraj.jpg" 
					          style="width: 50%;margin: 10px auto;" id="img9">
					        </div>
					        <div class="card-content" id="card-show">
					          <h3>Mr. S.Uvaraj Arutkumaran, M.E.,</h3>
					          <h5>Assistant Professor</h5>
					          <p>CSI-Incharge, Department of Information Technology</p>
					        </div>
						</div>
					</div>
					<div class="col-md-6 center" id="cardscale" onmouseover="cgover('img10')" onmouseout="cgback('img10')">
				      	<div class="card">
					        <div class="card-image">
					          <img class="rounded-circle" src="../images/teams/lakshmana.jpg" 
					          style="width: 50%;margin: 10px auto;" id="img10">
					        </div>
					        <div class="card-content" id="card-show">
					          <h3>Mr. M. P.Lakshmana Kumar, M.E.,</h3>
					          <h5>Assistant Professor</h5>
					          <p>CSI-Incharge, Department of Computer Science and Engineering</p>
					        </div>
						</div>
					</div>
					<div class="col-md-4 center" id="cardscale" style="margin: auto;"onmouseover="cgover('img11')" onmouseout="cgback('img11')">
				      	<div class="card">
					        <div class="card-image">
					          <img class="rounded-circle" src="../images/teams/vidya.jpg" 
					          style="width: 50%;margin: 10px auto;" id="img11">
					        </div>
					        <div class="card-content" id="card-show">
					          <h3>Ms. M.Vidya, M.E.,</h3>
					          <h5>Assistant Professor</h5>
					          <p>CSI-Incharge, Department of Electronics and communication Engineering</p>
					        </div>
						</div>
					</div>
				</div>

				<div class="row" id="eventback">
					<div class="col-md-12">
						<br>
						<h5 class="design-inside"> OFFICE BEARERS </h5>
						<br><br>
					</div>
					<div class="col-md-6 center" id="cardscale" onmouseover="cgover('img1')" onmouseout="cgback('img1')">
				      	<div class="card">
					        <div class="card-image">
					          <img class="rounded-circle" src="../images/teams/chairman.jpg" 
					          style="width: 50%;margin: 10px auto;" id="img1">
					        </div>
					        <div class="card-content" id="card-show">
					          <h3>Abishaik Mohan</h3>
					          <p>Chairman</p>
					        </div>
						</div>
					</div>
					<div class="col-md-6 center" id="cardscale" onmouseover="cgover('img2')" onmouseout="cgback('img2')">
				      	<div class="card">
					        <div class="card-image">
					          <img class="rounded-circle" src="../images/teams/vicechairman.jpg" 
					          style="width: 50%;margin: 10px auto;" id="img2">
					        </div>
					        <div class="card-content" id="card-show">
					          <h3>Shakthi Narayan</h3>
					          <p> Vice Chairman</p>
					        </div>
						</div>
					</div>
					<div class="col-md-6 center" id="cardscale" onmouseover="cgover('img3')" onmouseout="cgback('img3')">
				      	<div class="card">
					        <div class="card-image">
					          <img class="rounded-circle" src="../images/teams/secretary.png" 
					          style="width: 50%;margin: 10px auto;" id="img3">
					        </div>
					        <div class="card-content" id="card-show">
					          <h3>Jeyashree S</h3>
					          <p>General Secratary</p>
					        </div>
						</div>
					</div>
					<div class="col-md-6 center" id="cardscale" onmouseover="cgover('img4')" onmouseout="cgback('img4')">
				      	<div class="card">
					        <div class="card-image">
					          <img class="rounded-circle" src="../images/teams/treasurer.png" 
					          style="width: 50%;margin: 10px auto;" id="img4">
					        </div>
					        <div class="card-content" id="card-show">
					          <h3>Rakesh Elamaran</h3>
					          <p>Treasurer</p>
					        </div>
						</div>
					</div>
					<div class="col-md-4 center" id="cardscale" onmouseover="cgover('img5')" onmouseout="cgback('img5')">
				      	<div class="card">
					        <div class="card-image">
					          <img class="rounded-circle" src="../images/teams/rahulexecutive.png" 
					          style="width: 50%;margin: 10px auto;" id="img5">
					        </div>
					        <div class="card-content" id="card-show">
					          <h3>Rahul R K</h3>
					          <p>Executive Member</p>
					        </div>
						</div>
					</div>
					<div class="col-md-4 center" id="cardscale" onmouseover="cgover('img6')" onmouseout="cgback('img6')">
				      	<div class="card">
					        <div class="card-image">
					          <img class="rounded-circle" src="../images/teams/keshavexecutive.jpg" 
					          style="width: 50%;margin: 10px auto;" id="img6">
					        </div>
					        <div class="card-content" id="card-show">
					          <h3>Keshav E</h3>
					          <p>Executive Member</p>
					        </div>
						</div>
					</div>
					<div class="col-md-4 center" id="cardscale" onmouseover="cgover('img7')" onmouseout="cgback('img7')">
				      	<div class="card">
					        <div class="card-image">
					          <img class="rounded-circle" src="../images/teams/ujwalexecutive.jpg" 
					          style="width: 50%;margin: 10px auto;" id="img7">
					        </div>
					        <div class="card-content" id="card-show">
					          <h3>Ujwal V C</h3>
					          <p>Executive Member</p>
					        </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			include '../js/index.php';
		?>
	</body>
</html>