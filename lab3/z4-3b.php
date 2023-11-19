<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ответы</title>
</head>

<body>

<?php
$correct = array("6", "9", "4", "1", "3", "2", "5", "8", "7");
$name = $_POST["name"];
$answers = $_POST["answers"];
echo "<p>$name";

$correct_count = count($correct) - count(array_diff_assoc($answers, $correct));

switch ($correct_count) {
    case 9:
        echo "<p>великолепно знаете географию";
        break;
    case 8:
        echo "<p>отлично знаете географию";
        break;
    case 7:
        echo "<p>очень хорошо знаете географию";
        break;
    case 6:
        echo "<p>хорошо знаете географию";
        break;
    case 5:
        echo "<p>удовлетворительно знаете географию";
        break;
    case 4:
        echo "<p>терпимо знаете географию";
        break;
    case 3:
        echo "<p>плохо знаете географию";
        break;
    case 2:
        echo "<p>очень плохо знаете географию";
        break;
    default:
        echo "<p>вообще не знаете географию";
}

echo "<p><a href='z4-3a.php'>назад</a>";
?>

</body>

</html>
