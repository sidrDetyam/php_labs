<html>
<head>
    <title> z3-2. Вложенные циклы for </title>
</head>
<body>

<?php

$color = $_GET["color"] ?? "blue";

print "<table border=1>\n";
for ($y = 1; $y <= 10; $y++) {
    print "<tr>\n";
    for ($x = 1; $x <= 10; $x++) {
        if($x == 1 && $y == 1){
            print "\t<td bgcolor=red>\n";
        }
        elseif ($y == 1 || $x == 1){
            print "\t<td bgcolor=$color>\n";
        }
        else{
            print "\t<td>\n";
        }
        print "\t\t";
        print ($x + $y);
        print "\n\t</td>\n";
    }
    print "</tr>\n";
}
print "</table>";

?>
</body>
</html>

