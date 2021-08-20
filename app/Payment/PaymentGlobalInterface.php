<?php namespace Neher;

interface PaymentGlobalInterface {
    public function processPostData();

    public function checkValidation(): bool;

    public function requestPayment();
    public function hasError();
    public function getMessage();

}