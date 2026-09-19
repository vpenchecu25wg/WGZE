<!DOCTYPE html>
<html lang="en">
<head>
    <title>1 ariketa</title>
</head>
<body>
    <!-- localhost/ariketa -->
    <?php
    $solairu = 12;
    $atea = 5;

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