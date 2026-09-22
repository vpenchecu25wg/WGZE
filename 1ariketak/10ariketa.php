<?php
$guztira_erosketa = 25.00;
$erosketa_mota = "maskotak";

$output = match ( true ){
    $guztira_erosketa < 19 && $erosketa_mota == "maskotak" => ($guztira_erosketa = $guztira_erosketa + ($guztira_erosketa*10)/100). "-ezin bidali",
    $guztira_erosketa < 19 && $erosketa_mota == "jantziak" => ($guztira_erosketa = $guztira_erosketa +($guztira_erosketa*21)/100).  "€ bidalketa gastuak 9 euro dira.",
    $guztira_erosketa > 19 && $guztira_erosketa < 40 && $erosketa_mota == "maskotak"=> ($guztira_erosketa = $guztira_erosketa +($guztira_erosketa*10)/100). "€ Bidalketa gastuak 9 euro dira.",
    $guztira_erosketa > 19 && $guztira_erosketa < 40 && $erosketa_mota == "jantziak"=> ($guztira_erosketa = $guztira_erosketa +($guztira_erosketa*21)/100).  "€ Bidalketa gastuak 9 euro dira.",
    $guztira_erosketa > 80 && $erosketa_mota == "maskotak"=> ($guztira_erosketa = $guztira_erosketa +($guztira_erosketa*10)/100). "€ bidalketa gastuak doakoak dira.",
    $guztira_erosketa > 80 && $erosketa_mota == "jantziak"=> ($guztira_erosketa = $guztira_erosketa +($guztira_erosketa*21)/100). "€ bidalketa gastuak doakoak dira."
};

echo $output;
?>