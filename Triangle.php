<?php

include_once "Shape.php";
class Triangle extends Shape
{
public $side1 ,
       $side2 ,
       $side3 ;

public function __construct()
{
    parent::__construct();
    $this->side1 = 1.0;
    $this->side2 = 1.0;
    $this->side3 = 1.0;
}

    public function setSide1($side1){
        $this->side1 = $side1;
    }

    public function getSide1()
    {
        return $this->side1;
    }

    public function setSide2(int $side2)
    {
        $this->side2 = $side2;
    }
    public function getSide2()
    {
        return $this->side2;
    }
    public function setSide3(int $side3)
    {
        $this->side3 = $side3;
    }
    public function getSide3()
    {
        return $this->side3;
    }


    public function getPerimeter(){
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function getArea(){
        $p = $this->getPerimeter()/2;
        $Area = sqrt($p*($p- $this->side1)*($p- $this->side2)*($p- $this->side3));
        return $Area;
    }
    public function toString()
    {
        return parent::toString() ."Side1: " .$this->getSide1() ."<br>"
                                  ."Side2: " .$this->getSide2()."<br>"
                                  ."Side3: " .$this->getSide3() ."<br>"
                                  ."Perimeter: " .$this->getPerimeter() ."<br>"
                                  ."Area: " .$this->getArea() ."<br>";
    }
}