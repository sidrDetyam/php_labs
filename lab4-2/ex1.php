<?php
$mysqli_user = "root";
$mysqli_password = "pass";
$conn = mysqli_connect("mysql_db", $mysqli_user, $mysqli_password) or die("Нет соединения с MySQL");

$database = "sample-2";

mysqli_select_db($conn, $database) or die("Нельзя открыть $database");
mysqli_set_charset($conn, "cp1251");

$query = "DROP TABLE IF EXISTS notebook";
mysqli_query($conn, $query)
or die("Нельзя удалить таблицу notebook: " . mysqli_error($conn));

$query = "CREATE TABLE notebook (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50),
        city VARCHAR(50),
        address VARCHAR(50),
        birthday DATE,
        mail VARCHAR(20) NOT NULL)";

mysqli_query($conn, $query)
or die("Нельзя создать таблицу notebook: " . mysqli_error($conn));