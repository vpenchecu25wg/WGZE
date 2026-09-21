<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 ariketa</title>
</head>
<body>
    <?php
    $adina = 10;
    $altuera = 20;
    $lagunduta = true;
    $output = match(true){
        $adina >= 10 || $altuera > 120 => "Sartu dezakezu!",
        $adina > 6 || $lagunduta == true => "Sartu dezakezu zure lagunarekin",
        $adina < 10 || $altuera < 120 => "Ezin zara sartu."
    };

    echo "<h1> $output </h1>";

    ?>
</body>
</html>