<body>
<h1>Лабораторная работа №4</h1>
<h4>Вариант №7</h4>

<b><p style="color:red">Массив 1</p></b>

<?php
$arr1 = array (12, 56, 89, 54, 25);
for ($i = 0; $i < count($arr1); $i++) {
echo "Элемент № $i = ".$arr1[$i]."<br>";
}
?>

<b><p style="color:red">Массив 2</p></b>

<?php
$arr2 = array (12, 56, 100, 78, 56, 24);
for ($j = 0; $j < count($arr2); $j++) {
echo "Элемент № $j = ".$arr2[$j]."<br>";
}
?>

<b><p style="color:blue">Убрать дублирующие элементы каждого массива</p></b>

<?php
$arr2 = array (5 => 12, 6 => 56, 7 => 100, 8 => 78, 9 => 56, 10 => 24);
$sum = $arr1 + $arr2;
$result = array_diff($sum, array_diff_key($sum, array_unique($sum)));
{echo implode (" ", $result);}
?>

<b><p style="color:blue">Вывести количество дублирущих элементов двух массивов</p></b>

<?php
echo count (array_uintersect($arr1, $arr2, "strcasecmp"));
?>

<b><p style="color:blue">Слить два массива в один, убирая дублирующие значения</p></b>

<?php
$sum = $sum_d = array_unique(array_merge($arr1, $arr2));
{echo implode (" ", $sum);}
?>

<b><p style="color:blue">Менять местами значения массива</p></b>

<?php 
foreach ($sum as $key => &$reverse) {
$reverse = array_reverse($sum_d);
} {echo implode (" ", $reverse);}
?>

</body>
