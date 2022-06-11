<?php 
namespace App\Models;
use App\Traits\Balancing;
use App\Interfaces\B;
class Order implements B{
    use Balancing;
    public function __construct(){
        dd("this is constructor");
    }
    const CONSTANT="constant Value";
    public static $my_static ="static value";
    public static function balanceQty(){
        return "Balance Quantity";
    }
   protected  $order_id=1;
private function confirmOrder(){
        return "Confirm Order";
    }

    public function balanceItem(){
        return $this->confirmOrder();
    }
    public function callA(){

    }

}