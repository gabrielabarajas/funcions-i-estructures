<?php
// Exercici 1
function showYears(){
    $start = 1960;
    $end = 2016;
    echo "Los años en que se celebraron juegos olímpicos son: </br>";

    for ($i = $start; $i <= $end; $i = $i + 4 ){
        echo $i."</br>";
    }
}
//Testing Excercici 1
showYears();

// Exercici 2
function calculateCost($totSeconds){
    $count = $totSeconds - 3;
    $total = 0;
    
    if ($count < 3){
        echo "El total de segundos de la llamada no es válido. </br>";
    }else{
        $total = 10 + ($count*5); 
        echo "El costo de la llamada es: ". $total. " céntimos. </br>";
    }
}
//Testing Excercici 2
calculateCost(6);
calculateCost(0);
calculateCost(-2);
?>