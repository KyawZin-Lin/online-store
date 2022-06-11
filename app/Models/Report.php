<?php 
namespace App\Models;
use App\Models\Order;
class Report extends Order{
    public function reduceQty(){
        return $this->confirmOrder();
    }
}