<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 ariketa</title>
</head>
<body>
        <!-- Hitz bat emanda, palindromoa den adierazi. Palindromoa ezkerretik eskuinera edo eskuinetik ezkerrera berdin irakurtzen den hitz edo esaldi bat da. -->
    <?php
    $hitza = "liburua";
    $gordeta = [];
    $prueba = array("e","r","t","xc","f");
    for($x = 0; $x < strlen($hitza)/2; $x++){
        array_push($gordeta, strchr($hitza, $x));
    }
    echo(var_dump($prueba));

?>
</body>
</html>