<?php

interface a{
    public function funA();
}

interface b{
    public function funB();
}




class ParentClass implements a,b{
    
    public function funA(){
        echo "funA inteface from interface a";
    }
    
    public function funB(){
        echo "funB inteface from interface b";
    }
}


$obj = new ParentClass();
$obj->funA();
$obj->funB();