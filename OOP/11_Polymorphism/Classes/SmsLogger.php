<?php

class SmsLogger implements LoggerInterface{
    public function log($message){
        echo "Logging message to SMS: $message";
    }
}