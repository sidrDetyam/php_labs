<html>
<head>
    <title> z3-5. Массивы </title>
</head>
<body>

<?php

function print_array($array)
{
    print "<p>";
    foreach ($array as $i) {
        print "$i  ";
    }
}

$treug = array();
for ($i = 1; $i <= 10; $i++) {
    $treug[] = $i * ($i + 1) / 2;
}
print_array($treug);

$kvd = array();
for ($i = 1; $i <= 10; $i++) {
    $kvd[] = $i * $i;
}
print_array($kvd);

$rez = array_merge($treug, $kvd);
print_array($rez);

sort($rez);
print_array($rez);

array_shift($rez);
print_array($rez);

$rez = array_unique($rez);
print_array($rez);

?>
</body>
</html>