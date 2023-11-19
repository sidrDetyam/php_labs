<html>
<head>
    <title> z2-5. Использование блоков else и elseif </title></head>
<body>

<?php

$lang = $_GET["lang"];
$message = "язык неизвестен";

/// maybe use maps?
if ($lang === "ru") {
    $message = "русский";
} elseif ($lang === "en") {
    $message = "английский";
} elseif ($lang === "fr") {
    $message = "французский";
} elseif ($lang === "de") {
    $message = "немецкий";
}

print "<p> Язык: $message"

?>
</body>
</html>