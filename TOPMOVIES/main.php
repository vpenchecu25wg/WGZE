<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Movies</title>
</head>

<body>
    <?php
    include 'Film.php';

    $filmak = [
        $filma1 = new Film('Spider-Man: No Way Home', 148, 2021, 8),
        $filma2 = new Film('Oppenheimer', 180, 2023, 9),
        $filma3 = new Film('Dune: Part Two', 166, 2024, 8),
        $filma4 = new Film('Avatar: The Way of Water', 192, 2022, 7),
        $filma5 = new Film('Barbie', 114, 2023, 7),
        $filma6 = new Film('Top Gun: Maverick', 131, 2022, 8),
        $filma7 = new Film('Everything Everywhere All at Once', 139, 2022, 8),
        $filma8 = new Film('Deadpool & Wolverine', 128, 2024, 8),
    ];



    echo '<table style="border: 1px solid black">';

    foreach ($filmak as $filmlist) {
        echo '<tr style="border: 1px solid black">';
        echo '<td style="border: 1px solid black">';
        echo 'Izena: ';
        echo $filmlist->getIzena();
        echo '</td>';
        echo '<td style="border: 1px solid black">';
        echo $filmlist->getUrtea();
        echo '</td>';
        echo '<tr>';
    }
    ?>
</body>

</html>