<?php

class UserProfile{
    private $logger;
    
    public function createUser(){
        echo "Creating User";
        $this->logger->log("User Created");
    }
    
    public function updateUser(){
        echo "Updatting User";
        $this->logger->log("User Updated");
    }
    
    public function deleteUser(){
        echo "Deleting User";
        $this->logger->log("User Deleted");
    }
    
    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }
}