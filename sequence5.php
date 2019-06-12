<?php

$sequence = array(40, 50, 60, 10, 20, 30);
function almostIncreasingSequence($sequence) {
    $booly = true;
    $endLoop = (count($sequence) - 1);
    $arrSpliced = [];
    $arrLimitCount = count($arrSpliced);
    $arrUnique = array_unique($sequence);
    
    for($i = 0; $i < $endLoop; $i++){
        $iPlusOne = $i + 1;
        $iMinusOne = $i - 1;
        $endLoop = count($sequence) - 1;
            if ($sequence[$iPlusOne] < $sequence[0]) {
                if ($i == 0){
                    $arrSpliced[] = array_splice($sequence, $i, 1);
                    $endLoop = count($sequence) - 1;
                    print_r($arrSpliced); 
                    echo "First";
                } else if ($sequence[$iPlusOne] > $sequence[$iMinusOne]){
                    $arrSpliced[] = array_splice($sequence, $i, 1);
                    $endLoop = count($sequence);
                    print_r($arrSpliced);
                    echo "Secondjj";
                    echo $iMinusOne . " ";
                    echo $iPlusOne . " ";
                    echo $i . " ";
                } else if ($sequence[$iPlusOne] < $sequence[$iMinusOne]){
                    echo "two";
                    $arrSpliced[] = array_splice($sequence, $iPlusOne, 1);
                    $endLoop = count($sequence);
                    print_r($arrSpliced);
                    echo "Third" . ' ';
                    echo $i;
                } else {
                    $arrSpliced[] = array_splice($sequence, $iPlusOne, 1);
                    $endLoop = count($sequence);
                    print_r($arrSpliced);
                    echo "Fourth";
                }
             } else if (array_unique($sequence) != $sequence){
                $arrSpliced[] = array_slice($sequence, $iPlusOne, 1);
            }
            if (count($arrSpliced) < 2) {
                $booly = true;
            } else {
                $booly = false;
             } 
        }
    echo "<br><br>";
    print_r($sequence);
    var_dump($booly);
}
almostIncreasingSequence($sequence);

?>