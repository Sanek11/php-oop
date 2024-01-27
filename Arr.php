<?php
class Arr
{
    // Массив для хранения чисел:
    private $numbers;

    // Добавляет число в набор:
    public function add($arr)
    {
        $this->numbers[] = $arr;
        return $this;
    }

    public function push($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            $this->numbers[] = $arr[$i];
        }
        return $this;
    }

    // Находит сумму чисел набора:
    public function getSum()
    {
        return array_sum($this->numbers);
    }
}
