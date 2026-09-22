<?php
$lehenengoMultzoa = [1,2,3,4,5,6,7,8,9,10];
$bigarrenMultzoa  = [];
$gordetzeko = 1;
$arrayLenght = count($lehenengoMultzoa);

for ( $x = 0; $x < $arrayLenght; $x++){
        for( $j = 0; $j < $lehenengoMultzoa[$x]; $j++ ){
            $gordetzeko = $gordetzeko * $lehenengoMultzoa[$j];
        }
    array_push($bigarrenMultzoa, $gordetzeko);    
}     

echo implode(", ",$lehenengoMultzoa);
echo '<pre></pre>';
echo implode(", ",$bigarrenMultzoa);


?>