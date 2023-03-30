<?php
abstract class PaymentBy{
    public function paypal(){
        echo "Payment throught Paypal";

    }

    abstract function Payoneer();
    
}

interface  PaymentIn{

    function Rupees();
    
}

class Payment extends PaymentBy implements PaymentIn{
    public function Payoneer(){
        echo "Payment through Payoneer";
    }

    public function Rupees(){
        echo "Payment in Rupees";
    }
}





