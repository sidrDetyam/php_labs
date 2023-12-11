<?php
$mysqli_user = "root";
$mysqli_password = "pass";
$conn = mysqli_connect("mysql_db", $mysqli_user, $mysqli_password) or die("Нет соединения с MySQL");

$database = "sample";

mysqli_select_db($conn, $database)
or die("Нельзя открыть $database");