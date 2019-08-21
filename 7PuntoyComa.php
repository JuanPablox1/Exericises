<?php
        //Enter your code here, enjoy!
$entrada = 3;

echo "Tabla de multiplicar del numero ",$entrada,":".PHP_EOL.PHP_EOL;

if($entrada <11){
    
    for ($i = 1; $i <= 10; $i++){
        echo  $entrada," x ",$i," = ",$entrada*$i.PHP_EOL;
    }
}

$numerocuadrado = pow($entrada,2);
echo "".PHP_EOL;
echo $entrada.PHP_EOL;
echo "numero ",$entrada, " al cuadrado es igual a ",$numerocuadrado.PHP_EOL;
echo "La raiz cuadrada del numero ",$entrada," es: ",sqrt($entrada).PHP_EOL;
echo "El seno del numero ",$entrada," es ",sin($entrada).PHP_EOL;
echo "El numero ",$entrada," como numero pi es: ",pi($entrada).PHP_EOL;
$variable = (int) pi($entrada).PHP_EOL;
echo $variable," este es el numero pi pero en su parte entera";