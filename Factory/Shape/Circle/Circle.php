<?php
require_once 'AbstractCircle.php';

class Circle extends AbstractCircle {

   protected $radius;
   protected $diameter;

    public function __construct($radius = 1)
    {
        $this->radius = $radius;
        
    }


    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    /**
     * @param mixed $diameter
     */
    public function setDiameter($diameter)
    {
        $this->radius = $diameter/2;
        $this->diameter = $diameter;
    }

    public function getArea(){

         return number_format(pow($this->radius, 2) * M_PI, 2);
    }
    public function getPerimeter(){
       return number_format(2 * M_PI * $this->radius, 2);
    }
    public function scale($scale){

    if(is_numeric($scale) && $scale >= -1.0 && $scale <= 1.0){      
           $this->setRadius($this->radius + ($this->radius * $scale));
           $this->setRadius($this->radius + ($this->radius * $scale));
        }else{
            throw new Exception("Scale Value must be between -1 and 1");
        }


    }
}