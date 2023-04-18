<?php
//Excercici 1

function evenOdd($num){
$message ='';
    if ($num%2 === 0){
        $message = '<script> alert("El número '.$num.' es Par") </script>';
    }else{
        $message = '<script> alert("El número '.$num.' es Impar") </script>';
    }
echo $message;

}

//Testing Exercici 1
$num1 = 48;
$num2 = 47;

evenOdd($num1);
echo '</br>';
evenOdd($num2);

//Excercici 2
function countTen2By2(){
    for ($count= 0; $count<=10; $count = $count+2){
        echo $count;
        echo '</br>';
    }
}

//Testing Exercici 3
countTen2By2();

function countNum2By2($num){
    for ($count= 0; $count<=$num; $count = $count+2){
        echo $count;
        echo '</br>';
    }
}

//Testing Exercici 2
countNum2By2(20);
countNum2By2(63);


?>