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
function calculateCost($totMinutes){
    $count = $totMinutes - 3;
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

//Excercici 3
?>
<form action="index.php" method="POST">
    <div style="display:flex; flex-direction:column; width: 25%">
        <input type="number" name="qty-choc" placeholder="Quantitat de xocolata">
        <input type="number" name="qty-gum" placeholder="Quantitat de xiclets">
        <input type="number" name="qty-carl" placeholder="Quantitat de caramels">
        <input type="submit" value="Calcular Total">
    </div>
</form>
<?php
if (isset($_POST["qty-choc"])){
    $amounChoc = $_POST["qty-choc"];
}
if (isset($_POST["qty-gum"])){
    $amounGum = $_POST["qty-gum"];
}
if (isset($_POST["qty-carl"])){
    $amounCarml = $_POST["qty-carl"];
}

function calcChocolate($amount){
    return ($amount*1);
}
function calcGum($amount){
    return ($amount*0.5);
}
function calcCaramel($amount){
    return ($amount*1.50);
}

function calcTotal($num1,$num2,$num3){
    return (calcChocolate($num1) + calcGum($num2) + calcCaramel($num3));
}
// echo $amounChoc."</br>";
// echo $amounGum."</br>";
// echo $amounCarml."</br>";

//Testing Excercici 3
if (isset($_POST["qty-choc"]) && isset($_POST["qty-gum"]) && isset($_POST["qty-carl"])){
    $total = calcTotal($amounChoc,$amounGum,$amounCarml);
    echo "El total de la compra es: ". $total;
}
;

?>