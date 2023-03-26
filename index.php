<?php
//1..........................
//Написать функцию, которая принимает на вход два числа и возвращает их сумму

$x=1;
$y=2;
function sumNamber($x, $y){
    return $x+$y;
}
return sumNamber($x, $y);

//2..........................
//Написать функцию, которая принимает на вход строку и возвращает ее длину

$line ='calculate the length of this string';
function calculateString($line){
    return strlen($line);
}
return calculateString($line);

//3..........................
//Написать функцию, которая принимает на вход массив чисел и возвращает их среднее значение

$numbers = [1, 2, 3, 4, 5, 6];
function calculateArray($numbers){
    $average = array_sum($numbers)/count($numbers);
    return $average;
}
return calculateArray($numbers);

//4. Написать функцию, которая принимает на вход два числа и определяет, какое из них больше

$x = 1;
$y = 2;
function string($x, $y){
   if ($x > $y){
      return 'Значение "x" больше значение "y"';
   }
   else
   {
      return 'Значение "y" больше значения "x"';
   }
}
return string($x, $y);

//5. Написать функцию, которая принимает на вход две строки и возвращает их объединение

$first='Как победить';
$second=' PHP?';
function firstSecond($first, $second){
    return $first . $second;
}
return firstSecond($first, $second);

//6. Написать функцию, которая принимает на вход строку и возвращает ее в верхнем регистре

$string='Функция роста!!!!!';
function uppercase($string){
   return mb_strtoupper($string);
}
return uppercase($string);


//7. Написать функцию, которая принимает на вход строку и определяет, содержит ли она подстроку

$fullLine = 'Как сложно придумать примеры для задания!!!';
$word = 'примеры';
function string($fullLine, $word){
   if (strpos($fullLine, $word)){
      return 'True';
   }
   else {
      return 'Folse';
   }
}
return string($fullLine, $word);


//8.........................
//Найти среднее арифметическое двух чисел

$x=3;
$y=7;
function average($x, $y){
    $namber=array($x, $y);
    return array_sum($namber)/count($namber);
}
return average($x, $y);

//9.........................
//Найти корень квадратный из числа

$number=3;
function root($number){
    return sqrt($number);
}
return root($number);



#По задачам:
#1. Задача арифметическая
#2. Затрагиваем встроенную функцию, которая есть в PHP
#3. Подсказка: array_sum()
#4. Можно не решать, если не знакомы с уловными конструкциями
#5. Задача про конкатенацию строк
#6. Затрагиваем встроенную функцию, которая есть в PHP. Была в уроке
#7. Подсказка: strpos()
#8. Задача арифметическая
#9. Подсказка: sqrt()