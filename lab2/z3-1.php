<html>
<head>
    <title> Листинг 7-6. Вложенные циклы for </title>
</head>
<body>

<?php

$color = $_GET["color"] ?? "red";

print "<table border=1>\n";
$y = 1;
while ($y <= 10) {
    print "<tr>\n";
    $x = 1;
    while ($x <= 10) {
        print $y != $x? "\t<td>" : "\t<td bgcolor=$color>";
        print ($x * $y);
        print "</td>\n";
        ++$x;
    }
    print "</tr>\n";
    ++$y;
}
print "</table>";

?>

</body>
</html>

