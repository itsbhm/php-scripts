<?php


abstract  class BaseEmployees{
    protected $firstname;
    protected $lastname;
    
    public function getFullName(){
        return $this->firstname ." ". $this->lastname;
    }
    
    public function __construct($f, $l){
        $this->firstname = $f;
        $this->lastname = $l;
    }
}


class FullTimeEmployee extends BaseEmployees{

    protected $annualsalary;
    
    
    public function getMonthlySalary(){
        return $this->annualsalary / 12;
    }
}


class ContractEmployee extends BaseEmployees{
    
    protected $hourlyRate;
    protected $totalHours;
    
    public function getMonthlySalary(){
        return $this->totalHours * $this->hourlyRate;
    }
}

$fulltime = new FullTimeEmployee('Shubham', 'fulltime');
$contract = new ContractEmployee('Rajan', 'Contract');


// echo $fulltime->getFullName();
// echo $contract->getFullName();


//Only With Class no abstractation
// $base = new BaseEmployees('Shubham', 'Vishwakarma');
// echo $base->getFullName();

?>