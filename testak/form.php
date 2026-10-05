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
    if(!(empty($_POST['userName'])==true)){
    echo "<p>Kaixo " .$_POST['userName']. "!</p>";
    }else{
    echo "<p>Ez duzu izenik sartu!</p>";
    };
    ?>
</body>
</html>