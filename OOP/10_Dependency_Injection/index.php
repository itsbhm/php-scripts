<?php

class Logger{
    
    public function log($message){
        echo "Logging Message: $message";
    }
}

// $logger =new Logger();
// $logger->log("This is Msg");

class UserProfile{
    
    private $logger;
    
    public function createUser(){
        $this->logger->log("User Created");
    }
    
    public function updateUser(){
        $this->logger->log("User Updated");
    }
    
    public function deleteUser(){
       $this->logger->log("User Deleted");
    }
   
    public function __construct(Logger $logger){ //(Logger[Type Hinting], $logger)
        $this->logger = $logger;
    }
}

$logger = new Logger();

$profile = new UserProfile($logger);
$profile->createUser();