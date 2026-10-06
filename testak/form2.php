<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form test</title>
</head>
<body>
    <form method="POST">
    <input type="text" id="userName" name="userName" placeholder="Sartu izena">
    <button>Bidali</button>
    </form>
    <?php
    $klasekoLista = [];
    if(!(empty($_POST['userName'])==true)){
        array_push($klasekoLista, $_POST['userName']);
        echo "count array: " .count($klasekoLista);

    }else{
    echo "<p>Ez duzu izenik sartu!</p>";
    };

    echo print_r($klasekoLista);
    for ($x = 0; $x < count($klasekoLista); $x++){
    echo "<pre>";
    echo "<p>Klaseko lista: " .print_r($klasekoLista[$x]). "!</p>";
    echo "</pre>";
    }

    ?>
</body>
</html>