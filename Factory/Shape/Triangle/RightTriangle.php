<?php
require_once 'AbstractTriangle.php';
require_once 'Traits/Side.php';
require_once 'Traits/Side2.php';

class RightTriangle extends AbstractTriangle
{
    use Side;
    use Side2;

   public function __construct($side = 1 , $side2 = 1)
   {
        $this->side = $side;
        $this->side2 = $side2;
   }
  

    public function getArea(){
        return number_format(($this->side * $this->side2) / 2 ,  2);

    }
    public function getPerimeter(){
        return number_format($this->side + $this->side2 + sqrt(pow($this->side1, 2) + pow($this->side2, 2)), 2);

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