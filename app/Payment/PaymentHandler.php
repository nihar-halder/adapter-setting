<?php

namespace Neher;

class PaymentHandler
{

    private $gatewayName;
    private $adpater;
    public $paymentG;

    public function __construct($gatewayName)
    {
        $this->gatewayName = $gatewayName;
        $this->choosePaymentGateway();
    }  

    public function gatGetwayInstance() {
        return $this->paymentG;
    }

    public function payment()
    {
        if ($this->adpater) {
            $this->processPayment($this->adpater);
        }
    }

    public function processPayment(PaymentInterface $adpater)
    {
        $adpater->makePayment();
    }

    private function choosePaymentGateway()
    {

        switch ($this->gatewayName) {
            case 'SSLCommerz':
                $this->paymentG = new SSLCommerz;
                $this->adpater = new PaymentAdapter($this->paymentG);
                break;

            case 'Bkash':
                $this->adpater = new PaymentAdapter(new Bkash);
                break;

            case 'AamarPay':
                $this->adpater = new PaymentAdapter(new AamarPay);
                break;

            case 'Portwaller':
                $this->adpater = new PaymentAdapter(new PortWaller);
                break;

            case 'TBDCheckout':
                $this->adpater = new PaymentAdapter(new TBDCheckout);
                break;

            default:
                $this->adpater = FALSE;
                break;
        }
    }
}
