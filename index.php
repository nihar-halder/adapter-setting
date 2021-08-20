<?php
require 'vendor/autoload.php';

use Acme\Book;
use Acme\BookInterface;
use Acme\Kindle;
use Acme\eReaderAdapter;
use Neher\AamarPay;
use Neher\Bkash;
use Neher\Payment;
use Neher\PaymentAdapter;
use Neher\PaymentHandler;
use Neher\PaymentInterface;
use Neher\PortWaller;
use Neher\SSLCommerz;
use Neher\TBDCheckout;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }

    public function payment(PaymentInterface $payment)
    {
        $payment->makePayment();
    }
}

// (new Person)->read(new eReaderAdapter(new Kindle));

// (new Person)->payment(new Payment);

// (new Person)->payment(new PaymentAdapter(new SSLCommerz));

// (new Person)->payment(new PaymentAdapter(new AamarPay));

// (new Person)->payment(new PaymentAdapter(new TBDCheckout));

// (new Person)->payment(new PaymentAdapter(new Bkash));

// (new Person)->payment(new PaymentAdapter(new PortWaller));

// (new PaymentHandler('SSLCommerz'))->payment();


$handler =  new PaymentHandler('SSLCommerz');
$gateway = $handler->gatGetwayInstance();

$handler->payment();

if ($gateway->hasError()) {
    $message = $gateway->getMessage();
    print_r($message);
}
