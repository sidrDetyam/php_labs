<html>

<head>
    <title> z10-5 </title>
</head>

<body>
<?php

$GLOBALS['rus_name'] = array(
    'snum' => 'Номер продавца',
    'sname' => 'Имя продавца',
    'city' => 'Город',
    'comm' => 'Комиссионные продавца',
    'cnum' => 'Номер покупателя',
    'cname' => 'Имя покупателя',
    'rating' => 'Рейтинг покупателя',
    'onum' => 'Номер заказа',
    'amt' => 'Сумма заказа',
    'odate' => 'Дата заказа'
);

function vid_structure($conn, $table_name)
{
    $tab_res = mysqli_query($conn, "SHOW TABLES");
    print "<dl>\n";
    while ($tab_rows = mysqli_fetch_row($tab_res)) {
        if (in_array($tab_rows[0], $table_name)) {
            print "<h4>Структура таблицы $tab_rows[0]</h4>";
            $query_res = mysqli_query($conn, "DESCRIBE $tab_rows[0]");
            print "<dl>\n";
            foreach ($query_res->fetch_all() as $val) {
                print "<dd>";
                print " $val[1]";
                print " $val[0]";
                print "<i>";
                if ($val[2] == "NO")
                    print " not null";
                if ($val[3] == "PRI")
                    print " primary_key";
                if ($val[3] == "MUL")
                    print " foreign_key";
                print "</i></dd>";
            }
            print "</dl>\n";
        }
    }
    print "</dl>\n";
}

function vid_content($conn, $table_name)
{
    $tab_res = mysqli_query($conn, "SHOW TABLES");
    print "<dl>\n";
    while ($tab_rows = mysqli_fetch_row($tab_res)) {
        if (in_array($tab_rows[0], $table_name)) {
            print "<h4>Содержимое таблицы $tab_rows[0]</h4>\n";
            print "<table border='1'>";
            $query_res = mysqli_query($conn, "SELECT * from $tab_rows[0]");
            $num_fields = mysqli_num_fields($query_res);
            print "<tr>";
            for ($x = 0; $x < $num_fields; $x++) {
                $properties = mysqli_fetch_field_direct($query_res, $x);
                print "<th>";
                print $GLOBALS['rus_name'][$properties->name];
                print "<br>";
                print $properties->name;
                print "</br>";
                print "</th>";
            }
            print "</tr>";
            while ($a_row = mysqli_fetch_row($query_res)) {
                print "<tr>\n";
                foreach ($a_row as $field)
                    print "\t<td>$field</td>\n";
                print "</tr>\n";
            }

            print "</table>";
        }
    }
}
print "</dl>\n";

if (isset($_GET["str"])) {
    $str = $_GET["str"];
    vid_structure($conn, $str);
}

if (isset($_GET["cont"])) {
    $cont = $_GET["cont"];
    vid_content($conn, $cont);
}

print "<p style='text-align: left'><a href='z10-1.html'>Возврат к выбору таблицы</a>";

?>
</body>

</html>