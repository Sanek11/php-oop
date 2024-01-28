<?php
require_once 'AvgHelper.php';

//вызов методов цепочкой
$s = new ArraySumHelper;
$arr = [2, 3, 4];
echo $s->getSum2($arr);
?>