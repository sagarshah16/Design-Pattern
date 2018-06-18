<?php
  
class Task{

 // Sample Tasks

 public static function printName($name){
    return $name;
 }

 public static function toUpper($name){
   return strtoupper($name) ;
 }
  public static function toUcWords($name){
   return ucwords($name);
 }

 public static function toLower($name){
   return strtolower($name);
 }


  }

?>
