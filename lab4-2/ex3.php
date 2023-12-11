<html>

<head>
    <title> ex3 </title>
</head>

<body>
<?php

function vid_content($conn)
{
    $tab_res = mysqli_query($conn, "SHOW TABLES");
    print "<dl><dd>\n";
    while ($tab_rows = mysqli_fetch_row($tab_res)) {
        if ($tab_rows[0] == "notebook") {
            print "<table border='1'>";
            $query_res = mysqli_query($conn, "SELECT * from $tab_rows[0]");
            $num_fields = mysqli_num_fields($query_res);
            print "<tr>";
            for ($x = 0; $x < $num_fields; $x++) {
                $properties = mysqli_fetch_field_direct($query_res, $x);
                print "<th>";
                print $properties->name;
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

$mysqli_user = "root";
$mysqli_password = "pass";
$conn = mysqli_connect("mysql_db", $mysqli_user, $mysqli_password) or die("Нет соединения с MySQL");
$database = "sample-2";
mysqli_select_db($conn, $database) or die("Нельзя открыть $database");
mysqli_set_charset($conn, "cp1251");
vid_content($conn);

print "<p><a href='ex2.php'>Новая запись</a>";
print "<p><a href='ex4.php'>Изменить запись</a>";
?>
</body>

</html>