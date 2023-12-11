<?php
$mysqli_user = "root";
$mysqli_password = "pass";
$conn = mysqli_connect("mysql_db", $mysqli_user, $mysqli_password) or die("Нет соединения с MySQL");
$database = "sample-2";
mysqli_select_db($conn, $database) or die("Нельзя открыть $database");
mysqli_set_charset($conn, "cp1251");

$query = "INSERT INTO notebook (name, city, address, birthday, mail)  
VALUES ('Курдюков Данил', 'Новосибирск', 'Какое-то название 10', '2002-06-11', 'danil@mail.ru')";
mysqli_query($conn, $query)
or die("Ошибка сохранения записи в notebook: " . mysqli_error($conn));

$query = "INSERT INTO notebook (name, city, address, birthday, mail)  
VALUES ('Попова Полина', 'Новосибирск', 'Какое-то название 20', '2001-08-06', 'polina@mail.ru')";
mysqli_query($conn, $query)
or die("Ошибка сохранения записи в notebook: " . mysqli_error($conn));

$query = "INSERT INTO notebook (name, city, address, birthday, mail)  
VALUES ('Паньков Дмитрий', 'Новосибирск', 'Какое-то название 30', '2002-12-27', 'dima@mail.ru')";
mysqli_query($conn, $query)
or die("Ошибка сохранения записи в notebook: " . mysqli_error($conn));