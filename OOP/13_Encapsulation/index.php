<?php

	class Bank{
	
	private $AccNo;
	private $AccName;
	private $Balance;
	
	public function BankAccount($acno, $acname){
		
		$this->AccNo = $acno;
		$this->AccName = $acname;
		$this->Balance = 0;
			
	}
	
	//Getter Method
	public function deposit($amt){
		if($amt < 10000){
			return "Amount is less than 10000";
		}else{
			$this->Balance = $amt;
		}
	}
	
	//Setter Method
	public function getBalance(){
		return $this->Balance;
	}
	
	//Just a Function
	public function withdraw(){
		echo "Withdraw Balance";
	}
	
	}
	
$obj = new Bank();
$obj->BankAccount(1234, "Customer Account");
$msg = $obj->deposit(50000); //set deposit value from here

echo "<pre>";

print_r($obj);	//Set
print_r($obj->getBalance()); //Get
echo $msg;// Just a Msg
