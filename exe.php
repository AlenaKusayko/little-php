<?php
/*include 'var.php';
echo "I have $a apples and $b bananas";//связывание файлов командой include
require 'var.php';
echo "I have $a apples and $b bananas";//связывание файлов командой require
*/

/*echo date("d.m.Y H.i");
echo "<br>";
echo date("l");
echo "<br>";
echo date("F");
echo "<br>";
echo date("z");*/


$content = file_get_contents('Name.txt');//создаем файл с выгруженными данными
$base=array();
$base = explode("\n",$content);//формируем из данных массив
//print_r($base);
$fe=fopen('Even.txt', 'w');//создаем файл для четных номеров
$fo=fopen('Odd.txt', 'w');//файл для нечетных номеров

foreach ($base as $key=>$fio)
if ($key%2 !==0)  {
    fwrite($fe,$fio);// записываем данные в файл для четных номеров 
}
else {fwrite($fo,$fio);}// записываем данные в файл для нечетных номеров 

?>