<?php

require_once 'AbstractFactoryShape.php';

class ShapeFactory extends AbstractFactoryShape{
 protected $key;

    public function getInstance($key = null){

        if (!empty($key)) {
            $this->key = $key;
        }

        switch(ucfirst($this->key))
        {
            case 'Circle':
               require_once 'Shape/Circle/Circle.php';
                $instance = new Circle();
                break;

            case 'EquilateralTriangle':
                require_once 'Shape/Triangle/EquilateralTriangle.php';
                $instance = new EquilateralTriangle();
                break;

            case 'Parallelogram':
                require_once 'Shape/Rectangle/Parallelogram.php';
                $instance = new Parallelogram();
                break;

            case 'RightTriangle':
                require_once 'Shape/Triangle/RightTriangle.php';
                $instance = new RightTriangle();
                break;

            case 'Square':
                require_once 'Shape/Rectangle/Square.php';
                $instance = new Square();
                break;

            default:
                throw new Exception("Need to pass Shape name");
                //default

        }

        return $instance;
    }
}