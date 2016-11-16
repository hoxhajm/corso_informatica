<?php
namespace Users;


abstract class Worker implements Person{
    
    private $company;
    
    function getCompany(){
        return $this->company;
    }

    protected function setCompany($c){
        $this->company=$c;
    }
}
