<?php
session_start();

$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "serverlist";

$link   = mysqli_connect($host, $user, $pass, $db);

if (!$link) {
  die("Connection error: " . mysqli_connect_errpr());
}


?>