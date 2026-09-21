<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 ariketa</title>
</head>
<body>
<?php
$adina = 20;

$output = match (true) {
    $adina <= 10 => "0 eta 10 urteen tartean dago",
    $adina > 10 && $adina <= 20 => "10 eta 20 urteen tartean dago",
    $adina > 20 && $adina <= 30 => "20 eta 30 urteen tartean dago",
    $adina > 30 && $adina <= 40 => "30 eta 50 urteen tartean dago",
    $adina > 50 && $adina <= 60 => "50 eta 60 urteen tartean dago",
    $adina > 70 && $adina <= 80 => "70 eta 80 urteen tartean dago",
    $adina > 90 && $adina <= 100 => "90 eta 100 urteen tartean dago",
    $adina > 100 => "Oso zaharra zara"
};

echo "<p>$output</p>";
?>
</body>
</html>