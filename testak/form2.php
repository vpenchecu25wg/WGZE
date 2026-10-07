<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form test</title>
</head>
<body>

    <?php
    if(isset($_POST['bidali'])){
        $klasekoLista =  $_POST['klasekoLista']." " .$_POST['izena'];
        echo "klasekoLista: " .$klasekoLista;

    }else{
        $klasekoLista = "";
    };
    echo "<br>";
    ?>
        <form method="POST" action="form2.php">
    <input type="text" name="izena" placeholder="Sartu izena">
    <?php echo "<input type='hidden' name='klasekoLista' value='".$klasekoLista."'>"?>
    <button name="bidali">Bidali</button>
    </form>
</body>
</html>