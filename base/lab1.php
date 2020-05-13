<?php
// Все числа в десятичной системе имеют значение 28
$int_10 = 28; // десятичное число
$int_2 = 0b11100; // двоичное число
$int_8 = 034; // восьмеричное число
$int_16 = 0x1C; // шестнадцатеричное число
echo "int_10 = $int_10<br>";
echo "int_2 = $int_2<br>";
echo "int_8 = $int_8<br>";
echo "int_16 = $int_16<br>";

$a1 = 1.5;
$a2 = 1.3e4; // 1.3 * 10^4
$a3 = 6E-8; // 0.00000006
echo $a1 . " | " . $a2 . " | " . $a3 ."<br>";
$a=NULL;
if($a)
    echo "<br>Переменная a определена<br>";
else
    echo "<br>Переменная a не определена<br>";

$a=10;
$b=5;
$result = "$a+$b<br>";
echo $result;
$result = '$a+$b<br>';
echo $result;

$phones = array('iPhone', 'Samsung Galaxy S III', 'Nokia N9', 'Samsung ACE II');
echo $phones[1] .'<br>';

//Приведение типов
$sum = "3" + 4;  // Строка "3" будет неявно преобразована в число 3
echo "\n$sum";
$num = (int)"50";
echo gettype($num);
echo (float)"12abc", "<br>";    // 12
echo (float)"a123bc", "<br>";   // 0
echo (float)"-12", "<br>";      // -12
echo (float)"12.3", "<br>";     // 12.3
echo (float)".13", "<br>";      // 0.13
echo (float)"1.2e5", "<br>";    // 120000
echo (float)"1.e5", "<br>";           // 100000

echo (bool)"", ": FALSE", "<br>";   // FALSE
echo (bool)1, ": TRUE", "<br>";     // TRUE
echo (boolean)[], ": FALSE<br>";        // FALSE

echo (string)TRUE;
echo (string)FALSE, "<br>: пустая строка<br>";

echo (string)-123, "<br>";
echo (string)12.4, "<br>";
echo (string)1.4e6; "<br>";

$arr = [];
echo (string)$arr."<br>";
echo (string)NULL, "пустая строка<br>";

class Obj {
    public function __toString() {
        return "Object<br>";
    }
}

$obj = new Obj;
echo (string)$obj;


//сравнение переменных
$foo = 10;            // $foo это целое число
$str = "$foo";        // $str это строка
$fst = (string) $foo; // $fst это также строка

// Это напечатает "они одинаковы"

if ($fst === $str) {
    echo "<br>они одинаковы<br>";
}

$var1 = 10;
$var2 = '10';
if ($var1 == $var2) {
    echo "они одинаковы<br>";
}

$var1 = 2;
$var2 = '2';

var_dump(1 != 14);// вернет true
echo "<br>";
var_dump('hi' != 'hi');// вернет false
echo "<br>";
var_dump($var1 <> $var2);    // вернет false
echo "<br>";
var_dump('Home' <> 'home');  // вернет true
echo "<br>";
var_dump(14 !== 14);     // вернет false
echo "<br>";
var_dump('10' !== 10);   // вернет true
echo "<br>";

//конкатенация
$a = '12345';

// This works:
echo "qwe{$a}rty<br>"; // qwe12345rty, using braces
echo "qwe" . $a . "rty<br>"; // qwe12345rty, concatenation used

$value1 = "string1";
$value2 = "string2";
$value1 .= $value2;
echo $value1."<br>";

$bad_name = $value1;
echo "bad_name = $bad_name<br>";
$value3 = &$bad_name;
echo "value3 = $value3<br>";

//массивы
$arr = array('PHP', 'MySQL', 'Apache');

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i]." ";
}

echo "<br>";

$str = "http://|example|@gmail|.|com";
$arr = explode("|",$str);
for($i = 0; $i < count($arr); $i++)
{
    echo $arr[$i]."<br>";
}

echo "<br>";

$arr1[] = "http:/";
$arr1[] = "example";
$arr1[] = "@gmail.com";

$str = implode("/",$arr1);   //http://example//@gmail.com
echo $str;


$arr = array(9, 8, 7, 6, 5, 4, 3, 2, 1, 0);
unset($arr[0], $arr[2], $arr[4], $arr[6], $arr[8]);
// Проверяем существуют ли элементы массива
for($i = 0; $i < 10; $i++)
{
    if(isset($arr[$i])) echo "<br>Элемент $arr[$i] определён <br>";
    else echo "<br>Элемент $arr[$i] не определён <br>";
}

//delete all array with unset
$arr = array(9, 8, 7, 6, 5, 4, 3, 2, 1, 0);
unset($arr);
if(isset($arr)) echo "Массив определён<br>";
else echo "Массив не определён<br>";

$arr = array( array('val1','name1', 2500 ),
    array('val2','name2', 3000),
    array('val3', 'name3', 2700));

for ($i = 0; $i < 3; $i++)
{
    for ($j=0; $j <3; $j++)
    {
        echo ' | '.$arr[$i][$j];
    }
    echo "<br>";
}

$kitchen = array("Spoons"=>"35", "Knifes"=>"3", "Plates"=>"12");
foreach($kitchen as $item => $item_count) {
    echo "Item=" . $item . ", Value=" . $item_count."<br>";
}

$my_arr = array(1, 2, 3);
foreach ($my_arr as &$value) {
    $value *= 2;
    echo $value. ' ';
}

//разименование переменных
$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

$a; //Returns Hello
$$a; //Returns World
$$$a; //Returns Foo
$$$$a; //Returns Bar
$$$$$a; //Returns a

echo "<br>$a, ${$a}, ${$$a}, ${$$$a}, ${$$$$a}<br>";
