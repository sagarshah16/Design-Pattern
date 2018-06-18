<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 9/16/17
 * Time: 1:20 AM
 */

class Observer1 implements SplObserver{

  public function update(SplSubject $subject){

    echo __CLASS__ . ' - ' . $subject->getName();
  }
}

class Observer2 implements SplObserver{

  public function update(SplSubject $subject){
    echo __CLASS__ . ' - ' . $subject->getName();
  }

}


class Subject implements SplSubject{


  private $observers;
  private $name;

  public function __construct($name){
    $this->observer = array();
    $this->name = $name;
  }
  public function attach(SplObserver $observer){
      $this->observers[] = $observer;
  }
  public function detach(SplObserver $observer){
        $this->observers[] = $observer;
  }
  public function notify(){

    foreach($this->observers as $observer){
      $observer->update($this);
    }
  }

  public function getName(){
    return $this->name;
  }
}


$observer1 = new Observer1();
$observer2 = new Observer2();


$subject = new Subject("test");

$subject->attach($observer1);
$subject->attach($observer2);
$subject->notify();