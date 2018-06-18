<?php
 require_once 'Task.php';

class Server {

  public $name;

  public function __construct($name){
    $this->name = $name;
  }
   
   //This is simple server which will run the task assign to it based on published event. 
   public function run($task, $arg){

    return Task::$task($arg);
   }

 
}


?>