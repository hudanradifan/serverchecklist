<?php 
include('../config/config.php');

$date = $_POST['date'];
$drive_c = $_POST['drive_c'];
$drive_d = $_POST['drive_d'];
$drive_f = $_POST['drive_f'];
$app_error = (int)$_POST['app_error'];
$app_event = $_POST['app_event'];
$app_source = $_POST['app_source'];
$app_category = $_POST['app_category'];
$sys_error = (int)$_POST['sys_error'];
$sys_event = $_POST['sys_event'];
$sys_source = $_POST['sys_source'];
$sys_category = $_POST['sys_category'];
$cpu_usage = $_POST['cpu_usage'];
$memory_usage = $_POST['memory_usage'];
$antivirus = date('Y-m-d');

$query = "INSERT INTO tbl_97 VALUES(
			'$date','$drive_c','$drive_d','$drive_f',$app_error,'$app_event','$app_source','$app_category',$sys_error,'$sys_event','$sys_source','$sys_category','$cpu_usage','$memory_usage','$antivirus')";

// var_dump($_POST);

$insert = mysqli_query($link,$query);

if($insert) {
	header('Location: index.php');
} else {
	echo "Input Data Gagal";
}

 ?>