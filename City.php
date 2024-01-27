<?php
class City
{

    public $arr = [];

    public function __construct($arr)
    {
        $this->arr = $arr;
    }


    public function getSumm()
    {
        return array_sum($this->arr);
    }

    public function addArr($num)
    {
        $this->arr[] = $num;
    }
}
