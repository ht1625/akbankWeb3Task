<?php

class BoothClass{
    private $array_vehicle_class;
    private $otomobil_hgs_price = 10;
    private $mininus_hgs_price = 20;
    private $otobus_hgs_price = 30;
    private $error_message = "";
    private $vehicle_number = 0;
    private $error_vehicle_number = 0;

    function __construct()
    {
        $this->array_vehicle_class = array();
    }
    
    public function getArrayVehicleClass(){
        return $this->array_vehicle_class;
    }
    public function getOtomobilHgsPrice(){
        return $this->otomobil_hgs_price;
    }
    public function getMinibusHgsPrice(){
        return $this->mininus_hgs_price;
    }
    public function getOtobusHgsPrice(){
        return $this->otobus_hgs_price;
    }
    public function getErrorMessage(){
        return $this->error_message;
    }
    public function getVehicleNumber(){
        return $this->vehicle_number;
    }

    public function insertVehicleClass($vehicle_class){
        array_push($this->array_vehicle_class, $vehicle_class);
        $this->vehicle_number++;
    }
    
    public function deleteVehicleClass($vehicle_class){
        for($i=0; $i<count($this->getArrayVehicleClass()); $i++){
            if($this->array_vehicle_class[$i] == $vehicle_class){
                array_splice($this->array_vehicle_class, $i, 1);
                $this->vehicle_number--;
                break;
            }
        }
    }

    public function payProcess($vehicle_class){
        try{
            $check_vehicle_class = false;
            switch($vehicle_class->getVehicleOrder()){
                case 1:
                    $new_balance = $vehicle_class->getNumberPasses() - 10;
                    $vehicle_class->setNumberPasses($new_balance);
                    $check_vehicle_class = true;
                case 2:
                    $new_balance = $vehicle_class->getNumberPasses() - 20;
                    $vehicle_class->setNumberPasses($new_balance);
                    $check_vehicle_class = true;
                case 3:
                    $new_balance = $vehicle_class->getNumberPasses() - 30;
                    $vehicle_class->setNumberPasses($new_balance);
                    $check_vehicle_class = true;
                default:
                    $this->error_message = "Wrong Vehicle Type!";
                    $this->error_vehicle_number++;
                if($check_vehicle_class){
                    $this->insertVehicleClass($vehicle_class);
                }    
            }
        }catch(Exception $exception){
            $this->error_message = $exception;
        }
    }
}