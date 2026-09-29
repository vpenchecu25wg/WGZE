<?php
$hilabeteak = array("urtarrila"=>"", "otsaila"=>"","martxoa"=>"","apirila"=>"","maiatza"=>"","ekaina"=>"","uztaila"=>"","abuztua"=>"",
                        "iraila "=>"","urria"=>"","azaroa"=>"","abendua"=>"");





function izenaGehitu(array &$hilabeteak){
    $izena = $_POST["izena"];
    $hilabetea = $_POST["hilabetea"];
    
    if (array_key_exists($hilabetea, $hilabeteak)) {
        $hilabeteak[$hilabetea] = $izena;
        echo "Izena gehitu da!";
        echo '<pre></pre>';
        foreach($hilabeteak as $hilabetea => $izenak){
    echo $hilabetea . " : " . $izenak;
     echo '<pre></pre>';
}
    }else{
            echo "Hilabetea ez da existizen";
        }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    izenaGehitu($hilabeteak);
}

?>

<form method="POST">
<p>Hilabetea</p>
    <input type="text" name="hilabetea">
    <p>Izena</p>
    <input type="text" name="izena">
    <br>
    <br>
    <button type="submit">Bidali</button>
</form>
