<?php

include "BoothClass.php";

class ManageClass{
    private $booth_class;
    private $daily_balance = 0;
    private $error_vehicle_class = 0;

    function __construct()
    {
        $this->booth_class = new BoothClass();
    }

    public function getDailyBalance(){
        return $this->daily_balance;
    }
    public function getErrorVehicleClass(){
        return $this->error_vehicle_class;
    }

    public function dailyBalance(){
        $today_date = date("Y.m.d");
        for($i=0; $i<count($this->booth_class->getArrayVehicleClass()); $i++){
            $vehicle_class = ($this->booth_class->getArrayVehicleClass())[$i];
            if($today_date == $vehicle_class->getDate()){
                $vehicle_order = $vehicle_class->getVehicleOrder();
                switch($vehicle_order){
                    case 1:
                        $this->daily_balance += 10;
                    case 2:
                        $this->daily_balance += 20;
                    case 3:
                        $this->daily_balance += 30;
                    default:
                        $this->error_vehicle_class += 1;
                }
            }
        }
    }
}