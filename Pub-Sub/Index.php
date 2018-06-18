<?php

/* This is sample for running a task on cluser of server and we will use pubsub pattern 
to publish event to mock messenge queue and our subscribe will run each job on server at the same time. */ 

 require_once 'PubSub.php';
 require_once 'Server.php';
 
//sample server cluser
$server1 = new Server("s1");
$server2 = new Server("s2");
$server3 = new Server("s3");
$server4 = new Server("s4");

//to simulate messaning queue 
$priorityQueue = [ $server1, $server2, $server3, $server4 ];
 

 /*sample taskScheduler to mimic cron tasks we want these task to run on each server simulationusly. */

 $taskScheduler = array(
  'job1' => array(
         "Task" => "printName",
         "Server" => ""
         ),
  'job2' => array(
         "Task" => "toUpper",
         "Server" => ""
         ),
  'job3' => array(
         "Task" => "toUcWords",
         "Server" => ""
         ),
  'job4' => array(
         "Task" => "toLower",
         "Server" => ""
         )
  );



/* Upon receiving runTask Message it will figure out job from taskScheduler which is
  not running on server and assign server to run that job. This will also update 
  that job in taskScheduler with the server where it is running on. */

PubSub::subscribe( 'runTask', function ($server) use (&$taskScheduler)
{    
    foreach ($taskScheduler as $key => &$value) {
      //find a job which is not running on server
      if($value['Server'] == ''){
        $value['Server'] = $server->name;
         echo $server->run($value['Task'], 'sagar Shah') . "<br />";
         break;
       }
      
    } 
} );

// public runTask Message instantaneously.
foreach ($priorityQueue as $value) {
    PubSub::publish('runTask', $value);
}


?>