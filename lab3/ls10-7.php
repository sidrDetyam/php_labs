<html>
<head>
    <title> Листинг 10-4. Обработка данных формы
        из листинга 10-3 </title></head>
<body>

<?php

print "<ul>\n";

$PARAMS = (isset($_POST)) ? $_POST : $_GET;

foreach ($PARAMS as $key => $value) {  #1

    if (gettype($value) == "array") {  #2
        print "$key = <br>\n";

        foreach ($value as $v)
            print "$v<br>";
    }  #2

    else {

        print "$key = $value<br>\n";
    }
}  #1
print "</ul>\n";

?>
</body>
</html>