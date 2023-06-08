<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbregistro";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect($servername, $username, $password, $dbname);

?>