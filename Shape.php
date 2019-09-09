<?php


class Shape
{
    public $color;

    public function __construct()
    {
        $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function toString(){
    return "Color: " .$this->color ."<br>";
    }
}