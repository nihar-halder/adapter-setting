<?php namespace Neher;

class PaymentAdapter implements PaymentInterface {
    private $gateway;

    public function __construct(PaymentGlobalInterface $gateway)
    {
        $this->gateway = $gateway;
    }

    public function makePayment() {
        if($this->gateway->checkValidation()) {
            $this->gateway->requestPayment();
        }
    }

    public function checkPaymentStatus() {
        var_dump('payment status');
    }    

    public function updatePaymentStatusLoclly() {
        var_dump('payment updated');
    }
}