<?php

require_once 'AbstractRectangle.php';

require_once 'Traits/Side.php';
require_once 'Traits/Side2.php';

class Parallelogram extends AbstractRectangle
{
    use Side, Side2;
    protected $base;

    public function __construct($side1 = 1 , $side2 = 1, $base = 1)
    {
        $this->side = $side1;
        $this->side2 = $side2;
        $this->base = $base;

    }

    public function setBase($base){
        $this->base = $base;
    }

    public function calculateHeight($a, $b)
    {
        return $a / $b;
    }
    public function getArea(){

     return number_format($this->base *  $this->calculateHeight($this->side, $this->side2),2) ;

    }
    public function getPerimeter(){

         return  number_format(2 * ($this->side + $this->side2), 2) ;
    }
    public function scale($scale){
     
     if(is_numeric($scale) && $scale >= -1.0 && $scale <= 1.0){         
        $this->setSide($this->side + ($this->side * $scale));
        $this->setSide2($this->side2 + ($this->side2 * $scale));
        }else{
            throw new Exception("Scale Value must be between -1 and 1");
        }

    }
}