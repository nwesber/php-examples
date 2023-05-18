<?php

// Existing class with incompatible interface
class Adaptee
{
    public function specificRequest()
    {
        return "Adaptee's specific request";
    }
}

// Target interface expected by the client
interface Target
{
    public function request();
}

// Adapter class
class Adapter implements Target
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        return "Adapter: " . $this->adaptee->specificRequest();
    }
}

// Client code
function clientCode(Target $target)
{
    return $target->request();
}

// Usage
$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);

$result = clientCode($adapter);
echo $result;  // Output: Adapter: Adaptee's specific request
