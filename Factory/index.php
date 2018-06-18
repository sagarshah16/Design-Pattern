<?php
// Approx I have spent 2 hours on it.


require_once 'Factory/ShapeFactory.php';

$shapeFactory = new ShapeFactory();
 $circle = $shapeFactory->getInstance('Circle');

echo "Circle By radius" ."<br />";
$circle->setRadius("5");

echo $circle->getArea(). "<br />";
echo $circle->getPerimeter(). "<br />";

echo "Circle By Diameter" ."<br />";
$circle->setDiameter("10");

echo $circle->getArea(). "<br />";
echo $circle->getPerimeter(). "<br />";

echo "Circle by Scalling" . "<br />";
$circle->scale(.2);
echo $circle->getArea(). "<br />";
echo $circle->getPerimeter(). "<br /> <br />";

echo "EquilateralTriangle" ."<br />";
 $equilateralTriangle = $shapeFactory->getInstance('EquilateralTriangle');
 $equilateralTriangle->setSide(10);

echo $equilateralTriangle->getArea(). "<br />";
echo $equilateralTriangle->getPerimeter(). "<br />";

echo "EquilateralTriangle by scalling" ."<br />";
$equilateralTriangle->scale(.2);
echo $equilateralTriangle->getArea(). "<br />";
echo $equilateralTriangle->getPerimeter(). "<br /> <br />";

echo "Parallelogram" . "<br />";
$parallelogram = $shapeFactory->getInstance("Parallelogram");
$parallelogram->setSide(10);
$parallelogram->setSide2(5);
$parallelogram->setBase(10);

echo $parallelogram->getArea(). "<br />";
echo $parallelogram->getPerimeter(). "<br />";

echo "Parallelogram by scalling" ."<br />";
$parallelogram->scale(.2);
echo $parallelogram->getArea(). "<br />";
echo $parallelogram->getPerimeter(). "<br /> <br />";
//
echo "RightTriangle" . "<br/>";
$rightTriangle = $shapeFactory->getInstance("RightTriangle");
$rightTriangle->setSide(5);
$rightTriangle->setSide2(10);

echo $rightTriangle->getArea(). "<br />";
echo $rightTriangle->getPerimeter(). "<br />";

echo "RightTriangle by scalling" ."<br />";
$rightTriangle->scale(-.2);
echo $rightTriangle->getArea(). "<br />";
echo $rightTriangle->getPerimeter(). "<br /> <br />";

echo "Square" . "<br/>";
$square = $shapeFactory->getInstance('Square');
$square->setSide(10);
echo $square->getArea()."<br />";
echo $square->getPerimeter() ."<br />";

echo "Square by scalling" ."<br />";
$square->scale(-.2);
echo $square->getArea(). "<br />";
echo $square->getPerimeter(). "<br /><br />";
