<?php
if (isset($_POST["site"]) && $_POST["site"] != '') {
    header("Location: {$_POST["site"]}");
    exit;
}
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<head>
    <title> z4-5 </title>
</head>

<body>

<?php

$list_sites = array(
    "https://www.ya.ru",
    "https://www.rambler.ru",
    "https://www.google.com",
    "https://www.yahoo.com",
    "https://www.altavista.com"
);

echo "<form action='{$_SERVER['PHP_SELF']}' method='POST'>";
echo "<select name='site'>";
echo "<option value=''>Поисковые системы:";

foreach ($list_sites as $site) {
    echo "<option value='$site'>$site";
}

echo "</select>";
echo "<input type='submit' value='Перейти'>";
echo "</form>";
?>

</body>

</html>