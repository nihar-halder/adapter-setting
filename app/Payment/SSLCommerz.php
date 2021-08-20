<?php namespace Neher;

class SSLCommerz implements PaymentGlobalInterface {
    private $message = "";
    private $error = FALSE;

    public function __construct()
    {
        
    }

    public function hasError() {
        return $this->error;
    }

    public function getMessage() {
        return $this->message;
    }
      

    public function processPostData() {
        return ['amount' => 1000, 'currency' => 'BDT'];
    }

    public function checkValidation():bool {
        return TRUE;
    }
    
    public function requestPayment() {
        $post_data = $this->processPostData();

        $this->payment($post_data);
    }


    public function payment($post_data) {
        // var_dump("Payment is completed Form SSL Commerz");
        // echo '<pre>'; 
        // print_r($post_data);
        $this->error = TRUE;
        $this->message = "Data is not valid";
    }
}