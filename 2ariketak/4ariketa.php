<?php
//5 hitzekin osatutako string bat emanda (adibidez $str = "apple pear lemon watermelon melon"), pasatu array
//asoziatibo batera non hitza izango den bere indizea eta luzera bere balio izango dena.
$str = array("apple"=>0,"pear"=>1,"lemon"=>2,"watermelon"=>3,"melon"=>4);

for($x = 0; $x <= count($str); $x++){
    print $str[$x];
};


?>