<?php
class Arr
{
    // Массив для хранения чисел:
    private $numbers;

    // Добавляет число в набор:
    public function add($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            $this->numbers[] = $arr[$i];
        }
    }

    // Находит сумму чисел набора:
    public function getSum()
    {
        return array_sum($this->numbers);
    }

    public function getAvg()
    {
        $arrLength = count($this->numbers);
        $arrSumm = array_sum($this->numbers);
        return $arrSumm / $arrLength;
    }
}

