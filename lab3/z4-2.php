<html>
<head>
    <title> Листинг 10-8. HTML-форма, вызывающая саму себя
    </title></head>
<body>

<?php


$align = $_GET["align"] ?? "left";
$valign = $_GET["valign"] ?? ["top"];

echo "<table border='1' align='center'>\n";
echo "<tr style='height: 100px;'>\n";
echo "\t<td style='width: 100px; text-align:$align;' valign='{$valign[0]}'>";
echo "Текст";
echo "</td>\n";
echo "</tr>\n";
echo "</table>\n";

?>

<form>
    <div align="center">
        <p><b>Выберите горизонтальное расположение</b></p>
        <p>
            <label>
                <input type="radio" name="align" value="left">
            </label>
            слева
        </p>
        <p>
            <label>
                <input type="radio" name="align" value="center">
            </label>
            по центру
        </p>
        <p>
            <label>
                <input type="radio" name="align" value="right">
            </label>
            справа
        </p>

        <p><b>Выберите вертикальное расположение</b></p>
        <p>
            <label>
                <input type="checkbox" name="valign[]"
                       value="top">
            </label>сверху
        <p>
            <label>
                <input type="checkbox" name="valign[]"
                       value="middle">
            </label>посередине
        <p>
            <label>
                <input type="checkbox" name="valign[]"
                       value="bottom">
            </label>внизу

        <p><input type="submit" value="Выполнить"></p>
    </div>
</form>
</body>

</html>