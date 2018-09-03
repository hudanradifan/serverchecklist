<?php 
include("config/config.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">

</head>
<body>

	<div class="container" id="dashboard">
		<div class="row">
			<div class="col-3 left" style="padding: 0px;">
				<h1 align="center" class="text-white">Indorama</h1>
				<div class="menu">
					<ul class="nav flex-column">
					  <li class="nav-item">
					    <a class="nav-link" href="index.php">Home</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link active">Input Data</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="member.php">Server List</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link disabled" href="login.php">Logout</a>
					  </li>
					</ul>
				</div>
			</div>
			
			<div class="col-9 right">
				<h1>Home</h1><hr>		
				<h3>Server PKPSITE (10.1.2.97)</h3>
					<a href="#">Back</a><br><br>
					<table class="table table-bordered">
						<form action="functions/insert.php" method="POST">
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
									<td align="center"><input type="text" align="center" size="10" class="date" name="date" readonly = "readonly" value="<?php echo date('d/m/y');?>"/></td>
									<td align="center"><input type="text" name="drive_c" size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="text" name="drive_d" size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="text" name="drive_f" size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="text" name="app_error" size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="text" name="app_event" size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="text" name="app_source" size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="text" name="app_category" size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="text" name="sys_error" size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="text" name="sys_event" size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="text" name="sys_source" size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="text" name="sys_category"  size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="text" name="cpu_usage"  size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="text" name="memory_usage" size="4" maxlength="10" width="20px"></td>
									<td align="center"><input type="date" name="antivirus" size="4" maxlength="10" width="20px"></td>

							</tr>
							<tr>
								<td colspan="15" align="right">
									<button type="submit" value="Simpan" name="Simpan" style="width: 170px; height: 30px;">Simpan</button>
								</td>
							</tr>
						</form>
					</table>
			</div>
		</div>

	</div>
	</div> 	<!-- END CONTAINER -->
</body>
</html>