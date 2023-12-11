<?php
if (isset($_POST["user_name"]) && $_POST["user_name"] != '' && isset($_POST["mail"]) && $_POST["mail"] != '') {
    $name = $_POST["user_name"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $birthday = $_POST["birthday"];
    $mail = $_POST["mail"];


    $mysqli_user = "root";
    $mysqli_password = "pass";
    $conn = mysqli_connect("mysql_db", $mysqli_user, $mysqli_password) or die("Нет соединения с MySQL");
    $database = "sample-2";
    mysqli_select_db($conn, $database) or die("Нельзя открыть $database");
    mysqli_set_charset($conn, "cp1251");


    $query = "INSERT INTO notebook (name, city, address, birthday, mail)  VALUES ('$name', '$city', '$address', '$birthday', '$mail')";
    mysqli_query($conn, $query) or die("Нельзя добавить данные таблицу " . mysqli_error($conn));
    print '<p>Данные сохранены';
    print "<p><a href='ex3.php'>Посмотреть все записи</a>";
} else {
?>

<html>

<head>
    <meta charset="utf-8">
    <title> ex2 </title>
</head>

<body>
<?php
print "<p>Записная книжка";
print "<form action='{$_SERVER['PHP_SELF']}' method='post'>";
print "<p> Введите фамилию и имя[*]: <input type='text' name='user_name'>";
print "<p> Введите город: <input type='text' name='city'>";
print "<p> Введите адрес: <input type='text' name='address'>";
print "<p> Введите дату рождения в формате ГГГГ-ММ-ДД: <input type='text' name='birthday'>";
print "<p> Введите e-mail[*]: <input type='text' name='mail'>";
print "<p><input type='submit' value='Записать!'>";
print "<p>Поля, помеченные [*], являются обязательными для заполнения!";
print "</form>";
print "<p><a href='ex3.php'>Посмотреть все записи</a>";

?>
<?php
}
?>
</body>

</html>