<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Листинг 10-1. Простая HTML-форма</title>
</head>

<body>

<?php
$align = $_GET["align"] ?? "center";
$valign = $_GET["valign"] ?? ["middle"] ;

echo "<table border='1'>\n";
echo "<tr style='height: 100px;'>\n";
echo "\t<td style='width: 100px; text-align:$align;' valign='{$valign[0]}'>";
echo "Текст";
echo "</td>\n";
echo "</tr>\n";
echo "</table>\n";
echo "<p><a href='z4-1a.htm'>назад</a>";
?>

</body>

</html>
