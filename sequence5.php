<?php

$sequence = array(40, 50, 60, 10, 20, 30);
function almostIncreasingSequence($sequence) {
    $booly = true;
    $endLoop = (count($sequence) - 1);
    $arrSpliced = [];
    $arrLimitCount = count($arrSpliced);
    $arrUnique = array_unique($sequence);

    for($i = 0; $i < $endLoop; $i++){
        echo "<br>";
        $iPlusOne = $i + 1;
        $iMinusOne = $i - 1;
        $endLoop = count($sequence) - 1;
            if ($i > 0 && $sequence[$i] < $sequence[0]){
                if ($sequence[$iPlusOne] < $sequence[$i]){
                    $arrSpliced[] = array_splice($sequence, $i, 1);
                    $endLoop = count($sequence);
                    echo "zero";
                }
                if ($i == 0){
                    $arrSpliced[] = array_slice($sequence, $i, 1);
                    $endLoop = count($sequence) - 1;
                    print_r($arrSpliced); 
                    echo "First";
                } else if ($sequence[$iPlusOne] > $sequence[$iMinusOne]){
                    $arrSpliced[] = array_slice($sequence, $i, 1);
                    $endLoop = count($sequence);
                    print_r($arrSpliced);
                    echo "Second";
                    echo $iMinusOne . " ";
                    echo $iPlusOne . " ";
                    echo $i . " ";
                } else if ($sequence[$iPlusOne] < $sequence[$iMinusOne]){
                    $arrSpliced[] = array_slice($sequence, $iPlusOne, 1);
                    $endLoop = count($sequence);
                    print_r($arrSpliced);
                    echo "Third" . ' ';
                    echo $i;
                } else if ($sequence[$iPlusOne] < $sequence[0] || $sequence[$i] < $sequence[0]) {
                    $arrSpliced[] = array_slice($sequence, $iPlusOne, 1);
                    $endLoop = count($sequence);
                    print_r($arrSpliced);
                    echo "Fourth";
                }  else if ($iPlusOne === $i) {
                    $arrSpliced[] = array_slice($sequence, $i, 1);
                    $endLoop = count($sequence);
                } else {
                    print(array_unique($sequence));
                    echo "unihorn";
                }
            if (array_unique($sequence) != $sequence) {
                $arrSpliced[] = array_slice($sequence, $iPlusOne, 1);
                }
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