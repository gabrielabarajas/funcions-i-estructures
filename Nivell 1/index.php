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
//Testing Exercici 2
echo 'Testing Excercici 2 </br>';
countTen2By2();

//Excercici 3
function countNum2By2($num){
    for ($count= 0; $count<=$num; $count = $count+2){
        echo $count;
        echo '</br>';
    }
}
//Testing Exercici 3
echo 'Testing Excercici 3 </br>';
countNum2By2(20);
countNum2By2(63);

//Excercici 4
function count102By2($num){
    $num = 10;
    for ($count= 0; $count<=$num; $count = $count+2){
        echo $count;
        echo '</br>';
    }
}

//Testing Excercici 4
echo 'Testing Excercici 4 </br>';
count102By2(20);
count102By2(10000);

//Exercici 5
function calculateGrade($grade){
    if ($grade < 33){
        $status = "Reprovat";
    }else if(($grade >= 33) && ($grade <= 44)){
        $status = "Tercera Divisió";
    }else if(($grade >= 45) && ($grade <= 59)){
        $status = "Segona Divisió";
    }else{
        $status = "Primera Divisió";
    }
    echo "El grau del estudiant ets :  ". $status."</br>";

}
//Testing Excercici 5
echo 'Testing Excercici 4 </br>';
calculateGrade(25);
calculateGrade(34);
calculateGrade(49);
calculateGrade(60);
calculateGrade(63);

?>