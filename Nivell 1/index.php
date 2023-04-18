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

//Testing
$num1 = 48;
$num2 = 47;

evenOdd($num1);
echo '</br>';
evenOdd($num2);

?>