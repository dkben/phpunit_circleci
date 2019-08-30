<?php


namespace AppBundle\Exception;

use Exception as ExceptionAlias;

class NotABuffetException extends ExceptionAlias
{
    protected $message = 'Please do not mix the carnivorous and non-carnivorous dinosaurs. It will be a massacre!';
}