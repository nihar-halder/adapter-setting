<?php namespace Neher;

class TBDCheckout implements PaymentGlobalInterface {
    public function __construct()
    {
        
    }

    public function processPostData() {
        return ['amount' => 1500, 'currency' => 'BDT'];
    }

    public function checkValidation():bool {

        return TRUE;
    }
    
    public function requestPayment() {
        $post_data = $this->processPostData();

        $this->payment($post_data);
    }


    public function payment($post_data) {
        var_dump("Payment is completed Form Technobd Checkout");
        echo '<pre>';
        print_r($post_data);
    }
}