<?php 

class MinibusClass{
    private $hgs_no;
    private $name;
    private $last_name;
    private $vehicle_type = "Minibus";
    private $time;
    private $date;
    private $balance;
    private $vehicle_order = 2;
    private $number_passes = 0;

    public function getHgsNo(){
        return $this->hgs_no;
    }
    public function getName(){
        return $this->name;
    }
    public function getLastName(){
        return $this->last_name;
    }
    public function getVehicleType(){
        return $this->vehicle_type;
    }
    public function getTime(){
        return $this->time;
    }
    public function getDate(){
        return $this->date;
    }
    public function getBalance(){
        return $this->balance;
    }
    public function getVehicleOrder(){
        return $this->vehicle_order;
    }
    public function getNumberPasses(){
        return $this->number_passes;
    }

    public function setHgsNo($hgs_no){
        $this->hgs_no = $hgs_no;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setLastName($last_name){
        $this->last_name = $last_name;
    }
    public function setBalance($balance){
        $this->balance = $balance;
    }
    public function setNumberPasses($number_passes){
        $this->number_passes = $number_passes;
    }
    public function setDate(){
        $this->date = date("Y.m.d");
    }
    public function setTime(){
        $this->time = date("h:i:sa");
    }
}