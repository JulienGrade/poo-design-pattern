<?php
require_once 'vendor/autoload.php';


// string
$string = serialize('this is a string');

// integer
$int = serialize(345);
$unserializedInt = unserialize($int);

// floating point
$floatingPoint = serialize(345.678);

// array
$array = serialize(['this', 'is', 'an', 'array', 200]);

// bool
$bool = serialize(false);

class Manager
{
    public function __construct(public string $name)
    {
    }
}

class Department
{
    public ?Manager $manager;

    public function __construct(public string $name)
    {
    }
}

$manager = new Manager('Manager A');

$sales = new Department('sales');

$sales->manager = $manager;

$ser = serialize($sales);

dd($ser);