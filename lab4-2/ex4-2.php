<html>

<head>
    <meta charset="utf-8">
    <title> ex4-help </title>
</head>

<body>
<?php

$mysqli_user = "root";
$mysqli_password = "pass";
$conn = mysqli_connect("mysql_db", $mysqli_user, $mysqli_password) or die("Нет соединения с MySQL");
$database = "sample-2";
mysqli_select_db($conn, $database) or die("Нельзя открыть $database");
mysqli_set_charset($conn, "cp1251");

$new_value = $_POST["value"];
$id = $_POST["id"];

switch ($_POST["res"][0]) {
    case "name":
        $query = "UPDATE notebook SET name = '$new_value' WHERE id = $id";
        break;
    case "city":
        $query = "UPDATE notebook SET city = '$new_value' WHERE id = $id";
        break;
    case "address":
        $query = "UPDATE notebook SET address = '$new_value' WHERE id = $id";
        break;
    case "birthday":
        $query = "UPDATE notebook SET birthday = '$new_value' WHERE id = $id";
        break;
    case "mail":
        $query = "UPDATE notebook SET mail = '$new_value' WHERE id = $id";
        break;
}
mysqli_query($conn, $query)
or die("Ошибка изменения записи " . mysqli_error($conn));

print "<p>Сохранено";
print "<p><a href='ex3.php'>Посмотреть все записи</a>";
?>

</body>

</html>