<?php namespace Neher;

class Bkash implements PaymentGlobalInterface {
    public function __construct()
    {
        
    }

    public function processPostData() {
        return ['amount' => 4000, 'currency' => 'BDT'];
    }

    public function checkValidation():bool {

        return TRUE;
    }
    
    public function requestPayment() {
        $post_data = $this->processPostData();

        $this->payment($post_data);
    }


    public function payment($post_data) {
        var_dump("Payment is completed Form Bkash");
        echo '<pre>';
        print_r($post_data);
    }
}