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

    $filma1 = new Film('Spider man', 1234,1999,5);

    $filma1->ikusifilma();


?>
</body>
</html>