<?php
require_once 'AbstractTriangle.php';

require_once 'Traits/Side.php';

class EquilateralTriangle extends AbstractTriangle
{
   
   use Side;

    public function __construct($side = 1){
        $this->side = $side;
    }

    public function getArea(){
        return number_format((sqrt(3)/4)*pow($this->side,2),2);
    }
    public function getPerimeter(){
        return number_format(number_format(3 * $this->side, 2));
    }
    public function scale($scale)
    {
       if(is_numeric($scale) && $scale >= -1.0 && $scale <= 1.0){
           $this->setSide($this->side + ($this->side * $scale));
        }else{
            throw new Exception("Scale Value must be between -1 and 1");
        }

    }

}