<?php
require_once 'Arr.php';

//вызов методов цепочкой
$arr = new Arr;
echo $arr->add(2)->push([3, 1])->getSum();
?>