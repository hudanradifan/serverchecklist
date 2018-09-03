<!DOCTYPE>
<html>
<head>
	<title>Testing</title>
	<meta charset="UTF-8">	

	<style>
		
		* {
			
			padding: 0px;
			margin: 0px;

		}

		body {

			background: #ccc;

		}

		.head {

			width: 100%;
		
		}

		.head h1 {

				padding: 0px 40px;
				line-height: 100px;
				font-size: 50px;
				color: #130f40;
				background: white;
				font-family: sans-serif;
		}

		.head .nav {

			background: #686de0;
			padding: 10px 0 px;
			text-align: center;
			position: absolute;
			width: 100%;

		}

		.nav li {

			list-style-type: none;
			display: inline-block;
			padding: 10px 40px;
			text-align: center;
			border-left: 1px solid white;
			color: white;
			font-size: 18px;

		}

		.box {

			width: 80%;
			height: 80%;
			margin: 100px auto;
			background: white;
			padding: 20px;
			font-size: 25px;
		}

		table {
			width: 100%;
		}

		td {
			text-align: center;
			width: 45px;
		}





	</style>
</head>
<body>	
	<div class="head">
		
		<div class="title">
			<h1>Indorama Polypet</h1>
		</div>


		<div class="nav" id="nav">
			
			<ul>
				<a href=""><li>Home</li></a>
				<a href=""><li>Input Data</li></a>
				<a href=""><li>Server List</li></a>
				<a href=""><li>Cara Penggunaan</li></a>
				<a href=""><li>Logout</li></a>
			</ul>

		</div> 
	</div>

	<div class="box">
		<h2>Server 97</h2>
		<a href="#">Back</a><br><br>
			<table class="table" border="1" cellspacing="0" cellpadding="">
				<tr>
					<td rowspan="2">Tanggal</td>
					<td colspan="3">Harddisk Space</td>
					<td colspan="4">Even Viewer Application</td>
					<td colspan="4">Event Viewer System</td>
					<td colspan="2">Performance</td>
					<td rowspan="2">Anti Virus</td>
				</tr>
				<tr>
					<td>C</td>
					<td>D</td>
					<td>F</td>
					<td>Error</td>
					<td>Event ID</td>
					<td>Source</td>
					<td>Category</td>
					<td>Error</td>
					<td>Event ID</td>
					<td>Source</td>
					<td>Category</td>
					<td>CPU Usage</td>
					<td>Memory Usage</td>
				</tr>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					
				</tr>
			</table>

	</div>

<script type="text/javascript">
	var nav = document.getElementById('nav');

		window.onscroll = function (){
			
			if(window.pageYOffset > 100){
				
				nav.style.position = "fixed";
				nav.style.top = 0;

			} else {

				nav.style.position = "absolute";
				nav.style.top = 100;

			}
		}

</script>	
</body>
</html>