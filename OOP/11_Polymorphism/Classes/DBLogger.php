<?php 

class DBLogger implements LoggerInterface{
    public function log($message){
        echo "Logging message to DB: $message";
    }
}