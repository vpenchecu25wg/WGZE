<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHPren proba</title>
</head>
<body>
    <!-- localhost/ariketa -->
    <?php
    // 1 ariketa
    $solairu = 5;
    $atea = 12;

    for($x = 0; $x < $solairu; $x++){
        echo "Solairu $x <br>";
        for($j = 1; $j <= $atea; $j++){
            echo "Atea $j <br>";
        }
        echo "<br>";
    }

    ?>
</body>
</html>