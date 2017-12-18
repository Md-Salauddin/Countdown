<!DOCTYPE html>

<html>
	<head>
		<title>Count Down</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/design.css">
	</head>

	<body>
		<div class="main">

			<!-- Timer Section --> 
			<div class="left">
				<div>
					<h1>
						C O U N T  D O W N
					</h1>
				</div>

				<div class="left-middle">	
					<div class="boxPosition">
							<input type="text"  id="day" class="inputField" value="0" onchange="dayValue(this.value)"><br>
							<label class="text" id="labelD">Day</label>
					</div>
						
					<div class="boxPosition">
							<input type="text"  id="hour" class="inputField" value="0" onchange="hourValue(this.value)"><br>
							<label class="text" id="labelH">Hour</label>
					</div>
						
					<div class="boxPosition">
							<input type="text"  id="min" class="inputField" value="0" onchange="minValue(this.value)"><br>
							<label class="text" id="labelM">Minute</label>
					</div>
						
					<div class="boxPosition">
							<input type="text"  id="sec" class="inputField" value="0" onchange="secValue(this.value)" onclick="stop()"><br>
							<label class="text" id="labelS">Second</label>
					</div>	
				</div>
			</div>
			<!-- --> 

			<!-- Control Section -->
			<div class="right">
				<div class="right-middle">
					<table class="table table-hover">
						<tr>
							<td>
								<label>Font Size</label>
								<p>The counter font size in pixels unit</p>
								<input type="number" id="counterFont" class="form-control" onchange="clockFont(this)">
							</td>
						</tr>

						<tr>
							<td>
								<label>Counter Background Color</label>
								<p>The counter background color</p>
								<input type="color" id="counterBG" class="form-control" value="#000000" onchange="clockBG(this)">
							</td>
						</tr>

						<tr>
							<td>
								<label>Label Font</label>
								<p>The label font size</p>
								<input type="number" id="labelFont" class="form-control" onchange="labelFont(this)">
							</td>
						</tr>

						<tr>
							<td>
								<label>Counter Color</label>
								<p>The counter color</p>
								<input type="color" id="counterFontBG" class="form-control" value="#000000" onchange="clockFontColor(this)">
							</td>
						</tr>

						<tr>
							<td>
								<label>Label Color</label>
								<p>The counter background color</p>
								<input type="color" id="labelBG" class="form-control" value="#000000" onchange="labelFontColor(this)">
							</td>
						</tr>
					</table>
				</div>
			</div>

		</div>

		<script type="text/javascript" src="javascript/time.js"></script>
	</body>

</html>