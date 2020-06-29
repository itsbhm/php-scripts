<?php


function __autoload($class){
   include_once "Classes/$class.php"; 
}

function getLogger($type){
    Switch($type){
        case 'database' :
            return new DBLogger();
            break;
        case 'text' :
            return new FileLogger();
            break;
        case 'email' :
            return new EmailLogger();
            break;
        case 'sms' :
            return new SmsLogger();
            break;
    }
}


$logger = getLogger('database');
$profile = new UserProfile($logger);
$profile->deleteUser();