<?php
class Calculator
{
    public float $value = 0;
    public function add($number = 0)
    {
        $this->value += $number;
    }
    public function sub($number = 0)
    {
        $this->value -= $number;
    }
    public function multiply($number = 0)
    {
        $this->value *= $number;
    }
    public function divide($number = 0)
    {
        $this->value /= $number;
    }
    public function total()
    {
        return $this->value;
    }
    public function clear()
    {
        $this->value = 0;
    }
}
