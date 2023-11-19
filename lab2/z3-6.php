<html>
<head>
    <title> z3-6. Ассоциативные массивы </title>
</head>
<body>

<?php

function print_map($map)
{
    print "<p>";
    foreach ($map as $key => $val) {
        print "$key = $val<br>";
    }
    print "<p>";
}

$cust = array(
    'cnum' => 2001,
    'cname' => "Hoffman",
    'city' => "London",
    'snum' => 1001,
    'rating' => 100
);
print_map($cust);

function map_doer($op){
    global $cust;
    $op($cust);
    print_map($cust);
}

map_doer("asort");
map_doer("ksort");
map_doer("sort");

?>
</body>
</html>