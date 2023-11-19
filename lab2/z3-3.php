<html>
<head>
    <title> z3-3. Функция-переменная </title>
</head>
<body>

<?php

function helper($message, $color){
    print "<p style=\"color:$color\">$message</p>";
}

function Ru($color)
{
    helper("Здравствуйте!", $color);
}

function En($color)
{
    helper("Hello!", $color);
}

function Fr($color)
{
    helper("Bonjour!", $color);
}

function De($color)
{
    helper("Guten Tag!", $color);
}

function Unknown($color)
{
    helper("Неизвестный язык, варианты: [Ru,En,Fr,De]", $color);
}

$language = $_GET["lang"] ?? "Unknown";
$color = $_GET["color"] ?? "black";

$language($color);

?>
</body>
</html>

