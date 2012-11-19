<?php

//a)
$string = '0987';
$inteiro = (int)$string;
echo var_dump($inteiro);
echo "</br>";
//b)
$inteiro = (string)245;
echo var_dump($inteiro);
echo "</br>";
//c)

$string = "micareta, carnaval, abada";
$array = explode(',', $string);
print_r($array);
echo "<br>";

//d)
$list = array("chevy", "nova");
$string = implode(' ', $list);
echo $string;
echo "</br>";

//e)
$num = (float)115;
echo var_dump($num);
echo "</br>";

//f)

$valor = 10.25;
echo "R$ " . number_format($valor, 2, ',', '.');
?>
