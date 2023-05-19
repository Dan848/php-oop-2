<?php

trait Quantity {
    protected
    $quantity;


    public function setQuantity($quantity, $measure_un){
        if(!is_numeric($quantity)){
            throw new Exception('ND');
        }
        $this->quantity = $quantity . $measure_un;
    }

    public function getQuantity(){
        return $this->quantity;
    }
}