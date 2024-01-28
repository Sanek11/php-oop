<?php
require_once 'AvgHelper.php';

//Класс как набор методов
$s = new ArraySumHelper;
$arr = [2, 3, 4];
echo $s->getSum2($arr);
?>