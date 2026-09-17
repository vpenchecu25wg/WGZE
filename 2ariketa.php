<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 ariketa</title>
</head>
<body>
    <?php
    $zenbakibat = 12;
    $zenbakibi = 23;
    $zenbakihiru = 4;
    $handiena = 0;
    echo "Zenbakiak: " . $zenbakibat .", " .  $zenbakibi .", " . $zenbakihiru. ".";
    echo "<br>";
    if ($zenbakibat > $zenbakibi){
        $handiena = $zenbakibat;

    }
        else{
            $handiena = $zenbakibi;
        }
    if($handiena < $zenbakihiru){
        $handiena = $zenbakihiru;
    }

    echo "Zenbaki handiena $handiena da."

    ?>
</body>
</html>