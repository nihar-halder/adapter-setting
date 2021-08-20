<?php namespace Neher;

interface PaymentInterface {
    
    public function makePayment();

    public function checkPaymentStatus();

    public function updatePaymentStatusLoclly();
}