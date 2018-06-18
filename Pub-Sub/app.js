var events = require('events');
var eventEmitter = new events.EventEmitter();
const R = require("Ramda");
const util = require('util');

// Tasks 
const printName = function(name){ console.log( "My Name is " + name) }
const toUpper = function(name){ console.log(R.toUpper(name)) }
const addComma = function(name){ console.log( name.split(" ").join(", ") ) }

// Distributed Map for jobs
const TaskScheduler = {
  job1 : {
    task : printName,
    server : ""
  },
  job2 : {
    task : toUpper,
    server : ""
  },
  job3 : {
    task : addComma,
    server : ""
  },
  job4 : {
    task : printName,
    server : ""
  }
}

class Server {
  constructor(id) {
    this.name = id;
  }  

  run(task, args){
    task(args);
  }

}

//Servers 
const server1 = new Server("s1"); 
const server2 = new Server("s2");
const server3 = new Server("s3");
const server4 = new Server("s4");  


eventEmitter.on("runTask", function(server){
  var jobs =  Object.keys(TaskScheduler);
  for(var i=0; i<jobs.length; i++ ){
    var job = TaskScheduler[jobs[i]];
    if(job.server.length === 0){ 
      job.server = server.name;
      server.run(job.task, "Arpan Vaidya");
      break;
    }  
  }
});

// This will instantly run the jobs on servers.
var priorityQueue = [ server1, server2, server3, server4 ];
priorityQueue.forEach( (server) => {
  eventEmitter.emit('runTask', server); 
})


function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}