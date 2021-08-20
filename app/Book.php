<?php
namespace Acme;

class Book implements BookInterface{
    
    public function open() {        
        var_dump('Opening the paperbook');
    }

    public function turnPage() {
        var_dump('Turning the page of the paper book');
    }
}