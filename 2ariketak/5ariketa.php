<?php
$hilabeteeguna = array("Urtarrila"=>31, "Otsaila"=>28,"Martxoa"=>31,"Apirila"=>30,"Maiatza"=>31,"Ekaina"=>30,"Uztaila"=>31,"Abuztua"=>31,
                        "Iraila"=>30,"Urria"=>31,"Azaroa"=>30,"Abendua"=>31);

echo '<table style="border-collapse: collapse; border: 1px solid black;">';

echo '<tr style="border-collapse: collapse; border: 1px solid black; ">';
foreach ($hilabeteeguna as $hilabetea => $egunak) {
    echo '<th style="border-collapse: collapse; border: 1px solid black; padding: 10px">';
    print $hilabetea;
    echo '</th>';
}
echo '</tr>';

echo '<tr style="border-collapse: collapse; border: 1px solid black;">';
foreach ($hilabeteeguna as $hilabetea => $egunak){
    echo '<td style="border-collapse: collapse; border: 1px solid black; padding: 10px; text-align:center">';
    print $egunak;
    echo '</td>';

}
echo '</tr>';

echo '</table>';
?>